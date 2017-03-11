<?php

namespace App\Support\Http\Controllers\Traits;

use App\Domains\Medias\MediaHelper;
use App\Support\Criteria\OnlyTrashedCriteria;
use App\Support\Criteria\WithTrashedCriteria;
use App\Support\Database\Eloquent\Contracts\ModelContract;
use Illuminate\Http\Request;
use Validator;

trait CrudTrait
{
    /**
     * @return mixed
     */
    public function index()
    {
        return $this->view("{$this->entity->getEntityViewsAlias()}.index")->with($this->getCollection());
    }

    /**
     * @return array
     */
    public function getCollection(): array
    {
        $response = [
            'collection' => $this->repository->with($this->getEntityRelations())->paginate(),
        ];

        return array_merge($this->getEntity(), $response);
    }

    /**
     * @return array
     */
    public function getEntityRelations(): array
    {
        return [

        ];
    }

    /**
     * @param null $id
     *
     * @return array
     */
    public function getEntity($id = null): array
    {
        $response = [
            'entity'       => ($id !== null)
                ? $this->repository->with($this->getEntityRelations())->find($id)
                : $this->repository->makeModel(),
            'actionRoutes' => $this->getActionButtons(),
            'relations'    => $this->getEntityRelations(),
        ];

        return $response;
    }

    /**
     * @return array
     */
    public function getActionButtons(): array
    {
        $response = [
            'model' => [
                'create'          => true,
                'show'            => true,
                'show_media'      => true,
                'edit'            => true,
                'destroy'         => true,
                'toggle_trash'    => true,
                'toggle_active'   => true,
                'toggle_is_cover' => false,
            ],
            'media' => [
                'show'            => true,
                'show_media'      => true,
                'edit'            => true,
                'destroy'         => true,
                'toggle_trash'    => true,
                'toggle_active'   => true,
                'toggle_is_cover' => false,
            ],
        ];

        return $response;
    }

    /**
     * @return mixed
     */
    public function getTrashed()
    {
        $this->repository->pushCriteria(app(OnlyTrashedCriteria::class));

        return $this->view("{$this->entity->getEntityViewsAlias()}.index")->with($this->getCollection());
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return $this->view("{$this->entity->getEntityViewsAlias()}.create")->with($this->getEntity());
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function edit($id)
    {
        return $this->view("{$this->entity->getEntityViewsAlias()}.edit")->with($this->getEntity($id));
    }

    public function store(Request $request)
    {
        $data = $this->formatData($request->all());
        $rules = $this->repository->makeModel()->rules()->creating();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            alert()->error($validator->getMessageBag());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $entity = $this->repository->create($data);

        $this->addMedias($entity);

        return $this->crudResponse($entity, 'created');
    }

    /**
     * @param array $data
     *
     * @return array
     */
    public function formatData(array $data): array
    {
        return $data;
    }

    /**
     * @param ModelContract $entity
     * @param string        $mediaInput
     *
     * @return mixed
     */
    public function addMedias(ModelContract $entity, $mediaInput = 'medias')
    {
        if (request()->hasFile($mediaInput)) {
            foreach (request()->file($mediaInput) as $file) {
                $mediaHelper = new MediaHelper($file, $entity);
                $mediaHelper->addMedia();
            }
        }
    }

    public function crudResponse($entity, string $action)
    {
        $response = [
            'message' => trans("model.{$action}", ['model' => $entity->getEntityShortName()]),
            'data'    => $entity->toArray(),
        ];

        if (request()->wantsJson()) {
            return response()->json($response);
        }

        alert()->success($response['message']);

        if (request()->get('redirect_url')) {
            return redirect(request()->get('redirect_url'));
        }

        return redirect()->route("{$this->panel->routeAlias()}.{$this->entity->getEntityRouteAlias()}.show", $entity->id);
    }

    public function update(Request $request, $id)
    {
        $data   = $this->formatData($request->all());
        $entity = $this->repository->find($id);
        $rules  = $entity->rules()->updating();

        $validator = Validator::make($data, $rules);

        if ($validator->fails()) {
            alert()->error($validator->getMessageBag());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $entity = $this->repository->update($data, $id);

        $this->addMedias($entity);

        return $this->crudResponse($entity, 'updated');
    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        $this->repository->pushCriteria(app(WithTrashedCriteria::class));

        return $this->view("{$this->entity->getEntityViewsAlias()}.show")->with($this->getEntity($id));
    }


    /**
     * @param Request $request
     * @param         $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggleActive(Request $request, $id)
    {
        $this->repository->pushCriteria(app(WithTrashedCriteria::class));

        $entity = $this->repository->find($id);

        $entity->active = !$entity->active;
        $entity->save();

        $response = [
            'message' => trans('model.toggled_active', [
                'model'  => $entity->getEntityShortName(),
                'status' => $entity->active ? 'ativado' : 'desativado',
            ]),
            'data'    => $entity->toArray(),
        ];

        alert()->success($response['message']);

        return redirect()->back();
    }


    /**
     * @param Request $request
     * @param         $id
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request, $id)
    {
        $this->repository->pushCriteria(app(OnlyTrashedCriteria::class));

        $entity = $this->repository->find($id);

        $entity->forceDelete();

        $response = [
            'message' => trans('model.deleted', ['model' => $entity->getEntityName()]),
            'deleted' => $entity,
        ];

        if ($request->wantsJson()) {
            return response()->json($response);
        }

        alert()->success($response['message']);

        return redirect()->back()->with('message', $response['message']);
    }


    /**
     * @param Request $request
     * @param         $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggleTrash(Request $request, $id)
    {
        $this->repository->pushCriteria(app(WithTrashedCriteria::class));

        $entity = $this->repository->find($id);

        $entity->trashed() ? $entity->restore() : $entity->deletePreservingMedia();

        $response = [
            'message' => trans('model.toggled_trash', [
                'model'  => $entity->getEntityName(),
                'status' => $entity->trashed() ? 'excluído' : 'restaurado',
            ]),
            'data'    => $entity->toArray(),
        ];

        alert()->success($response['message']);

        return redirect()->back();
    }


    /**
     * @param Request $request
     * @param         $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function toggleIsCover(Request $request, $id)
    {
        $media = $this->repository->find($id);
        $anotherMedias = [];

        if ($media->isImage()) {
            foreach ($media->model->getMedia('images') as $anotherMedia) {
                if ($anotherMedia->id !== $media->id) {
                    $this->repository->update(['is_cover' => false], $anotherMedia->id);
                }
            }
            if (!$media->is_cover) {
                $this->repository->update(['is_cover' => true], $media->id);
            }
        }

        $response = [
            'message' => trans('media.toggled_is_cover', [
                'model' => $media->model->getEntityName(),
            ]),
            'data'    => $media->toArray(),
        ];

        alert()->success($response['message']);

        return redirect()->back();
    }
}