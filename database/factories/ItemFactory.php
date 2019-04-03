<?php

use Faker\Generator as Faker;
use App\Item;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'description' => $faker->paragraph,
        'price' => $faker->numberBetween(0, 100000),
        'is_active' => $faker->boolean,
    ];
});
