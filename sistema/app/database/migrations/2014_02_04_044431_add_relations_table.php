<?php

use Illuminate\Database\Migrations\Migration;

class AddRelationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('user_user')->insert(array(
			'user_id_1' => 1,
			'user_id_2' => 2,
			'status' => 0
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('user_user')->where('id','=','1')->delete();
	}

}