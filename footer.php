
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
footer .vip_footer_welcome {
	display: none;
}
footer .vip_code_input_container {
  display: none;
  margin-left: auto;
  margin-right: auto;
}
.vip_code_input {
  text-align: center;
}
</style>
<footer class="container-fluid">
	<div class="row">
		<div class="col text-center">
			<div class="vip_footer_welcome">
      	Welcome VIP!
      	<br />
        <?php if (strpos($_SERVER['PHP_SELF'], "dev/")) { ?>
          <div id="logout">Log out (only appears on dev)</div>
        <?php  } ?>
			</div>
      <div class="vip_code_link">Have a VIP code?</div>
      <div class="vip_code_input_container">
        <input class="vip_code_input" placeholder="Enter your VIP code" />
        <input class="vip_code_submit button_light" type="submit" />
      </div>
			<?php if (isset($vip_code)) { ?>
				<script>
					$('.vip_footer_welcome').show();
					$('.vip_code_link').hide();
					$('.vip_code_input_container').hide();
				</script>
      <?php } ?>
			&copy; <?php echo date("Y"); ?> AirBoss Aviation Group, Inc.
		</div>
	</div>
</footer>

</body>
<script>
	$('.contact_email').each(function() {
		let href = $(this).attr('href').replace('<?php echo $email_address_obfuscate . '.'; ?>', '.');
	  $(this).attr('href', href);
		if ($(this).hasClass('contact_email_linkonly')) {
			href=$(this).html() + ' <i class="far fa-envelope"></i>';
		} else {
			href = href.replace('mailto:', '');
		}
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

		$.ajax({
			url: "send_mail.php",
			type: "POST",
			data: {"name":contact_name, "email":contact_email, "subject":contact_subject, "message":contact_message}
		}).done(function(data) {
      if (data == 'need input') {
        $('.homepage_contactus_message').html('Please fill out the contact form.');
      } else {
        $('.contactus_name').hide();
        $('.contactus_email').hide();
        $('.contactus_subject').hide();
        $('.contactus_message').hide();
        $('.contactus_container .button').hide();
        $('.homepage_contactus_message').html('<stong>Thank you!<br />Your message has been sent. We will get back to you at the email address you provided.</strong>');
      };
		});
	};

  // Show the VIP input and subimt button if message is clicked
  $('.vip_code_link').on('click touch', function() {
    $('.vip_code_link').hide();
    $('.vip_code_input_container').show();
  });
  $('.vip_code_submit').on('click touch', function() {
    let this_code = $(this).parent().find('.vip_code_input').val();
    $.ajax({
      url: "validate_vip_code.php",
      type: "POST",
      data: {"vip_code":this_code}
    }).done(function(success) {
      if (success) {
        //location.reload();
				$('.vip_footer_welcome').show();
				$('.project_spec').css('display', 'block');
				$('.vip_code_input_container').hide();
      } else {
        $('.vip_code_input_container').hide();
        $('.vip_code_input').val('');
        $('.vip_code_link').show();
      };
    });
  });
  $('#logout').on('click touch', function() {
    console.log('log out');
    $.ajax({
      url: "logout.php"
    }).done(function(data) {
      location.reload();
    });
  });

  <!-- Disable right-click on production -->
	<?php if (! strpos($_SERVER['PHP_SELF'], "dev/")) { ?>
		document.addEventListener('contextmenu', event => event.preventDefault());
	<?php } ?>
</script>
</html>
