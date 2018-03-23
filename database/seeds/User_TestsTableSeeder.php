<?php

use Illuminate\Database\Seeder;

class User_TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        factory(App\User::class, 30)->create()->each(function(App\User $user){
            
            $user->tests()->attach(rand(1,10), ['user_points' => rand(1,100), 'total_points' => rand(1,100), 'approved' => rand(0,1), 'calification' => rand(1,100)]);
        });
    }
}