<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>{{ $title }}</title>
	    <!-- Le styles -->
	    <?= stylesheet_link_tag() ?>
		<link rel="stylesheet" type="text/css" href="../app/assets/stylesheets/application.css">
	</head>
	<body>
		<header></header>
		<div class="container">
            {{ $content }}
            <footer id="footer"></footer>
        </div>
        <!-- Le scripts -->
        <?= javascript_include_tag() ?>
		<script src="../app/assets/javascripts/application.js"></script>
	</body>
</html>
