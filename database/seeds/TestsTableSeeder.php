<?php

use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Test::class, 10)->create()->each(function(App\Test $test){
                $test->questions()->attach(rand(1,50), ['question_value' => rand(1,10)]);
                $test->questions()->attach(rand(1,50), ['question_value' => rand(1,10)]);
                $test->questions()->attach(rand(1,50), ['question_value' => rand(1,10)]);
                $test->questions()->attach(rand(1,50), ['question_value' => rand(1,10)]);
                $test->questions()->attach(rand(1,50), ['question_value' => rand(1,10)]);
        });
    }
}
