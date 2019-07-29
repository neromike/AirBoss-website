
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
  let href = $('.contact_email').attr('href').replace('<?php echo $email_address_obfuscate . '.'; ?>', '.');
	console.log(href);
  $('.contact_email').attr('href', href);
  href = href.replace('mailto:', '');
  $('.contact_email').html(href);
</script>
</html>
