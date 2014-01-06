<?php

class Creat_Chatuser_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chat_user',function($table){
			$table->increments('id')->primary;
			$table->integer('user_id')->unsigned();
			$table->integer('chat_id')->unsigned();
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('chat_id')->references('id')->on('chats')->onDelete('cascade');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chat_user');
	}

}