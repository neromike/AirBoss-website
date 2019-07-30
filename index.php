<?php require 'header.php'; ?>


<!-- ********************************************* -->
<!-- *** Grid                                  *** -->
<!-- ********************************************* -->

<style>
#homepage_grid_container {
	position: absolute;
	top: 92px;
	width: 100%;
	background-image: url(img/grid_square.png), radial-gradient(#426F9C, #144677);
	background-size: calc(100% / 8), cover;
	overflow: hidden;
	z-index: -1;
}
#homepage_grid_img_container {
	margin-left: auto;
	margin-right: auto;
	position: relative;
}
#homepage_grid_img {
	max-width: 100%;
	height: auto;
	width: auto;
	padding-left: 1em;
	padding-right: 1em;
	padding-top: 2em;
	padding-bottom: 2em;

	image-rendering: -moz-crisp-edges;
    image-rendering: -o-crisp-edges;
    image-rendering: -webkit-optimize-contrast;
    -ms-interpolation-mode: nearest-neighbor;
}

#homepage_grid_img_svg {
	max-height: 520px;
	max-width: 100%;
	height: 300px;
	width: auto;
	padding-left: 1em;
	padding-right: 1em;
	padding-top: 2em;
	padding-bottom: 2em;
}

#homepage_grid_message {
	background-color: <?php echo $color_light; ?>;
	color: <?php echo $color_base_dark; ?>;
	opacity: 0.9;
	text-align: center;
}
#homepage_grid_message h1 {
	font-weight: bold;
	padding-top: 0.25em;
	font-size: 3em;
}
#homepage_grid_message_text {
	padding-bottom: 1em;
	text-transform: uppercase;
}

@media (min-width: 576px) {
	#homepage_grid_img_svg {
		height: 340px;
	}
}
@media (min-width: 768px) {
	#homepage_grid_img_container {
		padding-bottom: 4em;
	}
	#homepage_grid_img_svg {
		height: 500px;
	}
}
@media (min-width: 992px) {
	#homepage_grid_container {
		background-size: calc(100% / 10), cover;
	}
}
@media (min-width: 1200px) {
	#homepage_grid_container {
		background-size: calc(100% / 13), cover;
	}
}
@media (min-width: 1600px) {
	#homepage_grid_container {
		background-size: calc(100% / 22), cover;
	}
}

</style>
<div id="homepage_grid_container" class="row">
	<div id="homepage_grid_img_container">
		<object type="image/svg+xml" data="img/slider_jet.svg" id="homepage_grid_img_svg"></object>
		<!-- <img id="homepage_grid_img" src="img/slider_jet.png" /> -->
	</div>
</div>
<div id="homepage_grid_message" class="row">
	<h1 class="col-12">AIRBOSS AVIATION GROUP, INC.</h1>
	<div id="homepage_grid_message_text" class="col-12">design &bull; engineer &bull; prototype &bull; fly</div>
</div>

<script>
var taking_off = false;
function takeoff() {
	if (! taking_off) {
		taking_off = true;
		$('#homepage_grid_img_container')
			.animate({left: "100%"}, 2000)
			.animate({left: "-100%"}, 0)
			.delay(1000)
			.animate({left: "0%"}, 1000, function() { taking_off=false;});
		//$('#homepage_grid_img_svg').animate({height: "800px"}, 1000);
	}
};
window.onload = (function(){
  $(window).scroll(function () {
		// make the plane take off if the user scrolls down more than 20 pixels on the page
		if( $(window).scrollTop() > 20 ) {
			takeoff();
    }

		// scroll the grid container more slowly
		$('#homepage_grid_container').css('top', 92 + $(window).scrollTop() / 3);
  })
})
</script>


<!-- ********************************************* -->
<!-- *** Boxes                                 *** -->
<!-- ********************************************* -->


<style>
.homepage_box_container {
	background-color: <?php echo $color_light; ?>;
}
.row_homepage_box_container_inner {
	width: 80%;
}
.homepage_box {
	background-color: <?php echo $color_base_dark; ?>;
	color: <?php echo $color_light; ?>;
	font-family: 'Nanum Gothic', sans-serif;
	margin-top: 2px;
	margin-bottom: 2px;
}
.homepage_box_inner {
	padding: 2em;
	position: relative;
}
.homepage_box h4 {
	text-transform: uppercase;
	padding-top: 1em;
	padding-bottom: 2em;
	font-size: 1.5em;
}
.homepage_box .homepage_box_desc {
	font-size: 1em;
	padding-bottom: 3em;
}

