<?php

class TestsController extends BaseController {

	public $layout = 'home.main-layout';

	//$users = User::whereRaw('age > ? and votes = 100', array(25))->get();
	//$count = User::where('votes', '>', 100)->count();
	//protected $fillable = array('first_name', 'last_name', 'email');
	//protected $guarded = array('id', 'password');
	//protected $guarded = array('*');

	//inserts
	//$user = new User; create		$user->name = 'John'; assign		$user->save(); save
	//$user = User::create(array('name' => 'John'));    ----> return the send data needs guarded property for security

	//update
	//$user = User::find(1); retrieve		$user->email = 'john@foo.com'; assign		$user->save(); save
	//$affectedRows = User::where('votes', '>', 100)->update(array('status' => 2));
	//$user->touch(); updatind timestamps

	//delete
	//$user = User::find(1);retrieve		$user->delete(); delete
	//User::destroy(1, 2, 3); delete by primary id
	//$affectedRows = User::where('votes', '>', 100)->delete();


	public function test1()
	{
		$this->layout->title = 'test';
		$this->layout->content =  View::make('tests.test1')
									->with('users',User::all())
									->with('order',User::orderBy('name')->get())
									->with('mail',User::where('mail','=','cesaral_92@hotmail.com')->get())
									->with('friend',User::findOrFail(1)->friends);
	}

}