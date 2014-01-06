<?php

class Add_Relations {

	/**
	 * Make changes to the database.
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
		//
	}

}