<?php

class Creat_Usermedia_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_user',function($table){
			$table->increments('id')->primary;
			$table->integer('user_id')->unsigned();
			$table->integer('file_id')->unsigned();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_user');
	}

}