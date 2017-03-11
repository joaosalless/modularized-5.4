<?php

namespace App\Support\Database\Eloquent\Traits;

use App\Domains\Medias\Media;
use App\Domains\Medias\MediaHelper;

trait ModelMediasTrait
{
    /**
     * Medias
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function medias()
    {
        return $this->morphMany(Media::class, 'model')->orderBy('id', 'desc');
    }

    /**
     * Medias
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function mediaCover()
    {
        return $this->morphMany(Media::class, 'model')->where('is_cover', 1)->first();
    }

    /**
     * Medias
     *
     * @param null $collection
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function mediasWithTrashed($collection = 'default')
    {
        return $collection
            ? $this->morphMany(Media::class, 'model')->where('collection_name', $collection)->withTrashed()
            : $this->morphMany(Media::class, 'model')->withTrashed();
    }

    /**
     * Return Entity Name Plural
     *
     * @return string
     */
    public function isImage()
    {
        return in_array($this->extension, MediaHelper::COLLECTION_EXTENSIONS['images']);

    }
}