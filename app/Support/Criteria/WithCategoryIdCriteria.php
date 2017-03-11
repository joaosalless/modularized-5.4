<?php

namespace App\Support\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class WithCategoryIdCriteria
 * @package namespace App\Support\Criteria;
 */
class WithCategoryIdCriteria implements CriteriaInterface
{
    protected $categoryId;

    function __construct($id)
    {
        $this->categoryId = $id;
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
        return $model->with('category_id', $this->categoryId);
    }
}
