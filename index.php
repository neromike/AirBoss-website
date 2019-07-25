<?php require 'header.php'; ?>


<style>
#homepage_grid_container {
	position: absolute;
	top: 92px;
	width: 100%;
	//background-image: url(img/grid_square.png);
	//background-image: url(img/grid_square.png), radial-gradient(#426F9C, #144677);
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
	//max-height: 520px;
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
	background-color: white;
	opacity: 0.9;
	text-align: center;
	color: <?php echo $color_primary5; ?>;
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


<style>
.homepage_box_container {
	background-color: white;
}
.row_homepage_box_container_inner {
	width: 80%;
}
.homepage_box {
	background-color: <?php echo $color_primary5; ?>;
	color: #d1e0eb;
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
.homepage_box .homepage_box_button {
	background-color: <?php echo $color_primary1; ?>;
	color: white;
	padding-top: 0.5em;
	padding-bottom: 0.5em;
	padding-left: 1em;
	padding-right: 1em;
}
.homepage_box .homepage_box_button:hover {
	text-decoration: none;
	color: <?php echo $color_primary5; ?>;
	font-weight: bold;
	transition: color 0.5s;
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
		background-color: <?php echo $color_primary5; ?>;
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
					<a class="homepage_box_button" href="services.php">More Info</a>
					<br /><br />
				</div>
			</div>
			<div class="d-none d-sm-block col-sm-1 d-lg-none">&nbsp;</div>

			<div class="d-none d-sm-block col-sm-1 d-lg-none">&nbsp;</div>
			<div class="homepage_box col-12 col-sm-10 col-lg-4 text-center">
				<div class="homepage_box_inner">
					<h4>Projects</h4>
					<div class="homepage_box_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempus pretium dignissim. Vestibulum ullamcorper, purus a faucibus placerat, metus purus.</div>
					<a class="homepage_box_button" href="projects.php">More Info</a>
					<br /><br />
				</div>
			</div>
			<div class="d-none d-sm-block col-sm-1 d-lg-none">&nbsp;</div>

			<div class="d-none d-sm-block col-sm-1 d-lg-none">&nbsp;</div>
			<div class="homepage_box col-12 col-sm-10 col-lg-4 text-center">
				<div class="homepage_box_inner">
					<h4>Gallery</h4>
					<div class="homepage_box_desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tempus pretium dignissim. Vestibulum ullamcorper, purus a faucibus placerat, metus purus.</div>
					<a class="homepage_box_button" href="gallery.php">More Info</a>
					<br /><br />
				</div>
			</div>
			<div class="d-none d-sm-block col-sm-1 d-lg-none">&nbsp;</div>

	</div>

	</div>
	<div class="d-none d-sm-block col-sm-1"></div>
</div>


<!-- ********************************************* -->


<style>
.homepage_aboutus {
	background-color: #e8edf2;
}
.homepage_aboutus h1 {
	text-transform: uppercase;
	font-family: 'Nanum Gothic', sans-serif;
	padding-top: 1em;
	padding-bottom: 0.5em;
	color: #184668;
	font-size: 3em;
}
.homepage_aboutus .homepage_aboutus_button {
	background-color: #184668;
	color: white;
	padding-top: 0.5em;
	padding-bottom: 0.5em;
	padding-left: 1em;
	padding-right: 1em;
}
.homepage_aboutus .homepage_aboutus_button:hover {
	text-decoration: none;
	color: #6ea4ca;
	font-weight: bold;
	transition: color 0.5s;
}
</style>
<div class="homepage_aboutus row">
	<div class="col-1"></div>
	<div class="col-10 text-center">
		<h1>About Us</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis pulvinar elit, eget aliquam purus. Phasellus sed posuere elit. Suspendisse elementum dui in nisi tincidunt consectetur. Integer urna lacus, rutrum ut massa in, placerat mattis ipsum. Donec at maximus est. Quisque ultricies tincidunt diam ac pharetra. Nam tincidunt iaculis enim eu suscipit. Etiam est est, posuere sit amet felis vehicula, finibus fringilla velit. Phasellus lobortis diam at risus viverra, eget pharetra nisl mollis. Sed placerat lacinia justo, sed maximus nunc feugiat sit amet. Praesent ex sapien, varius vitae mollis finibus, pulvinar quis sapien. Aliquam ullamcorper fermentum nibh, quis egestas eros rutrum quis. Duis ipsum odio, placerat consectetur imperdiet eget, scelerisque id tortor.</p>
		<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque nec feugiat turpis. Vestibulum sit amet est ac lorem cursus tincidunt. Cras et tellus turpis. Nunc vitae dictum ipsum. Vestibulum tempor justo id mauris lobortis, vitae vestibulum lacus faucibus. Sed eu hendrerit tortor, dictum ultricies ante. In sit amet orci velit.</p>
		<br />
		<a class="homepage_aboutus_button" href="about.php">Read More</a>
		<br /><br /><br />
	</div>
	<div class="col-1"></div>
</div>


<!-- ********************************************* -->


<style>
.homepage_contactus {
	background-color: white;
	color: #184668;
}
.homepage_contactus h1 {
	font-size: 3em;
	text-transform: uppercase;
	font-family: 'Nanum Gothic', sans-serif;
	padding-top: 1em;
	padding-bottom: 0.5em;
	color: #184668;
}
.homepage_contactus input, textarea {
	padding-left: 1em;
	padding-right: 1em;
	padding-top: 0.5em;
	padding-bottom: 0.5em;
	border-radius: 0.5em;
	margin-bottom: 5px;
	border: 1px solid #184668;
}
#homepage_contactus_message {
	padding-bottom: 1em;
	color: #ff9696;

}
.homepage_contactus .homepage_contactus_button {
	background-color: #6ea4ca;
	color: white;
	padding-top: 0.5em;
	padding-bottom: 0.5em;
	padding-left: 1em;
	padding-right: 1em;
	border-radius: 0px;
}
.homepage_contactus .homepage_contactus_button:hover {
	text-decoration: none;
	color: #184668;
	font-weight: bold;
	transition: color 0.5s;
}
</style>
<div class="homepage_contactus row">
	<div class="col-12 text-center">
		<h1>Contact Us</h1>
		We can make anything fly
		<br /><br />
		<p>
			5336 Wells Fargo Dr.
			<br />
			Colorado Springs, CO 80918
			<br />
			dave@airboss-aerospace.com
			<br />
			(719) 532-0636
		</p>
		<form>
			<input id="contactus_name" type="text" placeholder="Name" />
			<br />
			<input id="contactus_email" type="email" placeholder="Email" />
			<br />
			<input id="contactus_subject" type="text" placeholder="Subject" />
			<br />
			<textarea id="contactus_message" placeholder="Message"></textarea>
			<br />
			<div id="homepage_contactus_message"></div>
			<input class="homepage_contactus_button" onclick="send_contact(); return false;" type="submit" />
		</form>
	</div>
</div>
<script>
function emailIsValid (email) {
	return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}
function send_contact() {
	$('#homepage_contactus_message').html('');
	let contact_name = $('#contactus_name').val().trim();
	let contact_email = $('#contactus_email').val().trim();
	let contact_subject = $('#contactus_subject').val().trim();
	let contact_message = $('#contactus_message').val().trim();

	/*
	if (contact_name.length < 3) {
		$('#homepage_contactus_message').html('Please enter your name.');
		return;
	};
	if (contact_email.length < 5) {
		$('#homepage_contactus_message').html('Please enter your email address.');
		return;
	};
	if (! emailIsValid(contact_email)) {
		$('#homepage_contactus_message').html('Please enter a valid email address.');
		return;
	}
	if (contact_subject.length < 1) {
		$('#homepage_contactus_message').html('Please enter a subject.');
		return;
	};
	if (contact_message.length < 10) {
		$('#homepage_contactus_message').html('Please enter a message.');
		return;
	};
	*/

	$.ajax({
		url: "send_mail.php",
		type: "POST",
		data: {"name":contact_name, "email":contact_email, "subject":contact_subject, "message":contact_message}
	}).done(function(data) {
		console.log(data);
	});
};
</script>


<?php require 'footer.php'; ?>
