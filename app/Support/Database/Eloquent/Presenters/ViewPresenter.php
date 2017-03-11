<?php

namespace App\Support\Database\Eloquent\Presenters;

use Carbon\Carbon;
use Laracasts\Presenter\Presenter;

class ViewPresenter extends Presenter
{
    public function getId()
    {
        return $this->id;
    }

    public function getCreatedAt()
    {
        return $this->created_at->format('d/m/Y H:i:s');
    }

    public function getCreatedAtDate()
    {
        return $this->created_at->format('d/m/Y');
    }

    public function getCreatedAtTime()
    {
        return $this->created_at->format('H:i:s');
    }

    public function getCreatedAtForHumans()
    {
        return $this->created_at->diffForHumans();
    }

    public function getUpdatedAt()
    {
        return $this->updated_at->format('d/m/Y H:i:s');
    }

    public function getUpdatedAtDate()
    {
        return $this->updated_at->format('d/m/Y');
    }

    public function getUpdatedAtTime()
    {
        return $this->updated_at->format('H:i:s');
    }

    public function getUpdatedAtForHumans()
    {
        return $this->updated_at->diffForHumans();
    }

    public function getDeletedAtDate()
    {
        return $this->deleted_at->format('d/m/Y');
    }

    public function getDeletedAtTime()
    {
        return $this->deleted_at->format('H:i:s');
    }

    public function getDeletedAtForHumans()
    {
        return $this->deleted_at->diffForHumans();
    }


}