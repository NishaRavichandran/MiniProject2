<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['Ford','Honda','Toyota']),
        'model'=> $faker->randomElement(['Hatchback','Sedan','SUV']),
        'year' => $faker->year


    ];
});
