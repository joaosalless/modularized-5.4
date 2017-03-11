<?php

namespace App\Support\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class OrderDescCriteria
 * @package namespace App\Support\Criteria;
 */
class OrderDescCriteria implements CriteriaInterface
{
    protected $field;

    /**
     * OrderDescCriteria constructor.
     *
     * @param $field
     */
    function __construct($field = 'created_at')
    {
        $this->field = $field;
    }

    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model->orderBy($this->field, 'desc');
    }
}
