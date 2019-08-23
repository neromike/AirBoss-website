<?php require 'header.php'; ?>


<style>
.contact_subtitle {
  font-style: italic;
  padding-bottom: 1em;
}
.contact_image {
  width: 200px;
}
.contact_email_container {
  font-size: 1.5em;
  padding-bottom: 1em;
}
.contact_subpage {
  background-color: <?php echo $color_grey; ?>;
  padding-top: 2em;
  padding-bottom: 2em;
}
.contact_subpage_copy {
  font-size: 1.3em;
  line-height: 1.7em;
}
</style>
<div class="row text-center">
    <h1 class="col-12">Contact</h1>
    <div class="col-12">
      <div class="contact_subtitle">We can make anything fly</div>
      <img class="contact_image" src="img/contact/contact_back.jpg" />
      <div class="contact_email_container">
        <a href="mailto:<?php echo $email_address; ?>" target="_blank" class="contact_link contact_email"><?php echo $email_address; ?></a>
      </div>
    </div>
    <div class="contact_subpage col-12">
      <div class="row">
        <div class="col-12 col-sm-6 align-self-center">
          <?php require 'contact_form.php'; ?>
        </div>
        <div class="col-12 col-sm-6 align-self-center contact_subpage_copy">
          <strong>Airboss Aviation Group, Inc.</strong>
          <br />
          <?php echo $address1; ?>
          <br />
          <?php echo $address2; ?>
          <br />
          <a href="mailto:<?php echo $email_address; ?>" target="_blank" class="contact_link contact_email"><?php echo $email_address; ?></a>
          <br />
          <a href="tel:<?php echo $phone_number; ?>" class="contact_link"><?echo $phone_number; ?></a>
        </div>
    </div>
  </div>
</div>


<?php require 'footer.php'; ?>
