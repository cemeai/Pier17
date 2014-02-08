<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>{{$title}}</title>
	    <!-- Le styles -->
	    <?= stylesheet_link_tag() ?>
		<link rel="stylesheet" type="text/css" href="http://localhost/Pier17/public/assets/custom.css">
	</head>
	<body>
		<header></header>
		<div class='navbar navbar-fixed-top'>
    		<div class='navbar-inner'>
		    	<div class='container'>
		    		<ul class='nav'>     
		    			<li>{{ HTML::link('', 'Home') }}</li>
						@if(Auth::check())
							<li>{{ HTML::link('users/profile','Profile') }}</li>
							<li>{{ HTML::link('users/logout', 'Logout')}}</li>
							@if(Auth::user()->id == 2)
								<li>{{ HTML::link('users/ccodes', 'Create Codes')}}</li>
							@endif
						@else
							<li>{{ HTML::link('users/register', 'Register') }}</li>
							<li>{{ HTML::link('users/login','Login') }}</li>
			            @endif

					</ul>
				</div>
			</div>
		</div><!-- end nav -->

		<div class='container dinamic'>
			<!-- check for flash notification message -->
		    @if(Session::has('flash_notice'))
		    	<div id='flash_notice'>{{ Session::get('flash_notice') }}</div>
		    @endif

		    {{ $content }}
		</div>
        <!-- Le scripts -->
        <?= javascript_include_tag() ?>
		<script src='../app/assets/javascripts/custom.js'></script>
	</body>
</html>
