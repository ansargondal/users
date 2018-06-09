<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->paragraph,
        'category_id' => \App\Category::inRandomOrder()->first()->id,
        'user_id' => \App\User::inRandomOrder()->first()->id
    ];

});
