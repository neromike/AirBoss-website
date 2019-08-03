<?php require 'header.php'; ?>


<?php
if (isset($_GET['error'])) {
  if ($_GET['error'] == 'missing_project') {
    echo '<script>window.alert("Invalid project.");</script>';
  }
}
?>

<style>
.page_overview_copy {
  font-size: 1.3em;
}
.scroll_link:hover {
  text-decoration: underline overline !important;
  color: <?php echo $color_base_dark; ?>;
}
.project_container {
  margin-bottom: 1em;
  box-shadow: 0px 2px 1px -1px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(0, 0, 0, 0.14), 0px 1px 3px 0px rgba(0,0,0,.12);
  padding-left: 0px;
  padding-right: 0px;
  padding-bottom: 1.5em;
  color: <?php echo $color_base_dark; ?>;
  background-color: <?php echo $color_light; ?>;
}
.project_container:hover {
  font-weight: bold;
  text-decoration: none;
  opacity: 1.0;
  background-color: #EEEEEE;
}
.project_image_container {
  position: relative;
  padding-top: 45%;
  width: 100%;
  height: 100%;
}
.project_image {
  background-size: cover;
  background-position: center;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0px;
}
.project_container img {
  width: 100%;
}
.col-no-padding {
  padding: 0px;
}

@media (min-width: 576px) {
  .project_container {
    opacity: 0.9;
  }
  .project_container:hover {
    opacity: 1.0;
  }
}
@media (min-width: 768px) {

}
@media (min-width: 992px) {

}
@media (min-width: 1200px) {

}
@media (min-width: 1600px) {

}
</style>
<div class="row text-center">
  <h1 class="col-12">Projects</h1>
  <div class="page_overview_copy col-12">
    <a class="scroll_link">Featured</a>
    &bull;
    <a class="scroll_link">Current</a>
    &bull;
    <a class="scroll_link">Select Past</a>
  </div>
  <script>
  $('.scroll_link').click(function() {
    var this_section = 'epoch_' + $(this).html().replace(' ', '_').toLowerCase();
    console.log(this_section);
    $('html, body').animate({
      scrollTop: $('#' + this_section).offset().top - 100,
    }, 500, 'linear')
  });
  </script>

  <?php
    $projects = array(
      "select past" => array(
        "Viper Jet",
        "Maverick Jet",
        "Epic Aircraft",
        "Fourwinds Aircraft",
        "ATG Javelin",
        "MX-2",
        "ION Aircraft",
        "Heavy Lifter",
        "Jet Link Communications",
        "Proteus",
        "Turbo Raven",
        "Methane Rocket Engine",
        "Red Bull Racer",
        "The Orion GT"
      ),
      "current" => array(
        "RA Aircraft series",
        "Hensley Wolf",
        "Subscale Trifan",
        "Coaxial Helicopter",
        "WHATEVER WE WANT!",
        "Stalwart SA-1",
        "Freedom Aviation",
        "EmJay 909",
        "Saker SA-1",
        "Sonic Jet"
      ),
      "featured" => array(
        "PJ-2 High Performance UAV Jet",
        "Regional Cargo Aircraft",
        "Bear series aircraft",
        "PAV / Medevac",
        "Angel Lyft",
        "Hornet"
      ),
    );
  ?>

  <?php foreach( array("featured", "current", "select past") as $project_epoch) { ?>
    <div class="d-none d-md-block col-md-1"></div>
    <div class="col-12 col-md-10">
      <div class="row">
        <hr />
        <h3 class="col-12 project_epoch" id="epoch_<?php echo str_replace(" ", "_", $project_epoch); ?>"><?php echo ucwords($project_epoch); ?></h3>
        <?php foreach ($projects[$project_epoch] as $project) {
          $project_shortcut = strtolower(str_replace("/", "", str_replace(" ", "_", $project)));
          ?>
          <div class="col-12 col-md-4 col-no-padding">
            <div class="row">
              <div class="col-1 col-no-padding"></div>
              <a class="col-10 project_container" href="project.php?aircraft=<?php echo $project_shortcut; ?>">
                <div class="project_image_container">
                  <div class="project_image" style="background-image:url(img/project/<?php echo $project_shortcut; ?>.jpg)"></div>
                </div>
                <div class="project_name"><?php echo $project; ?></div>
              </a>
              <div class="col-1 col-no-padding"></div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="d-none d-md-block col-md-1"></div>
  <?php } ?>

</div>


<?php require 'footer.php'; ?>
