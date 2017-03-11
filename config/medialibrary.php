<?php

return [

    /*
     * The filesystems on which to store added files and derived images by default. Choose
     * one or more of the filesystems you configured in app/config/filesystems.php
     */
    'defaultFilesystem' => 'media',

    /*
     * The maximum file size of an item in bytes. Adding a file
     * that is larger will result in an exception.
     */
    'max_file_size' => 1024 * 1024 * 10,

    /*
     * This queue will be used to generate derived images.
     * Leave empty to use the default queue.
     */
    'queue_name' => '',

    /*
     * The class name of the media model to be used.
     */
    'media_model' => App\Domains\Medias\Media::class,

    /*
     * The engine that will perform the image conversions.
     * Should be either `gd` or `imagick`
     */
    'image_driver' => 'gd',

    /*
     * When urls to files get generated this class will be called. Leave empty
     * if your files are stored locally above the site root or on s3.
     */
    'custom_url_generator_class' => null,

    /*
     * The class that contains the strategy for determining a media file's path.
     */
    'custom_path_generator_class' => \App\Domains\Medias\MediaPathGenerator::class,

    's3' => [
        /*
         * The domain that should be prepended when generating urls.
         */
        'domain' => 'https://xxxxxxx.s3.amazonaws.com',
    ],

    'remote' => [
        /*
         * Any extra headers that should be included when uploading media to
         * a remote disk. Even though supported headers may vary between
         * different drivers, a sensible default has been provided.
         *
         * Supported by S3: CacheControl, Expires, StorageClass,
         * ServerSideEncryption, Metadata, ACL, ContentEncoding
         */
        'extra_headers' => [
            'CacheControl' => 'max-age=604800',
        ],
    ],

    /*
     * These generators will be used to created conversion of media files.
     */
    'image_generators' => [
        Spatie\MediaLibrary\ImageGenerators\FileTypes\Image::class,
        Spatie\MediaLibrary\ImageGenerators\FileTypes\Pdf::class,
        Spatie\MediaLibrary\ImageGenerators\FileTypes\Svg::class,
        Spatie\MediaLibrary\ImageGenerators\FileTypes\Video::class,
    ],

    /*
     * FFMPEG & FFProbe binaries path, only used if you try to generate video
     * thumbnails and have installed the php-ffmpeg/php-ffmpeg composer
     * dependency.
     */
    'ffmpeg_binaries' => '/usr/bin/ffmpeg',
    'ffprobe_binaries' => '/usr/bin/ffprobe',
];
