<?php

use Illuminate\Database\Seeder;

class Test_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Test::class, 200)->create()->each(function(App\Question_Test $question_test){
            $question_test->answers()->attach(rand(1,200), ['correct_answer' => rand(0,1)]);
            $question_test->answers()->attach(rand(1,200), ['correct_answer' => rand(0,1)]);
            $question_test->answers()->attach(rand(1,200), ['correct_answer' => rand(0,1)]);
            $question_test->answers()->attach(rand(1,200), ['correct_answer' => rand(0,1)]);
            $question_test->answers()->attach(rand(1,200), ['correct_answer' => rand(0,1)]);

            $test=App\Test::find("id_question");
            $test->questions()->attach("id_question", ['"nombre_columna1"'=>10, '"nombre_columna2"'=>valor_columna])
    }
}
