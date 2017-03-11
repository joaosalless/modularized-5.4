<?php

namespace App\Support\Criteria;

use App\Support\Http\Controllers\Web\Parameters;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

class SortOrderCriteria implements CriteriaInterface
{
    protected $sort;
    protected $order;

    function __construct(Parameters $parameters)
    {
        $this->sort  = $parameters->sort();
        $this->order = $parameters->order();
    }

    public function apply($model, RepositoryInterface $repository)
    {
        return $model->orderBy($this->sort, $this->order);
    }
}
