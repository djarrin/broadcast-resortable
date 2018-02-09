<?php

use Faker\Generator as Faker;

$factory->define(App\Sortable::class, function (Faker $faker) {
    return [
        'user_name' => $faker->name,
        'rank_points' => $faker->randomNumber(1)
    ];
});
