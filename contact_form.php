<style>
.contactus_container input, textarea {
	padding-left: 1em;
	padding-right: 1em;
	padding-top: 0.5em;
	padding-bottom: 0.5em;
	border-radius: 0.5em;
	margin-bottom: 5px;
	border: 1px solid <?php echo $color_base_dark; ?>;
	display: table;
	margin-left: auto;
	margin-right: auto;
}
.contactus_container .button {
	border-radius: 0px;
	margin-bottom: 2em;
}
.contactus_container {
	padding-bottom: 1em;
	color: <?php echo $color_base_mid_dark; ?>;
}
</style>
<form class="contactus_container">
	<input class="contactus_name" type="text" placeholder="Name" />
	<input class="contactus_email" type="email" placeholder="Email" />
	<input class="contactus_subject" type="text" placeholder="Subject" />
	<textarea class="contactus_message" placeholder="Message"></textarea>
	<div class="homepage_contactus_message"></div>
	<input class="button button_light" onclick="send_contact(); return false;" type="submit" />
</form>
