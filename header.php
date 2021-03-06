<?php
  session_start();
  if (isset($_SESSION['vip_code'])) {
    $vip_code = $_SESSION['vip_code'];

    // Assign the permissions
    require_once("vip_permission_list.php");
    $vip_permission = array(
      "angel_lift"              => in_array("angel_lift", $vip_permission_list[$vip_code]),
      "bear_series_aircraft"    => in_array("bear_series_aircraft", $vip_permission_list[$vip_code]),
      "pav__medevac"            => in_array("pav__medevac", $vip_permission_list[$vip_code]),
      "hornet"                  => in_array("hornet", $vip_permission_list[$vip_code]),
      "peregrine_jet"           => in_array("peregrine_jet", $vip_permission_list[$vip_code]),
      "regional_cargo_aircraft" => in_array("regional_cargo_aircraft", $vip_permission_list[$vip_code]),
    );
  } else {
    $vip_code = null;
    $vip_permission = array();
  };
?>
<!doctype html>
<html lang="en">
<head>
	<?php if ( strpos($_SERVER['PHP_SELF'], "dev/") || strpos($_SERVER['PHP_SELF'], "project.php?") || strpos($_SERVER['PHP_SELF'], "promo.php?") ) { ?>
	  <meta name="robots" content="noindex" />
	<?php } else { ?>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-144200802-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-144200802-1');
	  </script>
	<?php } ?>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script src="https://kit.fontawesome.com/60bb5f8cf9.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic&display=swap" rel="stylesheet">

	<title>AirBoss Aviation Group</title>

	<!-- generics -->
	<link rel="icon" type="image/png" href="favicon/favicon-32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="favicon/favicon-57.png" sizes="57x57" />
	<link rel="icon" type="image/png" href="favicon/favicon-76.png" sizes="76x76" />
	<link rel="icon" type="image/png" href="favicon/favicon-96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="favicon/favicon-128.png" sizes="128x128" />
	<link rel="icon" type="image/png" href="favicon/favicon-192.png" sizes="192x192" />
	<link rel="icon" type="image/png" href="favicon/favicon-228.png" sizes="228x228" />

	<!-- Android -->
	<link rel="shortcut icon" type="image/png" href="favicon/favicon-196.png" sizes="196x196" />

	<!-- iOS -->
	<link rel="apple-touch-icon" type="image/png" href="favicon/favicon-120.png" sizes="120x120" />
	<link rel="apple-touch-icon" type="image/png" href="favicon/favicon-152.png" sizes="152x152" />
	<link rel="apple-touch-icon" type="image/png" href="favicon/favicon-180.png" sizes="180x180" />

	<!-- Windows 8 IE 10-->
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="favicon/favicon-144.png" />

	<!-- Windows 8.1 + IE11 and above -->
	<meta name="msapplication-config" content="favicon/browserconfig.xml" />
</head>

<?php
	$color_base_dark = "#01284E";
	$color_base_mid_dark = "#14497C";
	$color_base_mid_light = "#42709C";
	$color_base_light = "#9EB8D2";
	$color_light = "#FFFFFF";
	$color_grey = "#e8edf2";

	$email_address_obfuscate = "-planes";
	$email_address = "djfawcett@airbossaviation" . $email_address_obfuscate . ".com";
	$address1 = "3201 Plumas St Ste 143";
	$address2 = "Reno, NV 89509";
	$phone_number = "(719) 532-0636";
?>

<style>
* {
	font-family: 'Nanum Gothic', sans-serif;
  font-display: swap;
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
	padding-top: 1.5em;
	padding-bottom: 1.45em;
	align-items: center;
}
header a:hover {
	text-decoration: none;
}
header h4 {
	margin: 0px;
	text-transform: uppercase;
	font-size: 1.7em;
}
header #header_logo {
	height: 45px;
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
	header #header_logo {
		height: 50px;
	}
	header .row {
		padding-top: 1.3em;
		padding-bottom: 1.3em;
	}
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
			<a href="/<?php if (strpos($_SERVER['PHP_SELF'], "dev/")) { echo 'dev/'; } ?>">
				<img id="header_logo" src="img/airboss_logo.png" />
			</a>
		</div>

		<!-- HAMBURGER FOR SMALLER SCREENS -->
		<a class="text-right col-2 d-block d-lg-none" href="" data-toggle="modal" data-target="#header_hamburger_modal">
			<span class="fas fa-bars logo_hamburger"></span>
		</a>

		<!-- MENU FOR LARGER SCREENS -->
		<?php $page_name = basename($_SERVER["SCRIPT_FILENAME"], '.php'); ?>
		<div id="header_menu" class="text-right col-6 d-none d-lg-block">
			<a <?php if ($page_name == 'about') { echo 'class="header_current"'; } else { echo 'href="about"'; }; ?>>About</a>
			<a <?php if ($page_name == 'services') { echo 'class="header_current"'; } else { echo 'href="services"'; }; ?>>Services</a>
			<a <?php if ($page_name == 'projects') { echo 'class="header_current"'; } else { echo 'href="projects"'; }; ?>>Projects</a>
			<a <?php if ($page_name == 'press') { echo 'class="header_current"'; } else { echo 'href="press"'; }; ?>>Press</a>
			<a <?php if ($page_name == 'contact') { echo 'class="header_current"'; } else { echo 'href="contact"'; }; ?>>Contact</a>
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
				<p><a <?php if ($page_name == 'index') { echo 'class="header_current"'; } else { echo 'href="/dev"'; }; ?>>Home</a></p>
				<p><a <?php if ($page_name == 'about') { echo 'class="header_current"'; } else { echo 'href="about"'; }; ?>>About</a></p>
				<p><a <?php if ($page_name == 'services') { echo 'class="header_current"'; } else { echo 'href="services"'; }; ?>>Services</a></p>
				<p><a <?php if ($page_name == 'projects') { echo 'class="header_current"'; } else { echo 'href="projects"'; }; ?>>Projects</a></p>
				<p><a <?php if ($page_name == 'press') { echo 'class="header_current"'; } else { echo 'href="press"'; }; ?>>Press</a></p>
				<p><a <?php if ($page_name == 'contact') { echo 'class="header_current"'; } else { echo 'href="contact"'; }; ?>>Contact</a></p>
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
			echo "margin-top: 92px;";
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
				echo "margin-top: 92px;";
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
				echo "margin-top: 92px;";
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
