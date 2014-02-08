<?php

class UsersController extends BaseController {

	protected $layout = "layout";

	public function __construct() {
		$this->beforeFilter('csrf', array('on'=>'post'));
		$this->beforeFilter('auth', array('only' => array('getProfile', 'getCcodes')));
	}

	public function getRegister() {
		$this->layout->title = 'Register';
		$this->layout->content = View::make('register');
	}

	public function postCreate() {
		$validator = Validator::make(Input::all(), User::$rules);
		if ($validator->passes()) {
			$user = new User;
			$user->key = 'KKKKKKKKKKKKKKKK';
			$user->name = Input::get('name');
			$user->lastname = Input::get('lastname');
			$user->mail = Input::get('mail');
			$user->bday = '1992-07-17';
			$user->password = Hash::make(Input::get('password'));
			$user->language = 1;
			$user->heart = 0;
			$user->secCode = 11111;
			$user->timestamps = false;
			$user->save();

			return Redirect::to('users/login')->with('message', 'Thanks for registering!');
		} else {
			return Redirect::to('users/register')
				->with('message', 'The following errors occurred')
				->withErrors($validator)
				->withInput();
		}
	}

	public function getLogin() {
		$this->layout->title = 'Login';
		$this->layout->content = View::make('login');
	}

	public function postAuth() {
		if(Auth::attempt( array( 'mail' => Input::get('email'), 'password' => Input::get('password')))){
			return Redirect::to('users/profile')->with('message', 'You are now logged!');
		} else {
			return Redirect::to('users/login')
					->with('message', 'Your username or password is incorrect!')
					->withInput();
		}
	}

	public function getProfile() {
		$this->layout->title = 'Profile';
		$this->layout->content = View::make('profile');
	}

	public function getLogout() {
		Auth::logout();
		return Redirect::to('/')->with('message', 'Your are now logged out!');
	}

}