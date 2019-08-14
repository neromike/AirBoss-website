<!doctype html>
<html lang="en">
<head>
	<meta name="robots" content="noindex" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144200802-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-144200802-1');
  </script>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://kit.fontawesome.com/60bb5f8cf9.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">

	<title>AirBoss Aviation Group</title>
	<link rel="icon" type="image/png" href="favicon.ico" />
</head>

<?php
	$color_base_dark = "#01284E";
	$color_base_mid_dark = "#14497C";
	$color_base_mid_light = "#42709C";
	$color_base_light = "#9EB8D2";
	$color_light = "#FFFFFF";
	$color_grey = "#e8edf2";

	$email_address_obfuscate = "-planes";
	$email_address = "dave@airboss-aerospace" . $email_address_obfuscate . ".com";
	$address1 = "5336 Wells Fargo Dr.";
	$address2 = "Colorado Springs, CO 80918";
	$phone_number = "(719) 532-0636";
?>

<style>
* {
	font-family: 'Nanum Gothic', sans-serif;
}
body {
	overscroll-behavior-y: none;
}
a {
	color: inherit;
}
a.contact_link:hover {
	text-decoration: none;
	color: inherit;
}
h1 {
	color: <?php echo $color_base_dark; ?>;
    text-transform: uppercase;
    margin-top: 1em;
    margin-bottom: 1em;
}
hr {
	width: 100%;
}
.page_overview_copy {
  padding-top: 2em;
  padding-bottom: 2em;
}
</style>
<body>


<style>
header {
	background-color: <?php echo $color_base_dark; ?>;
}
header .row {
	padding-top: 2em;
	padding-bottom: 2em;
}
header a:hover {
	text-decoration: none;
}
header h4 {
	margin: 0px;
	text-transform: uppercase;
	font-size: 1.7em;
}
header .logo_color1 {
	color: <?php echo $color_light; ?>;
}
header .logo_color2 {
	color: <?php echo $color_base_light; ?>;
	font-size: 0.7em;
}
header .logo_hamburger {
	font-size: 1.8em;
	color: <?php echo $color_light; ?>;
}

#header_menu a {
	color: <?php echo $color_grey; ?>;
	margin-left: 1em;
	margin-right: 1em;
}
#header_menu a:hover {
	color: <?php echo $color_base_mid_light; ?>;
	transition: color 0.5s;
}
#header_menu a.header_current {
	color: <?php echo $color_base_light; ?>;
	cursor: default;
}
#header_hamburger_modal a {
	color: <?php echo $color_grey; ?>;
	font-size: 1.3em;
	line-height: 1.3em;
	cursor: pointer;
	padding: 0.4em;
}
#header_hamburger_modal a:hover {
	text-decoration: none;
	color: <?php echo $color_base_light; ?>;
}
#header_hamburger_modal a.header_current {
	color: <?php echo $color_base_mid_light; ?>;
	cursor: default;
}

@media (min-width: 576px) {

}
@media (min-width: 768px) {

}
@media (min-width: 992px) {

}
@media (min-width: 1200px) {

}
@media (min-width: 1600px) {

}
</style>
<header class="fixed-top container-fluid">
	<div class="row">
		<!-- LOGO -->
		<div class="col-10 col-md-9 col-lg-6">
			<a href="index.php">
				<h4>
					<span class="logo_color1">AirBoss</span>
					<span class="logo_color2">Aviation Group</span>
				</h4>
			</a>
		</div>

		<!-- HAMBURGER FOR SMALLER SCREENS -->
		<a class="text-right col-2 d-block d-lg-none" href="" data-toggle="modal" data-target="#header_hamburger_modal">
			<span class="fas fa-bars logo_hamburger"></span>
		</a>

		<!-- MENU FOR LARGER SCREENS -->
		<?php $page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>
		<div id="header_menu" class="text-right col-6 d-none d-lg-block">
			<a <?php if ($page_name == 'about') { echo 'class="header_current"'; } else { echo 'href="about.php"'; }; ?>>About</a>
			<a <?php if ($page_name == 'services') { echo 'class="header_current"'; } else { echo 'href="services.php"'; }; ?>>Services</a>
			<a <?php if ($page_name == 'projects') { echo 'class="header_current"'; } else { echo 'href="projects.php"'; }; ?>>Projects</a>
			<a <?php if ($page_name == 'press') { echo 'class="header_current"'; } else { echo 'href="press.php"'; }; ?>>Press</a>
			<!--<a <?php #if ($page_name == 'gallery') { echo 'class="header_current"'; } else { echo 'href="gallery.php"'; }; ?>>Gallery</a>-->
			<a <?php if ($page_name == 'contact') { echo 'class="header_current"'; } else { echo 'href="contact.php"'; }; ?>>Contact</a>
		</div>
	</div>
