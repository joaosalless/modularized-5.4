<?php

namespace App\Support\Database\Eloquent\Traits;

use ReflectionClass;

trait ModelUtilsTrait
{
    use ModelDevUtilsTrait;

    public function getReflectionClass()
    {
        return (new ReflectionClass($this));
    }

    public function getRepository()
    {
        return $this->getReflectionClass()->getNamespaceName().'\Repositories\\'. $this->getReflectionClass()->getShortName() .'Repository';
    }

    public function getTitle()
    {
        return $this->{$this->columnTitle};
    }


    public function getTitleColumn()
    {
        return $this->columnTitle;
    }


    public function getLabel($label) : string
    {
        return trans("{$this->getEntityDomainAlias()}::{$this->getEntityTranslationKey()}.{$label}");
    }


    public function getMediaCategorySlug(): string
    {
        return $this->mediaCategorySlug ?: '';
    }


    public function getEntityIcon(): string
    {
        return $this->entityIcon ? $this->entityIcon : null;
    }


    public function getEntityAllowedMedias(): array
    {
        return $this->entityAllowedMedias ? $this->entityAllowedMedias : [];
    }


    public function getEntityDomainAlias(): string
    {
        return $this->entityDomainAlias ? $this->entityDomainAlias : null;
    }


    public function getEntityTranslationKey(): string
    {
        return $this->entityTranslationKey ? $this->entityTranslationKey : null;
    }


    public function getEntityGender()
    {
        return !empty($this->entityGender) ? $this->entityGender : null;
    }


    public function getEntityName()
    {
        return trans("{$this->entityDomainAlias}::{$this->entityTranslationKey}.entityName");
    }


    public function getEntityNamePlural()
    {
        return trans("{$this->entityDomainAlias}::{$this->entityTranslationKey}.entityNamePlural");
    }


    public function getEntityShortName()
    {
        return trans("{$this->entityDomainAlias}::{$this->entityTranslationKey}.entityShortName");
    }


    public function getEntityShortNamePlural()
    {
        return trans("{$this->entityDomainAlias}::{$this->entityTranslationKey}.entityShortNamePlural");
    }


    public function getEntityRouteAlias()
    {
        return !empty($this->entityRouteAlias) ? $this->entityRouteAlias : null;
    }


    public function getEntityRoutePrefix()
    {
        return !empty($this->entityRoutePrefix) ? $this->entityRoutePrefix : null;
    }


    public function getEntityViewsAlias()
    {
        return !empty($this->entityViewsAlias) ? $this->entityViewsAlias : null;
    }

}