<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(TestsTableSeeder::class);
        $this->call(User_TestsTableSeeder::class);
    }
}
