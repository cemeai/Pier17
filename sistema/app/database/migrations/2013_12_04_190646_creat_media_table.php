<?php

class Creat_Media_Table {

	/**
	 * Make changes to the database.
	 * img, vids, libros, canciones, muscicos, alnumes, compras
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('files',function($table){
			$table->increments('id')->primary;
			$table->string('name',25);
			$table->string('archive');
			$table->integer('user_id')->unsigned();
			$table->timestamp('timestamp');
			$table->integer('hearts');

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
		Schema::drop('files');
	}

}