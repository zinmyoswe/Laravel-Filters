<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $name = $faker->sentence,
        'slug' => str_slug($name),
        'type' => ['Simple', 'Grouped', 'Variable', 'Gift'][rand(0,3)],
        'categories' => ['Electronics', 'Books', 'Games', 'Garden'][rand(0,3)],  
    ];
});
