<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFunctionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('name',512);
			$table->text('title',512);
			$table->integer('module_id')->unsigned();
            $table->foreign('module_id')
                ->references('id')
                ->on('modules')
                ->onDelete('cascade');




			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('funcs');
	}

}
