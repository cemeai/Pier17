<?php

use Illuminate\Database\Migrations\Migration;

class CreateBubblesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('bubbles',function($table){
			$table->increments('id')->primary;
			$table->string('location');
			$table->timestamp('timestamp');
			$table->integer('hearts');
			$table->integer('user_id')->unsigned();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bubbles');
	}

}