<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Welkome\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'number' => $faker->randomNumber(3),
        'description' => $faker->text(200),
        'price' => $faker->numberBetween(30000, 50000),
        'min_price' => $faker->numberBetween(30000, 40000),
        'capacity' => 2,
        'floor' => 1
    ];
});
