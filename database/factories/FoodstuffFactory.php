<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Foodstuff::class, function (Faker $faker) {
    return [
        'name' => $faker->words(3, true),
        'description' => $faker->text(30),
        'taggable_type' => str_random(10),
    ];
});
