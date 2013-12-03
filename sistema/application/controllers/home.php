<?php

class Home_Controller extends Base_Controller {

	public $layout = 'layouts.main';

	public function action_index(){
		$view = View::make('example');
		$this->layout->page = 'Home';
		$this->layout->title = 'Home';
		$this->layout->content = $view;
	}

	public function action_ajaxEx(){
		$view = View::make('ajax');
		$this->layout->page = 'Home';
		$this->layout->title = 'Home';
		$this->layout->content = $view;
	}

}