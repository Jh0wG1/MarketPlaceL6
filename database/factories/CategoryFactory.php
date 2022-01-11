<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use League\CommonMark\Normalizer\SlugNormalizer;

$factory->define(\App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'description' => $faker->sentence(),
        'slug'=> $faker->slug()

    ];
});
