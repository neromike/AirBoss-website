<?php require 'header.php'; ?>


<style>
.project_container {
  margin-bottom: 1em;
  box-shadow: 0px 2px 1px -1px rgba(0, 0, 0, 0.2), 0px 1px 1px 0px rgba(0, 0, 0, 0.14), 0px 1px 3px 0px rgba(0,0,0,.12);
}
.project_container:hover {
  background-color: #EEEEEE;
}
.col-no-padding {
  padding: 0px;
}
</style>
<div class="row text-center">
  <h1 class="col-12">Projects</h1>
  <div class="page_overview_copy col-12">
    <a href="">Featured</a>
    /
    <a href="">Current</a>
    /
    <a href="">Select Past</a>
  </div>

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
      "featured" => array(
        "PJ-2 High Performance UAV Jet",
        "Regional Cargo Aircraft",
        "Bear series aircraft",
        "PAV / Medevac",
        "Angel Lyft",
        "Hornet"
      ),
      "current" => array(
        "RA Aircraft series",
        "Hensely Wolf",
        "Subscale Trifan",
        "Coaxial Helicopter",
        "WHATEVER WE WANT!",
        "Stalwart SA-1",
        "Freedom Aviation",
        "EmJay 909",
        "Saker-1",
        "Sonic Jet"
      )
    );
  ?>

  <?php foreach( array("featured", "current", "select past") as $project_epoch) { ?>
    <div class="d-none d-md-block col-md-1"></div>
    <div class="col-12 col-md-10">
      <div class="row">
        <hr />
        <h3 class="col-12 project_epoch"><?php echo ucwords($project_epoch); ?></h3>
        <?php foreach ($projects[$project_epoch] as $project) {
          $project_shortcut = strtolower(str_replace(" ", "_", $project));
          ?>
          <div class="col-12 col-md-4">
            <div class="row">
              <div class="col-1 col-no-padding"></div>
              <div class="col-10 project_container">
                <img src="img/project/<?php echo $project_shortcut; ?>" />
                <br />
                <?php echo $project; ?>
              </div>
              <div class="col-1"></div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
    <div class="d-none d-md-block col-md-1"></div>
  <?php } ?>

</div>


<?php require 'footer.php'; ?>
