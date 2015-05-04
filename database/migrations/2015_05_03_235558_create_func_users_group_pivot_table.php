<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncUsersGroupPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('func_users_group', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('func_id')->unsigned()->index();
			$table->foreign('func_id')->references('id')->on('funcs')->onDelete('cascade');
			$table->integer('users_group_id')->unsigned()->index();
			$table->foreign('users_group_id')->references('id')->on('users_groups')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('func_users_group');
	}

}
