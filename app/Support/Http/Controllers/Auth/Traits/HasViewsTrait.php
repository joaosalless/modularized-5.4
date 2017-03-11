<?php

namespace App\Support\Http\Controllers\Auth\Traits;

trait HasViewsTrait
{
    /**
     * @param string $view
     * @param array  $data
     * @param array  $mergeData
     *
     * @return \Illuminate\View\View
     */
    public function view($view = null, $data = [], $mergeData = [])
    {
        if (!empty(panel()->unitAlias()) and !str_contains($view, '::')) {
            $view = panel()->unitAlias() . '::' . $view;
        }

        return view($view, $data, $mergeData);
    }
}