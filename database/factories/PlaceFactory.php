<?php

use Faker\Generator as Faker;

$factory->define(App\Place::class, function (Faker $faker) {
    return [
        'name' => 'Minha casa',
        'user' => 1,
        'status' => 1,
        'token' => 'a1b2c3d4e5f6'
    ];
});
