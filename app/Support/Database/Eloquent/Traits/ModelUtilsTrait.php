<?php

namespace App\Support\Database\Eloquent\Traits;

use ReflectionClass;
use Str;

trait ModelUtilsTrait
{
    use ModelDevUtilsTrait;

    /**
     * @return ReflectionClass
     */
    public function getReflectionClass(): ReflectionClass
    {
        return (new ReflectionClass($this));
    }


    /**
     * @param null $append
     * @return string
     */
    public function getDomainPath($append = null): string
    {
        $realPath = realpath(dirname($this->getReflectionClass()->getFileName()) . '/../');
        if (!$append) {
            return $realPath;
        }
        return $realPath . '/' . $append;
    }


    /**
     * @param $unit
     * @return string
     */
    public function getUnitPath($unit): string
    {
        $realPath = realpath(dirname($this->getReflectionClass()->getFileName()) . '/../../Units/');

        return $realPath . '/' . $unit;
    }


    public function getDomainClasses(): array
    {
        $entity = $this->getReflectionClass();
        $domainNamespace = $entity->getNamespaceName();

        $classes = [

            'Factory' => [
                'namespace'      => $domainNamespace . '\Database\Factories',
                'className'      => $domainNamespace . '\Database\Factories\\' . $entity->getShortName() . 'Factory',
                'classShortName' => $entity->getShortName() . 'Factory',
            ],

            'Seeder' => [
                'namespace'      => $domainNamespace . '\Database\Seeders',
                'className'      => $domainNamespace . '\Database\Seeders\\' . $entity->getShortName() . 'Seeder',
                'classShortName' => $entity->getShortName() . 'Seeder',
            ],

            'FractalPresenter' => [
                'namespace'      => $domainNamespace . '\Presenters',
                'className'      => $domainNamespace . '\Presenters\\' . $entity->getShortName() . 'FractalPresenter',
                'classShortName' => $entity->getShortName() . 'FractalPresenter',
            ],

            'ViewPresenter' => [
                'namespace'      => $domainNamespace . '\Presenters',
                'className'      => $domainNamespace . '\Presenters\\' . $entity->getShortName() . 'ViewPresenter',
                'classShortName' => $entity->getShortName() . 'ViewPresenter',
            ],

            'DomainServiceProvider' => [
                'namespace'      => $domainNamespace . '\Providers',
                'className'      => $domainNamespace . '\Providers\DomainServiceProvider',
                'classShortName' => 'DomainServiceProvider',
            ],

            'EventServiceProvider' => [
                'namespace'      => $domainNamespace . '\Providers',
                'className'      => $domainNamespace . '\Providers\EventServiceProvider',
                'classShortName' => 'EventServiceProvider',
            ],

            'AuthServiceProvider' => [
                'namespace'      => $domainNamespace . '\Providers',
                'className'      => $domainNamespace . '\Providers\AuthServiceProvider',
                'classShortName' => 'AuthServiceProvider',
            ],

            'Repository' => [
                'namespace'      => $domainNamespace . '\Repositories',
                'className'      => $domainNamespace . '\Repositories\\' . $entity->getShortName() . 'Repository',
                'classShortName' => $entity->getShortName() . 'Repository',
            ],

            'RepositoryEloquent' => [
                'namespace'      => $domainNamespace . '\Repositories',
                'className'      => $domainNamespace . '\Repositories\\' . $entity->getShortName() . 'RepositoryEloquent',
                'classShortName' => $entity->getShortName() . 'RepositoryEloquent',
            ],

            'Rules' => [
                'namespace'      => $domainNamespace . '\Rules',
                'className'      => $domainNamespace . '\Rules\\' . $entity->getShortName() . 'Rules',
                'classShortName' => $entity->getShortName() . 'Rules',
            ],

            'Transformer' => [
                'namespace'      => $domainNamespace . '\Transformers',
                'className'      => $domainNamespace . '\Transformers\\' . $entity->getShortName() . 'Transformer',
                'classShortName' => $entity->getShortName() . 'Transformer',
            ],
        ];

        return $classes;
    }


    public function getResourcesLang(array $languages = ['pt_BR']): array
    {
        $translations = [];
        foreach ($languages as $lang) {
            $translations[$lang] = $this->getDomainPath("{$this->getEntityDomain()}/Resources/Lang/{$lang}/{$this->getEntityTranslationKey()}.php");
        }
        return $translations;
    }


