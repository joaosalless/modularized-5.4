<?php

namespace App\Domains\Pages\Presenters;

use App\Support\Database\Eloquent\Presenters\ViewPresenter;

/**
 * Class PageViewPresenter
 * @package  App\Domains\Pages
 */
class PageViewPresenter extends ViewPresenter
{

    public function getId()
    {
        return $this->id;
    }


    public function getCategoryId()
    {
        return $this->category_id;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function getTemplate()
    {
        return $this->template;
    }


    public function getSlug()
    {
        return $this->slug;
    }


    public function getIntro()
    {
        return $this->intro;
    }


    public function getBody()
    {
        return $this->body;
    }


    public function getActive()
    {
        return $this->active ? $this->entity->getLabel('boolean_yes') : $this->entity->getLabel('boolean_no');
    }
}