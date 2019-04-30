<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;

use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(10),
        'description' => $faker->text(30),
        'writer'    => $faker->word,
        'image'   => 'image' . rand(1,2),
    ];
});
