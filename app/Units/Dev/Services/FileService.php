<?php

namespace App\Units\Dev\Services;

use File;
use View;

class FileService
{
    public function __construct()
    {

    }

    public function write($view, array $data, $file)
    {
        $view        = View::make($view, $data);
        $content     = $view->render();
        $fileWritten = File::put($file, $content);

        if ($fileWritten === false)
        {
            die("Error writing to file");
        }


    }
}