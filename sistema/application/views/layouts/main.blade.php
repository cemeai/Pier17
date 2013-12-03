<!DOCTYPE html>
<html lang="es">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="Pier17 - Social Network">
	    <meta name="author" content="Pier17">
		<meta content='True' name='HandheldFriendly' />
		<meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' />
		<meta name="viewport" content="width=device-width" />
	    <title>Pier17 {{ $title }}</title>
	    <!-- Le styles -->
	    {{ Asset::styles() }}
	</head>
	<body id="main_backgorund">
		<!-- Start Header -->
	    <header>
	    </header>
	    <!-- End Header -->

		 <!-- Start main content -->
    	<div class="inner_sep container">
            {{ $content }}
            <a href="#" id="load-content">Load Content</a>
        </div>
		<!-- End main content -->

        <!-- Start footer -->
	    <footer class="container">
	    </footer>
	    <!-- End footer -->

	    <script type="text/javascript"> var BASE = "<?php echo URL::base(); ?>";</script>
		{{Asset::scripts() }}
		<!-- Complementary Scripts -->
	    <script type="text/javascript">
	    	$(document).ready(function() {
	    		$('#load-content').click(function(e) {
	    			// prevent the links default action from firing
	    			e.preventDefault();
	    			// attempt to GET the new content
	    			$.get(BASE+'/content', function(data) {
	    				$('#content').html(data);
	    			});
	    		})
	    	});
	    	$(function(){ $("#{{$page}}").attr('class', 'header_menu_item active_menu_header'); });
	    	$(function(){ $("#{{$page}}_f").attr('class', 'footer_menu_item active_menu_footer'); });
	      	$(function(){ $('#slider').carousel(); });
	      	$(function(){ $('.more_info').popover(); });
	    </script>
	</body>
</html>
