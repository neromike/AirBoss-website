<?php require 'header.php'; ?>


<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<style>
.page_overview_copy {
  font-size: 1.2em;
  padding-top: 0em;
  padding-bottom: 0em;
}
.scroll_link {
  color: <?php echo $color_base_dark; ?> !important;
}
.project_epoch {
  color: <?php echo $color_base_dark; ?>;
  padding-top: 1em;
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
.gallery_container_style {
  margin-left: auto;
  margin-right: auto;
  width: 80%;
}
.modal_image {
  width: 100%;
  height: auto;
}
.slick-prev:before, .slick-next:before {
  color: <?php echo $color_base_dark; ?>;
}
.modal-body {
  text-align: left;
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
    <a class="scroll_link">Selected Past</a>
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
      "featured" => array(
        array("Angel Lyft","AirBoss Aviation designed the Angel Lyft aircraft as a remotely piloted or fully autonomous first-aid vehicle that can access victims in remote or hazardous locations. WIth an ability to carry 300 pounds of payload, hover for 40 min., and reach altitudes of 14,500 feet, no other aircraft matches Angel Lyft’s specifications."),
        array("Bear series aircraft","The Sport Bear is a safe, fast, and affordable aircraft that delivers true jet performance in a compact single-engine personal jet. Serving a new niche market, this program costs a fraction of its competitors to own and operate while providing higher speed, longer range, and unmatched safety enhancements."),
        array("Hornet","The autonomous vehicle market lacks heavy-lift, fast, inexpensive drones. The Hornet fills this niche as a totally autonomous 4-fan aircraft that lifts over 100 pounds and reaches 50 miles per hour. Imagine life-saving medical delivery or unmatched military applications (Hellfire missile capable!). All detailed engineering for the Hornet is complete."),
        array("PAV / Medevac","The vision of AirBoss Aviation President David Fawcett, the PAV is a personal air vehicle intended for commutes ranging from 25 to 200 miles. Its alternate configuration, the MEDEVAC is an aerial ambulance intended for transporting injured victims from accident site to medical facilities as far away as 200 miles. The vertical takeoff and landing vehicles use four shrouded props and have a payload (crew and cargo) of 660 and 870 pounds, respectively. An open-rotor option is also available."),
        array("PJ-2 High Performance UAV Jet","The PJ-2 is an economical high performance jet with the potential for unmanned aerial flight. With .87 mach speed and head-on stealth characteristics, this aircraft is ideal for military applications. The PJ-2 has been flown as a manned aircraft and is ready for the detailed engineering of unmanned use."),
        array("Regional Cargo Aircraft","Today’s cargo industry is container oriented, creating the need for inexpensive, container-ready aircraft. The Regional Cargo Jet carries A-1 and LD-3 containers with broader performance range than competitor aircraft. Its advanced flight deck design allows for single pilot operation in restricted categories, and the aircraft hosts short take off and landing capability. AirBoss has completed preliminary engineering for this program."),
      ),
      "current" => array(
        array("Advanced Unmanned","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Coaxial Helicopter","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("EmJay 909","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Hensley Wolf","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("RA Aircraft series","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Saker SA-1","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Sonic Jet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Subscale Trifan","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
      ),
      "selected past" => array(
        array("ATG Javelin","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Epic Aircraft","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Fourwinds Aircraft","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Freedom Aviation","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Heavy Lifter","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("ION Aircraft","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Jet Link Communications","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("JPL Ecotality","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Lima","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Maverick Jet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Mini-737","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("MX-2","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Proteus","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Red Bull Extreme Machine","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Red Bull Racer","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Regional SeaPlane","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Sea Dragon","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("Stalwart SA-1","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("The Orion GT","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
        array("ViperJet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis rutrum metus vel elit feugiat tincidunt. Duis pretium turpis velit."),
      ),
    );
  ?>

  <?php foreach( array("featured", "current", "selected past") as $project_epoch) { ?>
    <div class="d-none d-md-block col-md-1"></div>
    <div class="col-12 col-md-10">
      <div class="row">
        <h3 class="col-12 project_epoch" id="epoch_<?php echo str_replace(" ", "_", $project_epoch); ?>"><?php echo ucwords($project_epoch); ?></h3>
        <?php foreach ($projects[$project_epoch] as $project) {
          $project_shortcut = strtolower(str_replace("/", "", str_replace(" ", "_", $project[0])));
          ?>
          <div class="col-12 col-md-4 col-no-padding">
            <div class="row">
              <div class="col-1 col-no-padding"></div>
              <a class="col-10 project_container" href="#" data-toggle="modal" data-target="#modal_<?php echo $project_shortcut; ?>">
                <div class="project_image_container">
                  <div class="project_image" style="background-image:url(img/project/main/<?php echo $project_shortcut; ?>.jpg)"></div>
                </div>
                <div class="project_name"><?php echo $project[0]; ?></div>
              </a>
              <div class="col-1 col-no-padding"></div>
            </div>
          </div>

          <div id="modal_<?php echo $project_shortcut; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><?php echo $project[0]; ?></h4>
                </div>
                <div class="modal-body">
                  <?php
                    $img_list = glob('img/project/' . $project_shortcut . '*.jpg');
                  ?>
                  <div class="gallery_container_style<?php if (count($img_list) > 1) { echo " gallery_container"; } ?>">
                      <?php foreach($img_list as $img) { ?>
                        <img class="modal_image" src="<?php echo $img; ?>" />
                      <?php } ?>
                  </div>
                  <?php echo $project[1]; ?>
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
    var track = $( $(this).attr('data-target') + ' .slick-track' );
    var load_carousel = function() {
      if (track.height() > 0) {
        $('.gallery_container').slick("setPosition");
        clearInterval( check_carousel_loaded );
      }
    };
    var check_carousel_loaded = setInterval(load_carousel, 50);
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
