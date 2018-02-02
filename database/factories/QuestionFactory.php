<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    
    return [
        'question_header' => $faker->realText(random_int(20, 40)),
        'question_text' => $faker->realText(random_int(20, 40)),
        'question_image' => $faker->imageUrl(600, 338),
        'user_id' => rand(1, 30),
        'update_question_user_id' => rand(1, 30),
    ];
});
