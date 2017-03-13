<?php

namespace App\Support\Database\Eloquent\Traits;

use DB;

trait ModelDevUtilsTrait
{
    public function getEntityStructure($structure = true)
    {
        $entity                          = [];
        $entity['className']             = static::class;
        $entity['reflectionClass']       = (new \ReflectionClass($this));
        $entity['table']                 = $this->getTable();
        $entity['entityTitle']           = $this->getTitle();
        $entity['entityTitleColumn']     = $this->getTitleColumn();
        $entity['entityDomainAlias']     = $this->getEntityDomainAlias();
        $entity['entityTranslationKey']  = snake_case($entity['reflectionClass']->getShortName());
        $entity['entityGender']          = $this->getEntityGender();
        $entity['entityName']            = $this->getEntityName();
        $entity['entityNamePlural']      = $this->getEntityNamePlural();
        $entity['entityRouteAlias']      = $this->getEntityRouteAlias();
        $entity['entityViewsAlias']      = $this->getEntityViewsAlias();
        $entity['entityRoutePrefix']     = $this->getEntityRoutePrefix();
        $entity['entityShortName']       = $this->getEntityShortName();
        $entity['entityShortNamePlural'] = $this->getEntityShortNamePlural();
        $entity['mediaCategorySlug']     = $this->getMediaCategorySlug();
        $entity['entityIcon']            = $this->getEntityIcon();
        $entity['classShortName']        = $entity['reflectionClass']->getShortName();

        if ($structure) {
            $entity['instance']            = $this;
            $entity['columns']             = $this->getTableColumns();
            $entity['fillable']            = $this->getDevBuildFillable($entity['columns']);
            $entity['dates']               = $this->getDevBuildDates($entity['columns']);
            $entity['rules']               = $this->getDevBuildRules($entity['columns']);
            $entity['factoryFields']       = $this->getDevBuildFactoryFields($entity['columns']);
            $entity['searchable']          = $this->getDevBuildSearchable($entity['columns']);
            $entity['translatableFields']  = $this->getDevBuildTranslatableFields($entity['columns']);
            $entity['transformableFields'] = $this->getDevBuildTransformableFields($entity['columns']);
        }

        return $entity;
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
    public function getDevBuildFactoryFields(array $columns) : array
    {
        $factories = [];
        foreach ($columns as $k => $col) {
            if (!in_array($col['name'], config('code_generator.excludes.fields.factory', []))) {
                $factories[$col['name']] = null;
            }
        }
        return $factories;
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