<?php

use Faker\Generator as Faker;

$factory->define(App\Board::class, function (Faker $faker) {

    return [
        'name' => 'Placa 1',
        'status' => 1,
        'user' => 1,
        'local' => 1,
        'mqtt_broker' => 'mqtt.remot.co',
        'mqtt_port' => 8083,
        'mqtt_user' => 'remotco',
        'mqtt_pass' => 'remot2017',
        'mqtt_publish' => 'enyx/publish/1/a1b2c3d4e5f6/1',
        'mqtt_subscribe' => 'enyx/subscribe/1/a1b2c3d4e5f6/1'
    ];
});
