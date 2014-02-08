<?php

use Illuminate\Database\Migrations\Migration;

class AddUsersTable extends Migration {

	/*public function randomKey(){
		$key = "";
		for( $i = 0; $i < 16; $i++ ){
			$rndN = rand(48,57);
			$rndL = rand(65,90);
			$rnd = rand(1,2);
			if( $rnd == 1 ) $key = $key . chr($rndN);
			else $key = $key . chr($rndL);
		}
		return $key;
	}*/

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(array(
			'key' => 'AAAAAAAAAAAAAAAA',
			'name' => 'Cesar',
			'lastName' => 'Amaro',
			'mail' => 'cesaral_92@hotmail.com',
			'bday' => '1992-07-17',
			'password' => Hash::make('secret'),
			'language' => 'English',
			'heart' => 0,
			'secCode' => 11111
		));
		DB::table('users')->insert(array(
			'key' => 'BBBBBBBBBBBBBBBB',
			'name' => 'Admin',
			'lastName' => 'Admin',
			'mail' => 'admin@test.com',
			'bday' => date('Y-m-d'),
			'password' => Hash::make('admin'),
			'language' => 'English',
			'heart' => 0,
			'secCode' => 11111
		));
		DB::table('users')->insert(array(
			'key' => 'CCCCCCCCCCCCCCCC',
			'name' => 'Beto',
			'lastName' => 'Amaro',
			'mail' => 'cesaral_92@hotmail.com',
			'bday' => date('Y-m-d'),
			'password' => Hash::make('qwerty'),
			'language' => 'English',
			'heart' => 0,
			'secCode' => 11111
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('users')->where('name','=','Cesar')->delete();
		DB::table('users')->where('name','=','Admin')->delete();
		DB::table('users')->where('name','=','Beto')->delete();
	}

}