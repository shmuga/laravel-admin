<?php

use Illuminate\Database\Seeder;
use App\Module;

class ModulesTableSeeder extends Seeder {

    public function run()
    {
        Module::create(['name'=>'users','title'=>'Пользователи']);
        Module::create(['name'=>'groups','title'=>'Группы']);
    }

}