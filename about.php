<?php require 'header.php'; ?>


<style>
.about_overall_copy {
  padding-bottom: 1em;
}
.person_container {
  margin-bottom: 3em;
  padding-left: 1em;
  padding-right: 1em;
}
.person_container .row {
  margin: 0px;
}
.person_containerA {
  margin-bottom: 1em !important;
}
.person_info {
  padding-left: 0.5em;
  padding-right: 0.5em;
  background-color: <?php echo $color_base_dark; ?>;
}
.person_name {
  font-size: 1.4em;
  line-height: 1.4em;
  color: <?php echo $color_light; ?>;
}
.person_title {
  font-size: 1.2em;
  line-height: 1.2em;
  color: <?php echo $color_base_light; ?>;
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
  color: <?php echo $color_base_dark; ?>
}
@media (min-width: 576px) {

}
@media (min-width: 768px) {
  .person_info {
    padding-left: 1em;
    padding-right: 1em;
  }
  .person_name {
    font-size: 1.5em;
    line-height: 1.5em;
  }
  .person_title {
    font-size: 1.5em;
    line-height: 1.5em;
  }
}
@media (min-width: 992px) {

}
@media (min-width: 1200px) {

}
@media (min-width: 1600px) {

}
</style>
<div class="row text-center">
  <h1 class="col-12">About</h1>

  <div class="about_overall_copy col-12">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus lobortis imperdiet. Phasellus pulvinar cursus nisl, et pulvinar eros consequat non. Sed lorem augue, dapibus et nisl sit amet, finibus hendrerit sapien. Suspendisse viverra odio nunc, vitae tincidunt diam blandit eget. Sed pretium metus id purus ullamcorper auctor. Proin gravida, erat eget fermentum vestibulum.
  </div>


  <?php
  $people = array(
    array("Dave Fawcett", "dave_fawcett", "President",
          "Dave Fawcett founded AirBoss Aviation over 20 years ago with the vision for a one-stop design firm in the aerospace industry. He has served as configuration designer for aircraft ranging from light sport and high performance jets to space craft. Dave has managed the full design and build of 27 aircraft programs, including the first very light jet (VLJ), the Maverick TwinJet. At AirBoss, he manages day-to-day operations and plays a direct role in aircraft conceptual design and project management. Dave has a Bachelor of Science in Biophysics and Biochemistry with a minor in aeronautical engineering from Ohio State University."),
    array("William Something", "len_fox", "Chief Engineer",
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus lobortis imperdiet. Phasellus pulvinar cursus nisl, et pulvinar eros consequat non. Sed lorem augue, dapibus et nisl sit amet, finibus hendrerit sapien. Suspendisse viverra odio nunc, vitae tincidunt diam blandit eget. Sed pretium metus id purus ullamcorper auctor. Proin gravida, erat eget fermentum vestibulum."),
    array("Dave Levine, EA, MGFC, CTRS", "dave_levine", "Chief Financial Officer",
          "Dave came out of government service and opened a Business & Tax Consulting firm based in Reno, NV. As an Enrolled Agent, he represented individuals and businesses before the Internal Revenue Service, as well as the State Taxation Boards in many states. He is the only Master Graduate Fellow in Nevada and one of eight in the United States. Upon his &quot;semi-retirement&quot; he assumed the CFO position with AirBoss Aviation Group, Inc., one of his oldest clients.  "),
    array("Skip Holm", "skip_holm", "Flight Test Director",
          "Skip Holm is a highly decorated retired fighter pilot in the US Air Force. He holds 42 metals including three Distinguished Flying Crosses and 25 Air Combat Metals. Skip currently holds the world record for combat hours--1,170 hours total. As a test pilot, Skip served with the famed “Lockheed Skunk Works” in the capacity of engineering test pilot. He was also a test pilot on the F-117, F-22, U-2R, and TR-1 programs, as well as numerous classified programs. Skip is considered one of the world’s foremost experts in system evaluation. He received a Bachelor of Science degree in Aeronautical Engineering from North Dakota State and a Masters of Science degree in Aeronautical Engineering/System Management from the University of Southern California."),
    array("Wayne Pereanu, PhD", "wayne_pereanu", "Chief Technology Officer",
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus lobortis imperdiet. Phasellus pulvinar cursus nisl, et pulvinar eros consequat non. Sed lorem augue, dapibus et nisl sit amet, finibus hendrerit sapien. Suspendisse viverra odio nunc, vitae tincidunt diam blandit eget. Sed pretium metus id purus ullamcorper auctor. Proin gravida, erat eget fermentum vestibulum."),
    array("Shana Spindler, PhD", "shana_spindler","Chief Business Development Officer",
          "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus lobortis imperdiet. Phasellus pulvinar cursus nisl, et pulvinar eros consequat non. Sed lorem augue, dapibus et nisl sit amet, finibus hendrerit sapien. Suspendisse viverra odio nunc, vitae tincidunt diam blandit eget. Sed pretium metus id purus ullamcorper auctor. Proin gravida, erat eget fermentum vestibulum."),
  );
  ?>


  <?php foreach ($people as $person) { ?>
    <div class="person_container col-12 col-md-6">
      <div class="person_containerA row d-table text-left">
        <div class="person_image">
          <img src="img/about_<?php echo $person[1]; ?>.jpg" />
        </div>
        <div class="person_info d-table-cell align-middle">
          <div class="person_name">
            <?php echo $person[0]; ?>
          </div>
          <div class="person_title">
            <?php echo $person[2]; ?>
          </div>
        </div>
      </div>
      <div class="person_containerB row">
        <div class="person_copy col-12">
          <?php echo $person[3]; ?>
        </div>
      </div>
    </div>
  <?php } ?>
</div>


<?php require 'footer.php'; ?>
