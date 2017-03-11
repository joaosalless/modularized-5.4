<?php

namespace App\Units\Dev\Helpers;

use File;
use ReflectionClass;
use Illuminate\Database\Eloquent\Model;

class EntityHelper
{
    public function __construct()
    {
        $platform = \Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('enum', 'string');
    }

    public function getEntities($structure = true)
    {
        $entities = [];

        if (env('APP_ENV') == 'local') {

            $files = File::allFiles(app_path('Domains/*'));

            foreach ($files as $file) {

                if (str_contains($file, config('code_generator.excludes.class_directories'))) {
                    continue;
                }

                $classPath = str_replace(app_path(), 'App', $file->getPath());
                $classFile = $classPath . '/' . str_replace('.php', '', $file->getFilename());

                $class = new ReflectionClass($this->makeNamespace($classFile));

                if (in_array($class->getName(), config('code_generator.excludes.entities'))) {
                    continue;
                }

                if (!$class->hasMethod('getTableColumns')) {
                    continue;
                }

                if ($class->isAbstract()) {
                    continue;
                }

                if (!$class->isInstantiable()) {
                    continue;
                }

                if ($class->isSubclassOf(Model::class)) {
                    $model = $class->newInstance();
                    $entities[] = $model->getEntityStructure($structure);
                }
            }
        }

        return collect($entities);
    }

    public function makeNamespace($relativePath): string
    {
        return str_replace('/', '\\', $relativePath);
    }
}