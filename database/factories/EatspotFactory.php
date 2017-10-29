<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Eatspot::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text(30),
        'latitude'  => $faker->latitude(),
        'longitude' => $faker->longitude(),
        'taggable_type' => str_random(10),
    ];
});
