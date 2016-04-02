<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>The Growing Minds Initiative</title>

	<!-- Normalize CSS -->
	<link rel="stylesheet" href="css/normalize.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Bootstrap CSS - Optional Theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

		<!-- Style CSS Link -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Slick CSS Link -->
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>

	<!-- Slick CSS Link -->
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">




</head>

<body>
<header class="header clearfix">
	<a href="our_story.php"><img src="images/logo.jpg" alt="GMI" class="logo col-md-4 col-xs-11"></a>
	<div class="search-content">
		<input class="search" type="text" placeholder="Search...">
		<input class="search-button" type="button" value="Search">
	</div>
	<div class="nav-wrap col-xs-8">
		<nav class="headerNav">
			<ul>
				<li><a href="our_story.php">Our Story</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="https://www.gofundme.com/growingminds/donate" target="blank">Donate</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
	</div>
</header>


<?php

if( $_SERVER['REQUEST_URI'] == '/gmi.org/index.php' ){?>

	<section class="hero">
		
	</section>

<?php } ?>