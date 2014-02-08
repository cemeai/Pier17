<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration{

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->increments('id')->primary;
			$table->string('key',16);
			$table->string('name',20);
			$table->string('lastName',20);
			$table->string('mail',50);
			$table->date('bday');
			$table->string('password',64);
			$table->string('language');
			$table->integer('heart');
			$table->integer('secCode');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}