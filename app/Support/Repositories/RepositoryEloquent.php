<?php

namespace App\Support\Repositories;

use App\Support\Criteria\OrderDescCriteria;
use App\Support\Repositories\RepositoryContract;
use Prettus\Repository\Contracts\CacheableInterface;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Traits\CacheableRepository;

abstract class RepositoryEloquent extends BaseRepository implements RepositoryContract, CacheableInterface
{
    use CacheableRepository;

    protected $skipPresenter = true;

    /**
     * @param null   $title
     * @param string $field
     *
     * @return array
     */
    public function pluckForSelect($title = null, $field = 'id') : array
    {
        $title = !empty($title) ? $title : $this->model->getTitleColumn();

        return $this->model->pluck($title, $field)->toArray();
    }

    /**
     * @param $slug
     *
     * @return mixed
     */
    public function findBySlug($slug)
    {
        return $this->model->where('slug', '=', $slug)->first();
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(OrderDescCriteria::class));
        $this->pushCriteria(app(RequestCriteria::class));
    }
}