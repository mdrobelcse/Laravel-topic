<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [

        'category_id' => random_int(1,100),
        'title' => $faker->text(20),
        'body' => $faker->text(100),

    ];
});
