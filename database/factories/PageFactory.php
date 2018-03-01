<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
    return [
        'name' => $faker->realText(100),
        'content' => $faker->realText(1000)
    ];
});
