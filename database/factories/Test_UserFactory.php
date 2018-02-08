<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 30),
        'test_id' => rand(1, 10),
        'user_points' => rand(1,150),
        'total_point' => rand(1, 150),
        'approved' => $faker->boolean(),
    ];
});
