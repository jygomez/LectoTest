<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 29)->create();

        App\User::create([
            'username' => 'Yoa',
            'email' => 'yoanny@yoanny.com',
            'password' => bcrypt('123'),
            'type' => 'Administrador'             
        ]);
    }
}
