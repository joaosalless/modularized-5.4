<?php

namespace App\Domains\Medias;

use Spatie\MediaLibrary\Media;
use Spatie\MediaLibrary\PathGenerator\PathGenerator;

class MediaPathGenerator implements PathGenerator
{
    /*
     * Get the path for the given media, relative to the root storage path.
     */
    public function getPath(Media $media): string
    {
        return $media->category_slug . '/' . $media->collection_name . '/' . $media->id . '/';
    }

    /*
     * Get the path for conversions of the given media, relative to the root storage path.
     * @return string
     */
    public function getPathForConversions(Media $media): string
    {
        return $media->category_slug . '/' . $media->collection_name . '/' . $media->id . '/conversions/';
    }
}