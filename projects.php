<?php require 'header.php'; ?>


<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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
.scroll_link {
  color: <?php echo $color_base_dark; ?> !important;
}
.project_epoch {
  color: <?php echo $color_base_dark; ?>;
}
.scroll_link:hover {
  cursor: pointer;
  color: <?php echo $color_base_light; ?> !important;
  transition: color 0.5s;
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
.project_name {
  color: <?php echo $color_base_dark; ?>;
}
.project_
.project_container img {
  width: 100%;
}
.modal-header > .close {
  position: absolute;
  right: 1em;
}
.modal-header > .modal-title {
  margin-right: 1em;
}
.gallery_container {
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}
.modal_image {
  width: 100%;
  height: auto;
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
  .col-no-padding {
    padding: 0px;
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
    $('html, body').animate({
      scrollTop: $('#' + this_section).offset().top - 100,
    }, 500, 'linear');
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
        "Sonic Jet",
        "Advanced Unmanned"
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
              <!--<a class="col-10 project_container" href="project.php?aircraft=<?php #echo $project_shortcut; ?>">-->
              <a class="col-10 project_container" href="#" data-toggle="modal" data-target="#modal_<?php echo $project_shortcut; ?>">
                <div class="project_image_container">
                  <div class="project_image" style="background-image:url(img/project/<?php echo $project_shortcut; ?>.jpg)"></div>
                </div>
                <div class="project_name"><?php echo $project; ?></div>
              </a>
              <div class="col-1 col-no-padding"></div>
            </div>
          </div>

          <div id="modal_<?php echo $project_shortcut; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><?php echo $project; ?></h4>
                </div>
                <div class="modal-body">
                  <div class="gallery_container">

                      <img id="modal_first_image_<?php echo $project_shortcut; ?>" class="modal_image" src="img/project/<?php echo $project_shortcut; ?>.jpg" />
                      <img class="modal_image" src="img/project/<?php echo $project_shortcut; ?>.jpg" />

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

        <?php } ?>
      </div>
    </div>
    <div class="d-none d-md-block col-md-1"></div>
  <?php } ?>
  <script>
  $(document).ready(function(){
  //$(window).on('shown.bs.modal', function() {
    $('.gallery_container').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      adaptiveHeight: false,
      autoplay: false,
      autoplaySpeed: 2000
    });
  });
  $('.project_container').on('click touch', function(e) {
    console.log('modal opened');
    var load_carousel = function() {
      console.log('load_carousel');
      $('.gallery_container').slick("setPosition");
    };
    setTimeout(load_carousel, 3000);
  });
  </script>

  <style>
  #scroll_to_top {
    font-size: 3em;
    position: fixed;
    bottom: 1em;
    right: 1em;
    z-index: 1000;
    color: <?php echo $color_base_dark; ?>;
    text-shadow: 0px 0px 6px <?php echo $color_light; ?>;
    cursor: pointer;
    display: none;
  }
  </style>
  <div id="scroll_to_top">
    <i class="fas fa-chevron-circle-up"></i>
  </div>
  <script>
  $('#scroll_to_top').click(function() {
    $('html, body').animate({
      scrollTop: 0,
    }, 500, 'linear');
  });
  window.onload = (function(){
    $(window).scroll(function () {
      // scroll to top only appears after the user has scrolled down some amount
      if ( $(window).scrollTop() > 100 ) {
        $('#scroll_to_top').show();
      } else {
        $('#scroll_to_top').hide();
      }
    });
  });
  </script>

</div>


<?php require 'footer.php'; ?>
