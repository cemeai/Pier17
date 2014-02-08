<?php

use Illuminate\Database\Migrations\Migration;

class CreatePublicityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('publicities',function($table){
			$table->increments('id')->primary;
			$table->string('company',25);
			$table->string('publicity');
			$table->string('webpage');
			$table->string('location');
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
		Schema::drop('publicities');
	}

}