</header>

<style>
#header_hamburger_modal .modal-body {
	background-color: <?php echo $color_base_mid_dark; ?>;
	color: <?php echo $color_light; ?>;
}
#header_hamburger_modal .close {
	color: <?php echo $color_light; ?>;
}
</style>
<div class="modal" tabindex="-1" role="dialog" id="header_hamburger_modal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body text-center">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<p>&nbsp;</p>
				<p><a <?php if ($page_name == 'index') { echo 'class="header_current"'; } else { echo 'href="index.php"'; }; ?>>Home</a></p>
				<p><a <?php if ($page_name == 'about') { echo 'class="header_current"'; } else { echo 'href="about.php"'; }; ?>>About</a></p>
				<p><a <?php if ($page_name == 'services') { echo 'class="header_current"'; } else { echo 'href="services.php"'; }; ?>>Services</a></p>
				<p><a <?php if ($page_name == 'projects') { echo 'class="header_current"'; } else { echo 'href="projects.php"'; }; ?>>Projects</a></p>
				<p><a <?php if ($page_name == 'press') { echo 'class="header_current"'; } else { echo 'href="press.php"'; }; ?>>Press</a></p>
				<!--<p><a <?php #if ($page_name == 'gallery') { echo 'class="header_current"'; } else { echo 'href="gallery.php"'; }; ?>>Gallery</a></p>-->
				<p><a <?php if ($page_name == 'contact') { echo 'class="header_current"'; } else { echo 'href="contact.php"'; }; ?>>Contact</a></p>
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
</div>


<style>
#body_container {
	<?php
		if (basename($_SERVER['PHP_SELF']) == 'index.php') {
			echo "margin-top: 400px;";
		} else {
			echo "margin-top: 96px;";
		}
	?>
}

.button {
	padding-top: 0.5em;
	padding-bottom: 0.5em;
	padding-left: 1em;
	padding-right: 1em;
}
.button:hover {
	text-decoration: none;
	font-weight: bold;
	transition: color 0.5s;
}
.button_light {
	background-color: <?php echo $color_base_mid_light; ?>;
	color: <?php echo $color_light; ?>;
}
.button_light:hover {
	color: <?php echo $color_base_dark; ?>;
}
.button_dark {
	background-color: <?php echo $color_base_dark; ?>;
	color: <?php echo $color_light; ?>;
}
.button_dark:hover {
	color: <?php echo $color_base_light; ?>;
}

@media (min-width: 576px) {
	#body_container {
		<?php
			if (basename($_SERVER['PHP_SELF']) == 'index.php') {
				echo "margin-top: 440px;";
			} else {
				echo "margin-top: 96px;";
			}
		?>
	}
}
@media (min-width: 768px) {
	#body_container {
		<?php
			if (basename($_SERVER['PHP_SELF']) == 'index.php') {
				echo "margin-top: 586px;";
			} else {
				echo "margin-top: 96px;";
			}
		?>
	}
}
@media (min-width: 992px) {

}
@media (min-width: 1200px) {

}
@media (min-width: 1600px) {

}
</style>
<div id="body_container" class="container-fluid">
