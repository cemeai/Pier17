<?php

use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages',function($table){
			$table->increments('id')->primary;
			$table->text('message');
			$table->timestamp('timestamp');
			$table->integer('chat_user_id')->unsigned();
			
			$table->foreign('chat_user_id')->references('id')->on('chat_user')->onDelete('cascade');
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messages');
	}

}