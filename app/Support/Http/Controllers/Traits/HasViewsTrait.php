<?php

namespace App\Support\Http\Controllers\Traits;

trait HasViewsTrait
{
    protected $unitAlias;

    /**
     * @param string $view
     * @param array  $data
     * @param array  $mergeData
     *
     * @return \Illuminate\View\View
     */
    public function view($view = null, $data = [], $mergeData = [])
    {
        if (!empty($this->unitAlias) and !str_contains($view, '::')) {
            $view = $this->unitAlias . '::' . $view;
        }

        return view($view, $data, $mergeData);
    }
}