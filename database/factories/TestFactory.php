<?php

use Faker\Generator as Faker;

$factory->define(App\Test::class, function (Faker $faker) {
    
    return [
        'test_name' => $faker->sentence(2),
        'user_id' => rand(1, 30),
        'time_control' => $faker->boolean(),
        'time' => $faker->time,
        'min_to_approve' => rand(60,70),
        'update_test_user_id' => rand(1, 30),
        'test_value' => rand(1, 100),
    ];
});
