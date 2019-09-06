
</div>


<style>
footer {
	background-color: <?php echo $color_base_dark; ?>;
	color: <?php echo $color_base_light; ?>;
	font-size: 0.8em;
}
footer .row {
	padding-top: 2em;
	padding-bottom: 2em;
}
</style>
<footer class="container-fluid">
	<div class="row">
		<div class="col text-center">
			&copy; <?php echo date("Y"); ?> AirBoss Aviation Group, Inc.
		</div>
	</div>
</footer>

</body>
<script>
	$('.contact_email').each(function() {
		let href = $(this).attr('href').replace('<?php echo $email_address_obfuscate . '.'; ?>', '.');
	  $(this).attr('href', href);
	  href = href.replace('mailto:', '');
	  $(this).html(href);

	});

	function emailIsValid (email) {
		return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
	}
	function send_contact() {
		$('.homepage_contactus_message').html('');
		let contact_name = $('.contactus_name').val().trim();
		let contact_email = $('.contactus_email').val().trim();
		let contact_subject = $('.contactus_subject').val().trim();
		let contact_message = $('.contactus_message').val().trim();

		/*
		if (contact_name.length < 3) {
			$('.homepage_contactus_message').html('Please enter your name.');
			return;
		};
		if (contact_email.length < 5) {
			$('.homepage_contactus_message').html('Please enter your email address.');
			return;
		};
		if (! emailIsValid(contact_email)) {
			$('.homepage_contactus_message').html('Please enter a valid email address.');
			return;
		}
		if (contact_subject.length < 1) {
			$('.homepage_contactus_message').html('Please enter a subject.');
			return;
		};
		if (contact_message.length < 10) {
			$('.homepage_contactus_message').html('Please enter a message.');
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
</html>
