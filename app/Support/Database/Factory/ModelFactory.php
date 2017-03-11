<?php

namespace App\Support\Database\Factory;

use Faker\Generator;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ModelFactory.
 *
 * Base Factories for usage inside domains.
 */
abstract class ModelFactory
{
    /**
     * @var Factory
     */
    protected $factory;

    /**
     * @var Model
     */
    protected $model;

    /**
     * @var Faker
     */
    protected $faker;

    /**
     * BaseFactory constructor.
     */
    public function __construct()
    {
        $this->factory = app()->make(Factory::class);
        $this->faker   = app()->make(Generator::class);
    }

    /**
     * @return mixed
     */
    public function define()
    {
        $this->factory->define($this->model, function () {
            return $this->fields();
        });
    }

    /**
     * @return mixed
     */
    abstract protected function fields();
}