    public function getResourcesViews(): array
    {
        $entityDomain = $this->getEntityDomain();
        $authProviders = array_except(config('auth.providers'), ['dev']);

        $panels = [];
        foreach ($authProviders as $panel => $provider) {

            $domainEntity = strtolower("{$entityDomain}/{$this->getEntityViewsAlias()}");

            $panels[$panel]['form'] = $this->getUnitPath("Panel/{$panel}/Resources/Views/{$domainEntity}/_form.blade.php");
            $panels[$panel]['create'] = $this->getUnitPath("Panel/{$panel}/Resources/Views/{$domainEntity}/create.blade.php");
            $panels[$panel]['edit'] = $this->getUnitPath("Panel/{$panel}/Resources/Views/{$domainEntity}/edit.blade.php");
            $panels[$panel]['index'] = $this->getUnitPath("Panel/{$panel}/Resources/Views/{$domainEntity}/index.blade.php");
            $panels[$panel]['index_table'] = $this->getUnitPath("Panel/{$panel}/Resources/Views/{$domainEntity}/index_table.blade.php");
            $panels[$panel]['show'] = $this->getUnitPath("Panel/{$panel}/Resources/Views/{$domainEntity}/show.blade.php");
            $panels[$panel]['show_table'] = $this->getUnitPath("Panel/{$panel}/Resources/Views/{$domainEntity}/show_table.blade .php");
        }
        return $panels;
    }


    public function getRepository(): string
    {
        return $this->getReflectionClass()->getNamespaceName() . '\Repositories\\' . $this->getReflectionClass()->getShortName() . 'Repository';
    }


    public function getTitle(): string
    {
        return $this->{$this->columnTitle} ?: '';
    }


    public function getTitleColumn(): string
    {
        return $this->columnTitle ?: '';
    }


    public function getLabel($label): string
    {
        return trans("{$this->getEntityDomainAlias()}::{$this->getEntityTranslationKey()}.{$label}");
    }


    public function getMediaCategorySlug(): string
    {
        $domainEntity = str_replace('App\Domains\\', '', $this->getReflectionClass()->getName());

        return $this->mediaCategorySlug ?: Str::slug(str_replace('\\', '-', $domainEntity));
    }


    public function getEntityIcon(): string
    {
        return $this->entityIcon ? $this->entityIcon : 'fa fa-fw fa-file';
    }


    public function getEntityAllowedMedias(): array
    {
        return $this->entityAllowedMedias ? $this->entityAllowedMedias : [];
    }


    public function getEntityClassName(): string
    {
        return $this->getReflectionClass()->getShortName();
    }


    public function getEntityDomain(): string
    {
        $replacements = ['App\Domains\\', "\\{$this->getReflectionClass()->getShortName()}"];

        return str_replace($replacements, '', $this->getReflectionClass()->getName());
    }


    public function getEntityDomainAlias(): string
    {
        return $this->entityDomainAlias
            ? $this->entityDomainAlias
            : strtolower($this->getEntityDomain());
    }


    public function getEntityTranslationKey(): string
    {
        return $this->entityTranslationKey
            ? $this->entityTranslationKey
            : strtolower($this->getEntityClassName());
    }


    public function getEntityGender(): string
    {
        return !empty($this->entityGender) ? $this->entityGender : null;
    }


    public function getEntityName(): string
    {
        return $this->getLabel('entityName');
    }


    public function getEntityNamePlural(): string
    {
        return $this->getLabel('entityNamePlural');
    }


    public function getEntityShortName(): string
    {
        return $this->getLabel('entityShortName');
    }


    public function getEntityShortNamePlural(): string
    {
        return $this->getLabel('entityShortNamePlural');
    }


    public function getEntityRouteAlias(): string
    {
        return !empty($this->entityRouteAlias) ? $this->entityRouteAlias : $this->getEntityTranslationKey();
    }


    public function getEntityRoutePrefix(): string
    {
        return !empty($this->entityRoutePrefix) ? $this->entityRoutePrefix : $this->getEntityTranslationKey();
    }


    public function getEntityViewsAlias(): string
    {
        return !empty($this->entityViewsAlias) ? $this->entityViewsAlias : $this->getEntityTranslationKey();
    }

}