@media (min-width: 576px) {
	.homepage_box {
		margin-top: 2em;
		margin-bottom: 2em;
	}
}
@media (min-width: 768px) {

}
@media (min-width: 992px) {
	.homepage_box {
		background-color: white;
		padding: 15px;
		display: flex;
	}
	.homepage_box_inner {
		background-color: <?php echo $color_base_dark; ?>;
	}
	.homepage_box_button {
		position: absolute;
		bottom: 1em;
		left: 0px;
		right: 0px;
		margin-left: 3em;
		margin-right: 3em;
	}
}
@media (min-width: 1200px) {

}
@media (min-width: 1600px) {

}
</style>
<div class="row homepage_box_container">
	<div class="d-none d-sm-block col-sm-1"></div>
	<div class="homepage_box_container_inner col-12 col-sm-10">

		<div class="row">

			<div class="d-none d-sm-block col-sm-1 d-lg-none">&nbsp;</div>
			<div class="homepage_box col-12 col-sm-10 col-lg-4 text-center">
				<div class="homepage_box_inner">
					<h4>Services</h4>
					<div class="homepage_box_desc">We have over 25 years of experience working from conceptual design to test flight. GIve us your idea, and we'll make it fly.</div>
					<a class="homepage_box_button button button_light" href="services.php">More Info</a>
					<br /><br />
				</div>
			</div>
			<div class="d-none d-sm-block col-sm-1 d-lg-none">&nbsp;</div>

			<div class="d-none d-sm-block col-sm-1 d-lg-none">&nbsp;</div>
			<div class="homepage_box col-12 col-sm-10 col-lg-4 text-center">
				<div class="homepage_box_inner">
					<h4>Projects</h4>
					<div class="homepage_box_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempus pretium dignissim. Vestibulum ullamcorper, purus a faucibus placerat, metus purus.</div>
					<a class="homepage_box_button button button_light" href="projects.php">More Info</a>
					<br /><br />
				</div>
			</div>
			<div class="d-none d-sm-block col-sm-1 d-lg-none">&nbsp;</div>

			<div class="d-none d-sm-block col-sm-1 d-lg-none">&nbsp;</div>
			<div class="homepage_box col-12 col-sm-10 col-lg-4 text-center">
				<div class="homepage_box_inner">
					<h4>Gallery</h4>
					<div class="homepage_box_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempus pretium dignissim. Vestibulum ullamcorper, purus a faucibus placerat, metus purus.</div>
					<a class="homepage_box_button button button_light" href="gallery.php">More Info</a>
					<br /><br />
				</div>
			</div>
			<div class="d-none d-sm-block col-sm-1 d-lg-none">&nbsp;</div>

	</div>

	</div>
	<div class="d-none d-sm-block col-sm-1"></div>
</div>


<!-- ********************************************* -->
<!-- *** About                                 *** -->
<!-- ********************************************* -->


<style>
.homepage_aboutus {
	background-color: <?php echo $color_grey; ?>;
}
.homepage_aboutus h1 {
	padding-top: 1em;
	padding-bottom: 0.5em;
}
</style>
<div class="homepage_aboutus row">
	<div class="col-1"></div>
	<div class="col-10 text-center">
		<h1>About Us</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis pulvinar elit, eget aliquam purus. Phasellus sed posuere elit. Suspendisse elementum dui in nisi tincidunt consectetur. Integer urna lacus, rutrum ut massa in, placerat mattis ipsum. Donec at maximus est. Quisque ultricies tincidunt diam ac pharetra. Nam tincidunt iaculis enim eu suscipit. Etiam est est, posuere sit amet felis vehicula, finibus fringilla velit. Phasellus lobortis diam at risus viverra, eget pharetra nisl mollis. Sed placerat lacinia justo, sed maximus nunc feugiat sit amet. Praesent ex sapien, varius vitae mollis finibus, pulvinar quis sapien. Aliquam ullamcorper fermentum nibh, quis egestas eros rutrum quis. Duis ipsum odio, placerat consectetur imperdiet eget, scelerisque id tortor.</p>
		<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque nec feugiat turpis. Vestibulum sit amet est ac lorem cursus tincidunt. Cras et tellus turpis. Nunc vitae dictum ipsum. Vestibulum tempor justo id mauris lobortis, vitae vestibulum lacus faucibus. Sed eu hendrerit tortor, dictum ultricies ante. In sit amet orci velit.</p>
		<br />
		<a class="button button_dark" href="about.php">Read More</a>
		<br /><br /><br />
	</div>
	<div class="col-1"></div>
</div>


<!-- ********************************************* -->
<!-- *** Contact                               *** -->
<!-- ********************************************* -->


<style>
.homepage_contactus {
	background-color: <?php echo $color_light; ?>;
	color: <?php echo $color_base_dark; ?>;
}
.homepage_contactus h1 {
	padding-top: 1em;
}
.contact_subtitle {
	font-style: italic;
	padding-bottom: 1em;
}
</style>
<div class="homepage_contactus row">
	<div class="col-12 text-center">
		<h1>Contact Us</h1>
		<div class="contact_subtitle">
			We can make anything fly
		</div>
		<p>
			<?php echo $address1; ?>
			<br />
			<?php echo $address2; ?>
			<br />
			<a href="mailto:<?php echo $email_address; ?>" target="_blank" class="contact_link contact_email"><?php echo $email_address; ?></a>
			<br />
			<a href="tel:<?php echo $phone_number; ?>" class="contact_link"><?echo $phone_number; ?></a>
		</p>
		<?php require 'contact_form.php'; ?>
	</div>
</div>


<?php require 'footer.php'; ?>
