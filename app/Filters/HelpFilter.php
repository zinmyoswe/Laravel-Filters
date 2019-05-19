<?php

// HelpFilter.php

namespace App\Filters;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

abstract class HelpFilter
{
    protected $request;

    protected $filters = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function filter(Builder $builder)
    {   
        foreach($this->getFilters() as $filter => $value)
        {
            $this->resolveFilter($filter)->filter($builder, $value);
        }
        return $builder;
    }

    protected function getFilters()
    {
        return array_filter($this->request->only(array_keys($this->filters)));
    }

    protected function resolveFilter($filter)
    {
        return new $this->filters[$filter];
    }
}