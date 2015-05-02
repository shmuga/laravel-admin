<?php

use Illuminate\Database\Seeder;
use App\UsersGroup;

class UsersGroupsTableSeeder extends Seeder {

    public function run()
    {
        UsersGroup::create(['name' => 'Администратор']);
        UsersGroup::create(['name' => 'Модератор']);
    }

}