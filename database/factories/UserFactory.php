<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    $type = $faker->randomElement(['Administrador', 'Usuario']);

    return [
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'type' => $type,
        'avatar' => $faker->imageUrl(600, 338),
    ];
});