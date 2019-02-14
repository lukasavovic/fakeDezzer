<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        "title"=>$faker->catchPhrase(),
        "cover_art" => $faker->img("artists", 300,300),
//        "published_at" =>
    ];
});
