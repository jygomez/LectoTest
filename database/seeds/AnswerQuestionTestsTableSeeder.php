<?php

use Illuminate\Database\Seeder;

class AnswerQuestionTestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Answer_Question_Test::class, 200)->create()->each(function(App\Question_Test $question_test){
            $question_test->answers()->attach(rand(1,200), ['correct_answer' => rand(0,1)]);
            $question_test->answers()->attach(rand(1,200), ['correct_answer' => rand(0,1)]);
            $question_test->answers()->attach(rand(1,200), ['correct_answer' => rand(0,1)]);
            $question_test->answers()->attach(rand(1,200), ['correct_answer' => rand(0,1)]);
            $question_test->answers()->attach(rand(1,200), ['correct_answer' => rand(0,1)]);
    });
    }
}
