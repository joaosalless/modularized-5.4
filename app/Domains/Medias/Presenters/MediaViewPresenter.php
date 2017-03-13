<?php

namespace App\Domains\Medias\Presenters;

use App\Support\Database\Eloquent\Presenters\ViewPresenter;

/**
 * Class MediaViewPresenter
 * @package  App\Domains\Medias
 */
class MediaViewPresenter extends ViewPresenter
{

    public function getId()
    {
        return $this->id;
    }


    public function getModelId()
    {
        return $this->model_id;
    }


    public function getModelType()
    {
        return $this->model_type;
    }


    public function getCollectionName()
    {
        return $this->collection_name;
    }


    public function getName()
    {
        return $this->name;
    }


    public function getFileName()
    {
        return $this->file_name;
    }


    public function getDisk()
    {
        return $this->disk;
    }


    public function getSize()
    {
        return $this->size;
    }


    public function getMimeType()
    {
        return $this->mime_type;
    }


    public function getManipulations()
    {
        return $this->manipulations;
    }


    public function getCustomProperties()
    {
        return $this->custom_properties;
    }


    public function getOrderColumn()
    {
        return $this->order_column;
    }


    public function getIsCover()
    {
        return $this->is_cover ? $this->entity->getLabel('boolean_yes') : $this->entity->getLabel('boolean_no');
    }

    public function getInCarousel()
    {
        return $this->in_carousel ? $this->entity->getLabel('boolean_yes') : $this->entity->getLabel('boolean_no');
    }

    public function getExtension()
    {
        return $this->extension;
    }


    public function getCategoryId()
    {
        return $this->category_id;
    }


    public function getCategorySlug()
    {
        return $this->category_slug;
    }


    public function getTitle()
    {
        return $this->title;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function getDominantColor()
    {
        return $this->dominant_color;
    }


    public function getActive()
    {
        return $this->active ? $this->entity->getLabel('boolean_yes') : $this->entity->getLabel('boolean_no');
    }
}