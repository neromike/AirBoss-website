<?php require 'header.php'; ?>


<style>
.contact_title {
  background-image: url(img/contact/contact_back.jpg);
  background-position: center bottom;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 200px;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
}
.contact_title h1 {
  margin-top: 0.5em;
}
.contact_subtitle {
  font-style: italic;
  position: absolute;
  bottom: 0.8em;
  left: 0.8em;
  color: <?php echo $color_light; ?>;
  font-size: 1.4em;
}
.contact_subpage {
  background-color: <?php echo $color_grey; ?>;
  padding-top: 2em;
  padding-bottom: 2em;
}
.contact_about_container {
  font-size: 1.2em;
}
.contact_form_container {
  margin-top: 1em;
  padding-top: 1em;
  border-top: solid 1px grey;
  margin-bottom: 1em;
  padding-bottom: 1em;
  border-bottom: solid 1px grey;
}
.contact_address_container {
  font-size: 1.2em;
}

.contactus_container {
  padding-bottom: 0px !important;
}
.contactus_container .button {
  margin-bottom: 0px !important;
}

@media (min-width: 576px) {
  .contact_title {
    min-height: 300px;
  }
}
@media (min-width: 768px) {
  .contact_title {
    min-height: 400px;
  }
  .contact_about_container {
    font-size: 1em;
  }
  .contact_form_container {
    margin-top: 0em;
    padding-top: 0em;
    border-top: none;
    margin-bottom: 0em;
    padding-bottom: 0em;
    border-bottom: none;
  }
  .contact_address_container {
    font-size: 1em;
  }
}
@media (min-width: 992px) {
  .contact_about_container {
    font-size: 1.2em;
  }
  .contact_address_container {
    font-size: 1.2em;
  }
}
@media (min-width: 1200px) {

}
@media (min-width: 1600px) {

}
</style>
<div class="row text-center">
    <div class="col-12 contact_title">
      <h1 class="col-12">Contact</h1>
      <div class="contact_subtitle">We can make anything fly</div>
    </div>
    <div class="contact_subpage col-12">
      <div class="row">

        <div class="col-12 col-md-4 align-self-center contact_about_container">
          <strong>Airboss Aviation Group, Inc.</strong>
          <br />
          <?php echo $address1; ?>
          <br />
          <?php echo $address2; ?>
          <br /><br />
          <a class="contact_email" href="mailto:<?php echo "info@airbossaviation" . $email_address_obfuscate . ".com";?>"></a>
          <br />
          <a href="tel:<?php echo $phone_number; ?>" class="contact_link"><?echo $phone_number; ?></a>
        </div>

        <div class="col-12 col-md-4 align-self-center contact_form_container">
          <?php require 'contact_form.php'; ?>
        </div>

        <div class="col-12 col-md-4 align-self-center contact_address_container">
          <a class="contact_email contact_email_linkonly" href="mailto:<?php echo "dave@airbossaviation" . $email_address_obfuscate . ".com";?>">David Fawcett, President</a>
          <br />
          <a class="contact_email contact_email_linkonly" href="mailto:<?php echo "sholm@airbossaviation" . $email_address_obfuscate . ".com"; ?>">Skip Holm, Flight Test Director</a>
          <br />
          <a class="contact_email contact_email_linkonly" href="mailto:<?php echo "wspereanu@airbossaviation" . $email_address_obfuscate . ".com"; ?>">Wayne Pereanu, CTO</a>
          <br />
          <a class="contact_email contact_email_linkonly" href="mailto:<?php echo "srsprindler@airbossaviation" . $email_address_obfuscate . ".com"; ?>">Shana Spindler, CBDO</a>
          <br />
          <a class="contact_email contact_email_linkonly" href="mailto:<?php echo "dmelvine@airbossaviation" . $email_address_obfuscate . ".com"; ?>">David Levine, CFO</a>
        </div>

    </div>
  </div>
</div>


<?php require 'footer.php'; ?>
