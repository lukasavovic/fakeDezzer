<?php

use Faker\Generator as Faker;

$factory->define(\App\Artist::class, function (Faker $faker) {
    return [
        "name" => $faker->name,
        "image" =>$faker->img("artists", 300,300),
        "user_id" => 1
    ];
});
