<?php

class Base_Controller extends Controller {

	protected $view_opts = array();

	public function __construct()
	{
		//CSS
		Asset::add('bootstrap-css','css/bootstrap.css');
		Asset::add('custom-css','css/style.css');
		//JAVASCRIPT
		Asset::add('jquery-19.0.min','js/jquery-19.0.min.js');
		Asset::add('bootstrap-js','js/bootstrap.js');
		Asset::add('bootstrap-min-js','js/bootstrap.min.js');

		//require_once( path('app').'libraries/form_helpers.php');

		parent::__construct();
	}

	/**
	 * Catch-all method for requests that can't be matched.
	 *
	 * @param  string    $method
	 * @param  array     $parameters
	 * @return Response
	 */
	public function __call($method, $parameters)
	{
		return Response::error('404');
	}

}