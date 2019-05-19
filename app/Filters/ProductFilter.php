<?php

// ProductFilter.php

namespace App\Filters;

use App\Filters\HelpFilter;
use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends HelpFilter
{
    protected $filters = [
        'type' => TypeFilter::class
    ];
}