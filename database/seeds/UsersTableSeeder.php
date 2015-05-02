<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use App\User;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'login' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'users_group_id' => 1
        ]);

        User::create([
            'login' => 'demo',
            'email' => 'demo@gmail.com',
            'password' => Hash::make('demo'),
            'users_group_id' => 2
        ]);
    }

}