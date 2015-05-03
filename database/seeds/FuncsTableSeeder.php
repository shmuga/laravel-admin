<?php

use Illuminate\Database\Seeder;
use App\Func;

class FuncsTableSeeder extends Seeder {

    public function run()
    {
        //seed for users
        Func::create(['title' => 'Список пользователей', 'name' => 'list', 'module_id' => 1]);
        Func::create(['title' => 'Добавить пользователя', 'name' => 'add', 'module_id' => 1]);
        Func::create(['title' => 'Редактировать пользователя', 'name' => 'edit', 'module_id' => 1]);
        Func::create(['title' => 'Удалить пользователя ', 'name' => 'delete', 'module_id' => 1]);

        //seed for groups
        Func::create(['title' => 'Список групп', 'name' => 'list', 'module_id' => 2]);
        Func::create(['title' => 'Добавить группу', 'name' => 'add', 'module_id' => 2]);
        Func::create(['title' => 'Редактировать группу', 'name' => 'edit', 'module_id' => 2]);
        Func::create(['title' => 'Удалить группу ', 'name' => 'delete', 'module_id' => 2]);

    }

}