<?php

use Faker\Generator as Faker;

$factory->define(App\Book::class, function (Faker $faker) {
    return [
        'title' => $faker->words($nb = 3, $asText = true),
        'description' => $faker->sentences($nb = 10, $asText = true),
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 120)
    ];
});