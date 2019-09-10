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
.project_link {
  margin-top: 1em;
  display: block;
  text-decoration: underline;
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
.project_first_decoration {
  position: absolute;
  bottom: 0px;
  text-transform: uppercase;
  width: 100%;
  background: linear-gradient(90deg, <?php echo $color_base_dark; ?> 0%, <?php echo $color_base_light; ?> 100%);
  color: white;
  padding-top: 0.2em;
  padding-bottom: 0.2em;
  bottom: 0.5em;
  opacity: 0.7;
  text-shadow: 1px 1px 1px #000000;
  box-shadow: 0px 0px 7px #000000;
}
.modal-body {
  text-align: left;
}
.gallery_empty {
  margin-bottom: 1em;
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
        array("Angel Lyft","AirBoss Aviation designed the Angel Lyft aircraft as a remotely piloted or fully autonomous first-aid vehicle that can access victims in remote or hazardous locations. Replace the first-aid pod with a cargo pod and the Angel Lyft becomes a heavy-lift delivery vehicle! WIth an ability to carry 300 pounds of payload, hover for 40 min., and reach altitudes of 14,500 feet, no other aircraft matches Angel Lyft’s specifications."),
        array("Bear series aircraft","The Bear series of aircraft are safe, fast, and affordable aircraft that deliver true jet performance in a compact single-engine personal jet. Serving a new niche market, this program costs a fraction of its competitors to own and operate while providing higher speed, longer range, and unmatched safety enhancements."),
        array("Hornet","The autonomous vehicle market lacks heavy-lift, fast, inexpensive drones. The Hornet fills this niche as a totally autonomous 4-fan aircraft that lifts over 100 pounds and reaches 50 miles per hour. Imagine life-saving medical delivery or unmatched military applications (Hellfire missile capable from a submersible aircraft!). All detailed engineering for the Hornet is complete."),
        array("PAV / Medevac","The vision of AirBoss Aviation President David Fawcett, the PAV is a personal air vehicle intended for commutes ranging from 25 to 200 miles. Its alternate configuration, the MEDEVAC is an aerial ambulance intended for transporting injured victims from accident site to medical facilities as far away as 200 miles. The vertical takeoff and landing vehicles use four shrouded props and have a payload (crew and cargo) of 660 and 870 pounds, respectively. An open-rotor option is also available."),
        array("PJ-2 High Performance UAV Jet","The PJ-2 is an economical high performance jet with the potential for unmanned aerial flight. With .87 mach speed and head-on stealth characteristics, this aircraft is ideal for military applications. The PJ-2 has been flown as a manned aircraft and is ready for the detailed engineering of unmanned use."),
        array("Regional Cargo Aircraft","Today’s cargo industry is container oriented, creating the need for inexpensive, container-ready aircraft. The Regional Cargo Aircraft carries A-1 and LD-3 containers with broader performance range than competitor aircraft. Its advanced flight deck design allows for single pilot operation in restricted categories, and the aircraft hosts short take off and landing capability. AirBoss has completed preliminary engineering for this program."),
      ),
      "current" => array(
        array("Advanced Unmanned","The Advance Unmanned high altitude UAV is an economical option for high altitude mapping at 55-60 thousand feet. No other high altitude UAV is dedicated for mapping applications, making this a first of its kind. AirBoss Aviation has completed preliminary engineering on this program."),
        array("Coaxial Helicopter","This utility class helicopter is unique in its large cabin area and remarkable lifting ability (2,000 pounds) relative to its small size. The Coaxial Helicopter is particularly easy to fly because it requires no tail rotor. Need more room? The cargo pod is detachable and can be replaced with a personnel pod."),
        array("EmJay 909","The EmJay909 is a military trainer aircraft with virtual training implementation. A pilot can wear a virtual reality headset to experience attack scenarios while piloting the jet. This aircraft is inexpensive to operate and build, but still maintains effective performance specifications."),
        array("Hensley Wolf","The Hensley Wolf is a high performance, fixed-gear, light, twin engine—one of very few on the market. AirBoss Aviation designed this aircraft to have a large cabin for comfort as well as capable of flying long distances."),
        array("RA Aircraft series","AirBoss Aviation designs and builds Rud Aero's RA series of aircraft. These vehicles are built from state-of-the-art carbon fiber and are known for being economical and high-performance. The RA2 and RA3 are currently flying. The RA4 (a four-seater) and RA6 (the first jet in the RA-series) are to be fabricated."),
        array("Saker SA-1","When Saker wanted a high-performance military trainer, AirBoss Aviation stepped up! Conceptual design and preliminary engineering are complete for the first ever trainer with stealth qualities. The design incorporates a minimal vehicle radar signature from the front perspective (through the use of edge alignment) into a supersonic trainer jet."),
        array("Sonic Jet","With a projected speed of Mach 1.6, the Sonic Jet is set to transform the supersonic business market. AirBoss Aviation was contracted to do the conceptual design and the Sonic Jet is currently in the preliminary design phase."),
        array("Subscale Trifan","This VTOL business jet is one-of-a-kind! It takes off vertically using three ducted fans, which then rotate horizontally to allow efficient forward propulsion. AirBoss Aviation was brought in to do a full structural analysis of this unique subscale airframe."),
        array("Xcel","The Xcel is a 21st century high-performance tandem aircraft being developed by Speed Aircraft. The aircraft combines the exceptional range of a cruiser with the capability to perform aerobatic maneuvers with great ease. The project is currently entering the detailed design phase and will be on-the-ramp in less than 2 years."),
      ),
      "selected past" => array(
        array("Lima","<strong>This is AirBoss Aviation's first commissioned program!</strong><br /><br />This sleek airframe sports a uniquely-placed single pusher prop behind the tail. The position of the prop combined with the prominent cockpit gives the vehicle a striking profile! Check out these watercolor depictions of the Lima to see AirBoss Aviation's first bold steps into the aviation world."),
        array("ATG Javelin","AirBoss Aviation designed and built the ATG Javelin, a small high-speed personal jet and military trainer. Sporting two Williams FJ33 turbofan engines, the Javelin's speed is like nothing else in its weight class."),
        array("Epic Aircraft","A true 350 knot airplane, the Epic Aircraft is the fastest single engine turbo prop in aviation. In addition to designing the fuselage, wing and tail, AirBoss Aviation also performed structural analysis of the wing, including flutter analysis."),
        array("Fourwinds Aircraft","The Fourwinds Aircraft is a high wing aircraft unlike anything on the market: no other four place plane has four doors! The design of this fixed gear plane by AirBoss produced a plane faster than most retractable gear planes."),
        array("Freedom Aviation","This vehicle was commissioned to change the way recreational aircraft experience the world. And AirBoss Aviation delivered in spades with Freedom Aviation, a reasonably priced aircraft that redefined what it means to be amphibious."),
        array("Heavy Lifter","Working with Yakovlev Aircraft and Platforms International on the Iridium project, AirBoss Aviation completed the preliminary engineering for the Heavy Lifter, an aircraft capable of lifting and then aerially launching a 16 ton satellite into low-Earth orbit (LEO). Covered in Aviation Week, the Heavy Lifter is also capable of launching a 4 ton manned shuttle system as well."),
        array("ION Aircraft","AirBoss Aviation designed and engineering this Light Sport Aircraft (LSA) compliant vehicle to be unique in shape and aesthetics. The plane can be purchased as a kit to be built from the ground up, or manufactured and ready to fly."),
        array("Jet Link Communications","AirBoss Aviation was involved in modifying a Cessna CitationJet/M2 (Model 525) airframe to serve as flying relay station. The effective 43,000 foot high cell tower provides cell phone service in an 80 mile radius of the aircraft. AirBoss Aviation completed preliminary engineering and worked in collaboration with Motorola to outfit the aircraft with the appropriate electronics and antenna."),
        array("JPL Ecotality","AirBoss Aviation acquired a hydrogen-powered bus for Ecotality, and then designed and built a first-of-its-kind hydrogen generator and storage system, the Hydratus. Working with NASA's JPL and the California Institute of Technology, we developed a system to store hydrogen in magnesium/magensium hydride, and then generate hydrogen using salt water. The hydrogen reactor operates at temperature up to 1000&deg;C."),
        array("Maverick Jet","Working for Maverick Jet, AirBoss Aviation designed the LeaderJET, the world's very first Very Light Jet (VLJ). This personal jet kit plane provides heart-stopping performance. Look up! LeaderJETs are still flying in the skies around you."),
        array("Mini-Widebody","AirBoss Aviation designed the Mini-Widebody, a 7 passenger aircraft. This very light jet makes use of twin Williams FJ-33-4 turbofans."),
        array("MX-2","One of Airboss Aviation's first projects, the MX-2 is a tandem two seat carbon fiber fixed gear airplane. This plane, available as a kit, excited the market due to its maneuverability and speed. The ability to pull plus or minus 12g makes the MX-2 ideal for aerobatic maneuvers."),
        array("MX Red Bull Racer","AirBoss Aviation designed and engineered the single-engine Red Bull Racer. Our engineering was used to define the structural requirements of subsequent planes because the Racer was the only plane on the race course that could fly through pylons without getting structural damage."),
        array("Proteus","Challenge & Space contracted with AirBoss Aviation to design and develop a four seat suborbital space vehicle, the Proteus. The vehicle would serve as a testbed for the Chase 10, the world's first methane regenerative rocket engine."),
        array("Regional SeaPlane","AirBoss Aviation designed this 19 passenger fixed wing amphibious aircraft, sporting twin turboprops. The design was optimized to service the European coast, both North and South."),
        array("Sea Dragon","AirBoss Aviation designed this amphibious fixed wing aircraft with retractable gear to be used by the Australian Coast Guard. Preliminary design was completed and detailed structural analysis was started."),
        array("Sonic Light Business Jet","AirBoss Aviation designed a trans-sonic light business jet. On top of what would have been one of the two fastest business jets at the time, our design would have been affordable. Preliminary design was completed, including computational fluid dynamics, and detailed design was started."),
        array("Space Trainer Rocket-Jet","The Space Trainer Rocket-Jet is capable of reaching a blistering speed of Mach 1.6 and an altitude of 65,000 feet. AirBoss Aviation designed this trainer for civilians that are paying for a ride to space."),
        array("Stalwart SA-1","AirBoss Aviation designed and engineered a cargo airplane capable of transporting three-axle army vehicles for Stalwart, something no other aircraft could do as efficiently. These large army vehicles required significant cargo space, which was accomplished through the use of a blended wing body (BWB) design."),
        array("The Orion GT","AirBoss Aviation designed this six-place turbo prop canard airplane for Rud Aero. This kit plane had the largest cabin of any canard on the market, and was the only turbo prop canard as well."),
        array("ViperJet","Chances are that you already know the AirBoss-designed ViperJet. This tandem two-place jet sports swept wings and is known for being one of the highest quality kit jets on the market. You're just as likely to spot a full-sized ViperJet flying through the skies, as you are a scaled RC model of this iconic aircraft."),
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
                  <div class="project_image" style="background-image:url(img/project/main/<?php echo $project_shortcut; ?>_web.jpg?v=16)">
                    <?php if ($project_shortcut == 'lima') { ?>
                      <div class="project_first_decoration">	&#9830; Our First Project	&#9830;</div>
                    <?php } ?>
                  </div>
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
                    $img_list = glob('img/project/' . $project_shortcut . '/' . $project_shortcut . '*_web.jpg');
                  ?>
                  <div class="gallery_container_style<?php if (count($img_list) > 1) { echo " gallery_container"; } else { echo " gallery_empty"; } ?>">
                    <?php foreach($img_list as $img) { ?>
                      <img class="modal_image" data-src="<?php echo $img; ?>" />
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
    $($(this).attr('data-target') + ' .modal_image').each(function() {
      this.src = this.getAttribute('data-src');
    });
    var track = $( $(this).attr('data-target') + ' .slick-track' );
    var load_carousel = function() {
      if (track.height() > 0) {
        $('.gallery_container').slick("setPosition");
        clearInterval( check_carousel_loaded );
      }
    };
    if (typeof track.height() !== 'undefined') {
      var check_carousel_loaded = setInterval(load_carousel, 50);
    };
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
