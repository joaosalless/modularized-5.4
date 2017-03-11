<?php

namespace App\Units\Dev\Helpers;

use DB;
use File;
use View;
use ReflectionClass;

class DomainHelper
{
    protected $className;
    protected $classShortName;
    protected $entityDomainAlias;
    protected $entityGender;
    protected $entityIcon;
    protected $entityName;
    protected $entityNamePlural;
    protected $entityRouteAlias;
    protected $entityRoutePrefix;
    protected $entityShortName;
    protected $entityShortNamePlural;
    protected $entityTitle;
    protected $entityTitleColumn;
    protected $entityTranslationKey;
    protected $entityViewsAlias;
    protected $mediaCategorySlug;
    protected $reflectionClass;
    protected $table;

    /**
     * DomainHelper constructor.
     *
     * @param ReflectionClass $reflectionClass
     */
    public function __construct(ReflectionClass $reflectionClass)
    {
        $this->reflectionClass = $reflectionClass;
        $this->entity          = $reflectionClass->newInstance();
    }

    public function getEntityStructure($structure = true)
    {
        $entity                          = [];
        $entity['className']             = static::class;
        $entity['classShortName']        = $this->reflectionClass->getShortName();
        $entity['entityDomainAlias']     = $this->entity->getEntityDomainAlias();
        $entity['entityGender']          = $this->entity->getEntityGender();
        $entity['entityIcon']            = $this->entity->getEntityIcon();
        $entity['entityName']            = $this->entity->getEntityName();
        $entity['entityNamePlural']      = $this->entity->getEntityNamePlural();
        $entity['entityRouteAlias']      = $this->entity->getEntityRouteAlias();
        $entity['entityRoutePrefix']     = $this->entity->getEntityRoutePrefix();
        $entity['entityShortName']       = $this->entity->getEntityShortName();
        $entity['entityShortNamePlural'] = $this->entity->getEntityShortNamePlural();
        $entity['entityTitle']           = $this->entity->getTitle();
        $entity['entityTitleColumn']     = $this->entity->getTitleColumn();
        $entity['entityTranslationKey']  = snake_case($this->reflectionClass->getShortName());
        $entity['entityViewsAlias']      = $this->entity->getEntityViewsAlias();
        $entity['mediaCategorySlug']     = $this->entity->getMediaCategorySlug();
        $entity['reflectionClass']       = $this->reflectionClass;
        $entity['table']                 = $this->entity->getTable();

        if ($structure) {
            $entity['instance']            = $this->entity;
            $entity['columns']             = $this->entity->getTableColumns();
            $entity['fillable']            = $this->entity->getDevBuildFillable($entity['columns']);
            $entity['dates']               = $this->entity->getDevBuildDates($entity['columns']);
            $entity['rules']               = $this->entity->getDevBuildRules($entity['columns']);
            $entity['searchable']          = $this->entity->getDevBuildSearchable($entity['columns']);
            $entity['translatableFields']  = $this->entity->getDevBuildTranslatableFields($entity['columns']);
            $entity['transformableFields'] = $this->entity->getDevBuildTransformableFields($entity['columns']);
        }

        return $entity;
    }

    /**
     * @param       $view
     * @param array $data
     * @param       $file
     */
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

    /**
     * @param array $columns
     *
     * @return array
     */
    public function getDevBuildFillable(array $columns) : array
    {
        $fillable = [];

        foreach ($columns as $k => $col) {
            if (!in_array($col['name'], config('code_generator.excludes.fields.fillable', []))) {
                $fillable[] = $col['name'];
            }
        }

        return $fillable;
    }

    /**
     * @param array $columns
     *
     * @return array
     */
    public function getDevBuildDates(array $columns) : array
    {
        $dates = [];

        foreach ($columns as $k => $col) {
            if ($col['type'] == 'datetime' || $col['type'] == 'date' || $col['type'] == 'time') {
                if (!in_array($col['name'], config('code_generator.excludes.fields.dates', []))) {
                    $dates[] = $col['name'];
                }
            }
        }

        return $dates;
    }

    /**
     * @param array $columns
     *
     * @return array
     */
    public function getDevBuildRules(array $columns) : array
    {
        $rules = [];
        foreach ($columns as $k => $col) {
            if (!in_array($col['name'], config('code_generator.excludes.fields.rules', []))) {
                $rules[$col['name']] = 'required';
            }
        }
        return $rules;
    }

    /**
     * @param array $columns
     *
     * @return array
     */
    public function getDevBuildTranslatableFields(array $columns) : array
    {
        $translatable = [];
        foreach ($columns as $k => $col) {
            if (!in_array($col['name'], config('code_generator.excludes.fields.translatable', []))) {
                $translatable[] = $col['name'];
            }
        }
        return $translatable;
    }

    /**
     * @param array $columns
     *
     * @return array
     */
    public function getDevBuildTransformableFields(array $columns) : array
    {
        $transformable = [];
        foreach ($columns as $k => $col) {
            if (!in_array($col['name'], config('code_generator.excludes.fields.transformable', []))) {
                $transformable[] = $col['name'];
            }
        }
        return $transformable;
    }

    /**
     * @param array $columns
     *
     * @return array
     */
    public function getDevBuildSearchable(array $columns) : array
    {
        $searchable = [];
        foreach ($columns as $k => $col) {
            if (!in_array($col['name'], config('code_generator.excludes.fields.searchable', []))) {
                if (!preg_match('/id/', $col['name'])) {
                    $searchable[$col['name']] = 'like';
                }
            }
        }
        return $searchable;
    }

    /**
     * Return Table Columns (for development)
     *
     * @return array
     */
    public function getTableColumns() : array
    {
        $table       = $this->getTable();
        $columns     = [];
        $columnNames = DB::select('show columns from ' . $table);

        foreach ($columnNames as $col) {

            $DoctrineCol = DB::connection()->getDoctrineColumn($table, $col->Field);

            $columns[$col->Field]         = $DoctrineCol->toArray();
            $columns[$col->Field]['type'] = $DoctrineCol->getType()->getName();

            $columns[$col->Field] = array_merge($columns[$col->Field], $this->getDevFormInput($columns[$col->Field]));
        }

        return $columns;
    }

    /**
     * @param $col
     *
     * @return mixed
     */
    public function getDevFormInput($col)
    {
        $configFields = config('code_generator.form.fieldTypes');

        if (array_key_exists($col['type'], $configFields)) {
            if ($col['type'] == 'string' && in_array($col['length'], config('code_generator.form.uuid.lengths'))) {
                $col['formInput'] = config('code_generator.form.uuid.formInput');
            }
            else {
                $col['formInput'] = $configFields[$col['type']]['formInput'];
            }
        } else {
            $col['formInput'] = $configFields['default']['formInput'];
        }
        return $col;
    }
}