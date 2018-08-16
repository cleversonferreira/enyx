<?php

use Faker\Generator as Faker;

$factory->define(App\Board::class, function (Faker $faker) {

    $digit = $faker->randomDigit;

    return [
        'name' => $faker->firstName,
        'status' => 1,
        'user' => 1,
        'mqtt_broker' => 'mqtt.remot.co',
        'mqtt_port' => 8083,
        'mqtt_user' => 'remotco',
        'mqtt_pass' => 'remot2017',
        'mqtt_publish' => 'enyx/teste/' . $digit,
        'mqtt_subscribe' => 'enyx/teste/' . $digit,
    ];
});
