<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    $clients = App\Client::pluck('id')->toArray();
    return [
        'name' => $faker->unique()->name,
        'description' => $faker->realText(200),
        'client_id' => $faker->randomElement($clients)
    ];
});
