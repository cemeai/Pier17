<?php

use Illuminate\Database\Migrations\Migration;

class CreateRelationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_user',function($table){
			$table->increments('id')->primary;
			$table->integer('user_id_1')->unsigned();
			$table->integer('user_id_2')->unsigned();
			$table->integer('status');
			
			$table->foreign('user_id_1')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('user_id_2')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_user');
	}

}