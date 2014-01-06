<?php

class Creat_Events_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events',function($table){
			$table->increments('id')->primary;
			$table->string('name',20);
			$table->date('bday');
			$table->string('location');
			$table->string('company');
			$table->integer('amount');
			$table->integer('hearts');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}