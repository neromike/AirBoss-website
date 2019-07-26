<?php require 'header.php'; ?>


<style>
.about_overall_copy {
  padding-top: 2em;
  padding-bottom: 2em;
}
.person_container {
  margin-bottom: 3em;
  padding-left: 2em;
  padding-right: 2em;
}
.person_container .row {
  margin: 0px;
}
.person_containerA {
  margin-bottom: 1em !important;
}
.person_info {
  background-color: <?php echo $color_primary5; ?>;
  font-size: 1.5em;
  line-height: 1.2em;
  padding-left: 1em;
}
.person_name {
  color: <?php echo $color_light; ?>;
}
.person_title {
  color: <?php echo $color_primary1; ?>;
}
.person_image {
  width: 120px;
}
.person_image img {
  width: 120px;
  height: 120px;
}
.person_info {
  width: 100%;
}
.person_copy {
  font-size: 0.9em;
}
</style>
<div class="row text-center">
  <h1 class="col-12">About</h1>

  <div class="about_overall_copy col-12">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus lobortis imperdiet. Phasellus pulvinar cursus nisl, et pulvinar eros consequat non. Sed lorem augue, dapibus et nisl sit amet, finibus hendrerit sapien. Suspendisse viverra odio nunc, vitae tincidunt diam blandit eget. Sed pretium metus id purus ullamcorper auctor. Proin gravida, erat eget fermentum vestibulum.
  </div>


<?php
$people = array(
  array("Dave Fawcett", "President"),
  array("Shana Spindler", "Chief Revenue Officer"),
  array("Skip Holm", "Test Pilot"),
  array("Len Fox", "Test Pilot")
);
?>


<?php foreach ($people as $person) { ?>
  <div class="person_container col-12 col-md-6">
    <div class="person_containerA row d-table text-left">
      <div class="person_image">
        <img src="img/about_<?php echo strtolower(str_replace(" ", "_", $person[0])); ?>.jpg" />
      </div>
      <div class="person_info d-table-cell align-middle">
        <div class="person_name">
          <?php echo $person[0]; ?>
        </div>
        <div class="person_title">
          <?php echo $person[1]; ?>
        </div>
      </div>
    </div>
    <div class="person_containerB row">
      <div class="person_copy col-12">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus lobortis imperdiet. Phasellus pulvinar cursus nisl, et pulvinar eros consequat non. Sed lorem augue, dapibus et nisl sit amet, finibus hendrerit sapien. Suspendisse viverra odio nunc, vitae tincidunt diam blandit eget. Sed pretium metus id purus ullamcorper auctor. Proin gravida, erat eget fermentum vestibulum.
      </div>
    </div>
  </div>
<?php } ?>


<?php require 'footer.php'; ?>
