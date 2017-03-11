<?php

namespace App\Support\Providers;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use ReflectionClass;

abstract class AbstractServiceProvider extends LaravelServiceProvider
{
    /**
     * @var string Domain unitAlias for translations, views and other keys
     */
    protected $unitAlias;

    /**
     * @var array List of providers to register
     */
    protected $providers = [];

    /**
     * @var array Contract bindings
     */
    protected $bindings = [];

    /**
     * @var array List of seeders provided by Domain
     */
    protected $seeders = [];

    /**
     * @var array List of model factories to load
     */
    protected $factories = [];

    /**
     * @var array List of commands to load
     */
    protected $commands = [];

    /**
     * @var bool Enable migrations loading
     */
    protected $hasMigrations = false;

    /**
     * @var bool Enable views loading
     */
    protected $hasViews = false;

    /**
     * @var bool Enable translations loading
     */
    protected $hasTranslations = false;


    public function boot()
    {
        $this->registerCommands();
        $this->registerMigrations();
        $this->registerTranslations();
        $this->registerViews();
    }

    /**
     * Register commands.
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands($this->commands);
        }
    }

    /**
     * Register migrations.
     */
    protected function registerMigrations()
    {
        if ($this->hasTranslations) {
            $this->loadMigrationsFrom($this->getPath('Database/Migrations'));
        }
    }

    /**
     * Register translations.
     */
    protected function registerTranslations()
    {
        if ($this->hasTranslations) {
            $this->loadTranslationsFrom(
                $this->getPath('Resources/Lang'),
                $this->unitAlias
            );
        }
    }

    /**
     * Register views.
     */
    protected function registerViews()
    {
        if ($this->hasViews) {
            $this->loadViewsFrom(
                $this->getPath('Resources/Views'),
                $this->unitAlias
            );
        }
    }

    /**
     * @param string $append
     *
     * @return string
     */
    protected function getPath($append = null)
    {
        $reflection = new ReflectionClass($this);
        $realPath = realpath(dirname($reflection->getFileName()) . '/../');
        if (!$append) {
            return $realPath;
        }

        return $realPath . '/' . $append;
    }

    /**
     * Register the current Domain or Unit.
     */
    public function register()
    {
        $this->registerBindings(collect($this->bindings));
        $this->registerFactories(collect($this->factories));
        $this->registerProviders(collect($this->providers));
        $this->registerSeeders(collect($this->seeders));
    }

    /**
     * Register the defined bindings.
     *
     * @param Collection $bindings
     */
    protected function registerBindings(Collection $bindings)
    {
        $bindings->each(function ($concretion, $abstraction) {
            $this->app->bind($abstraction, $concretion);
        });
    }

    /**
     * Register Model Factories.
     *
     * @param Collection $factories
     */
    protected function registerFactories(Collection $factories)
    {
        $factories->each(function ($factoryName) {
            (new $factoryName())->define();
        });
    }

    /**
     * Register SubProviders.
     *
     * @param Collection $providers
     */
    protected function registerProviders(Collection $providers)
    {
        $providers->each(function ($provider) {
            $this->app->register($provider);
        });
    }

    /**
     * Register the defined seeders.
     *
     * @param Collection $seeders
     */
    protected function registerSeeders(Collection $seeders)
    {
        $seeders->each(function ($seeder) {
            $this->app['support.seeder.manager']->addSeeder($seeder);
        });
    }

    /**
     * @param string $view
     *
     * @return string
     */
    protected function view($view = null)
    {
        if (!empty($this->unitAlias) and !str_contains($view, '::')) {
            $view = $this->unitAlias . '::' . $view;
        }

        return $view;
    }

}