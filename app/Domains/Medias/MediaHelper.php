<?php

namespace App\Domains\Medias;

use App\Domains\Medias\Category as MediaCategory;
use App\Domains\Medias\Repositories\CategoryRepository;
use App\Support\Database\Eloquent\Contracts\ModelContract;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class MediaHelper
{
    const COLLECTION_EXTENSIONS = [
        'audios'    => [
            '3gp',
            '3gpp',
            '3gpp2',
            'ac3',
            'eac3',
            'mkv',
            'mov',
            'mp1',
            'mp2',
            'mp3',
            'mp4',
            'mpeg',
            'mpg',
            'oga',
            'ogg',
            'tone',
        ],
        'documents' => [
            'csv',
            'doc',
            'dot',
            'odg',
            'ods',
            'odt',
            'otg',
            'ots',
            'ott',
            'pdf',
            'ppt',
            'pptx',
            'rtf',
            'txt',
            'xls',
            'xlsx',
        ],
        'fonts'     => [
            'otf',
            'sfnt',
            'ttf',
            'woff',
            'woff2',
        ],
        'images'    => [
            'png',
            'jpg',
            'jpeg',
            'gif',
            'bmp',
        ],
        'videos'    => [
            'mp4',
            'avi',
            'mov',
            'mkv',
        ],

    ];

    /**
     * @var UploadedFile
     */
    private $file;

    /**
     * @var ModelContract
     */
    private $model;

    /**
     * MediaHelper constructor.
     *
     * @param UploadedFile  $file
     * @param ModelContract $model
     */
    function __construct(UploadedFile $file, ModelContract $model)
    {
        $this->file = $file;
        $this->model = $model;
        $this->request = app('request');
        $this->mediaCategoryRepository = app(CategoryRepository::class);
        $this->mediaCategory = $this->getMediaCategory($model);
    }

    /**
     * Get first or create new Media Category from Model
     *
     * @param ModelContract $model
     *
     * @return Category
     */
    public function getMediaCategory(ModelContract $model) : MediaCategory
    {
        $mediaCategory = $this->mediaCategoryRepository->firstOrNew([
            'slug' => $model->getMediaCategorySlug(),
        ]);

        if ( ! $mediaCategory->id ) {
            $mediaCategory->title = $model->getEntityName();
            $mediaCategory->save();
        }

        return $mediaCategory;
    }

    public function addMedia()
    {
        if ($this->file->isValid()) {
            return $this->model->addMedia($this->file)
                ->withProperties([
                    'category_id'   => $this->mediaCategory->id,
                    'category_slug' => $this->mediaCategory->slug,
                    'title'         => $this->model->getTitle(),
                    'extension'     => $this->file->getClientOriginalExtension(),
                    'size'          => $this->file->getClientSize(),
                ])->toMediaLibrary($this->getCollectionByExtension());
        }
    }

    /**
     * Determine Media Collection by File Extension
     *
     * @return string
     */
    public function getCollectionByExtension()
    {
        if (in_array($this->file->getClientOriginalExtension(), static::COLLECTION_EXTENSIONS['images'])) {
            return 'images';
        } elseif (in_array($this->file->getClientOriginalExtension(), static::COLLECTION_EXTENSIONS['videos'])) {
            return 'videos';
        } elseif (in_array($this->file->getClientOriginalExtension(), static::COLLECTION_EXTENSIONS['audios'])) {
            return 'audios';
        } elseif (in_array($this->file->getClientOriginalExtension(), static::COLLECTION_EXTENSIONS['documents'])) {
            return 'documents';
        } elseif (in_array($this->file->getClientOriginalExtension(), static::COLLECTION_EXTENSIONS['fonts'])) {
            return 'fonts';
        } else {
            return 'default';
        }
    }
}