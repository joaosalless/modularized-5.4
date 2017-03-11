<?php

namespace App\Domains\Medias\Listeners;

use Spatie\Color\Rgb;
use ColorThief\ColorThief;
use Illuminate\Contracts\Events\Dispatcher;
use Spatie\MediaLibrary\Events\MediaHasBeenAdded;

class MediaEventSubscriber
{
    /**
     * Register the listeners for the subscriber.
     *
     * @param  Dispatcher  $events
     */
    public function subscribe(Dispatcher $events)
    {
        $events->listen(
            MediaHasBeenAdded::class,
            [$this, 'whenMediaHasBeenAdded']
        );
    }

    public function whenMediaHasBeenAdded(MediaHasBeenAdded $event)
    {
        $media         = $event->media;

        if ($media->isImage()) {
            $dominantColor = ColorThief::getColor($media->getPath());
            $hexColor      = (new Rgb(...$dominantColor))->toHex();

            $media->dominant_color = $hexColor;
            $media->save();
        }
    }
}