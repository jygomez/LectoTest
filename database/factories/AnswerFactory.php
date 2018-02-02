<?php

use Faker\Generator as Faker;

$factory->define(App\Answer::class, function (Faker $faker) {
    
    return [
        'answer_text' => $faker->realText(random_int(20, 40)),
        'user_id' => rand(1, 30),
        'update_answer_user_id' => $faker->numberBetween(1,30),
    ];
});
