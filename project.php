<?php require 'header.php'; ?>


<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<?php
require_once "vip_project_info.php";

$this_project = isset($_GET['project'])?$_GET['project']:"";

// Check if we have information for the selected project
if (! array_key_exists($this_project, $project_list)) {
  $project_exists = false;
} else {
  $project_exists = true;
};

// Check that the user has permission to view the selected project
if (! $vip_permission[$this_project]) {
  $project_permission = false;
} else {
  $project_permission = true;
  $project_title = $project_list[$this_project]["title"];
  $project_summary = $project_list[$this_project]["summary"];
  $project_stage = $project_list[$this_project]["stage"];
  $project_tech_specs = $project_list[$this_project]["techspecs"];
  $project_image_width = $project_list[$this_project]["image_width"];
};
?>

<a href="projects">&lt; Return to Projects list</a>

<?php if ( (!$project_permission) || (!$project_exists) ) { ?>
  <style>
  #error_message {
    font-size: 1.2em;
    text-align: center;
    font-weight: bold;
    padding-top: 2em;
    padding-bottom: 2em;
  }
  </style>
  <div id="error_message">You do not have permission to view detailed specifications for this project. Please contact <a href="mailto:info@airbossaviation.com">info@airbossaviation.com</a> to request permission.</div>
<?php } else { ?>

  <style>
  .project_info_container {
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
  }
  .project_info_container>div {
    margin-top: 1em;
    margin-bottom: 2em;
  }
  </style>
  <div class="project_info_container">


    <h1><?php echo $project_title; ?></h1>


    <style>
    .gallery_container_style {
      margin-left: auto;
      margin-right: auto;
      max-width: <?php echo $project_image_width; ?>px;
      width: calc(100% - 50px);
    }
    .modal_image {
      width: 100%;
      height: auto;
    }
    .slick-prev:before, .slick-next:before {
      color: <?php echo $color_base_dark; ?>;
    }
    @media (min-width: 576px) {

    }
    @media (min-width: 768px) {

    }
    @media (min-width: 992px) {
      .gallery_container_style {
        //margin-left: 20px;
      }
    }
    @media (min-width: 1200px) {

    }
    @media (min-width: 1600px) {

    }
    </style>
    <div class="project_image_container">
      <?php
        $video_list = glob('img/project/' . $this_project . '/' . $this_project . '*_secret.mp4');
        $img_list = glob('img/project/' . $this_project . '/' . $this_project . '*_secret.jpg');
      ?>
      <div class="gallery_container_style<?php if (count($img_list) > 1) { echo " gallery_container"; } else { echo " gallery_empty"; } ?>">
        <?php foreach($video_list as $video) { ?>
          <video controls><source src="<?php echo $video; ?>" /></video>
        <? } ?>
        <?php foreach($img_list as $img) { ?>
          <img class="modal_image" src="<?php echo $img; ?>" />
        <?php } ?>
      </div>
    </div>
    <script>
    $('.gallery_container').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      adaptiveHeight: false,
      autoplay: false,
      autoplaySpeed: 2000
    });
    </script>


    <div class="project_summary_container">
      <h2>Quick Summary</h2>
      <?php echo $project_summary; ?>
    </div>


    <style>
    .project_stage_icon {
      max-width: 50%;
      margin-left: 25%;
      margin-right: 25%;
      filter: gray;
      -webkit-filter: grayscale(1);
      filter: grayscale(1);
      opacity: 0.4;
      padding: 1em;
      background-color: <?php echo $color_base_light; ?>;
      border-radius: 1em;
      margin-bottom: 4em;
    }
    .stage_status {
      filter: unset;
      -webkit-filter: unset;
      opacity: 1.0;
    }
    .stage_selected {
      /*border: solid 1px <?php #echo $color_base_dark; ?>;*/
    }
    .project_stage_icon img {
      width: 100%;
    }
    .project_stage_icon_title {
      position: absolute;
      bottom: -2.5em;
      width: 100%;
      left: 0px;
      text-align: center;
      padding-left: 0.5em;
      padding-right: 0.5em;
      line-height: 1.2em;
    }
    #project_status_desc {
      margin-top: 0.5em;
    }
    @media (min-width: 576px) {

    }
    @media (min-width: 768px) {
      .project_stage_icon {
        margin-left: 4.16%;
        margin-right: 4.16%;
        margin-bottom: 0em;
      }
      .project_stage_icon_title {
        bottom: 5%;
      }
      .project_stage_icon img {
        padding-bottom: 1em;
      }
      .stage_selected {
        /*border: solid 5px <?php #echo $color_base_dark; ?>;*/
      }
    }
    @media (min-width: 992px) {

    }
    @media (min-width: 1200px) {

    }
    @media (min-width: 1600px) {

    }
    </style>
    <div class="project_stage_container row">
      <h2 class="col-12">Stage of Development</h2>
      <div id="project_stage_icon_conc" class="col-12 col-md-2 project_stage_icon text-center">
        <img src="img/service/services_paper_conceptual-design.png" />
        <div class="project_stage_icon_title">Conceptual Design</div>
      </div>
      <div id="project_stage_icon_engi" class="col-12 col-md-2 project_stage_icon text-center">
        <img src="img/service/services_paper_detailed-engineering.png" />
        <div class="project_stage_icon_title">Detailed Engineering</div>
      </div>
      <div id="project_stage_icon_prot" class="col-12 col-md-2 project_stage_icon text-center">
        <img src="img/service/services_paper_prototype-construction.png" />
        <div class="project_stage_icon_title">Prototype</div>
      </div>
      <div id="project_stage_icon_flig" class="col-12 col-md-2 project_stage_icon text-center">
        <img src="img/service/services_paper_flight-testing.png" />
        <div class="project_stage_icon_title">Flight Testing</div>
      </div>
      <!--
      <div id="project_stage_icon_proj" class="col-12 col-md-2 project_stage_icon text-center">
        <img src="img/service/services_paper_project-management.png" />
        <div class="project_stage_icon_title">Project Management</div>
      </div>
      -->
      <!--<div id="project_status_desc" class="col-12"></div>-->
    </div>
    <script>
    /*
    let curr_stage_selected;
    let stage_description = [];
    stage_description['project_stage_icon_conc'] = 'Conceptual Design and Preliminary Engineering includes development of the initial concepts for the stated mission. Also included is a preliminary design review, including computational fluid dynamics (CFD).';
    stage_description['project_stage_icon_engi'] = 'Detailed Engineering includes finite element analysis (FEA), thermal analysis and the overall structural design (including subsystems). Subsonic, transonic and supersonic flutter analysis to be included as needed.';
    stage_description['project_stage_icon_prot'] = 'Prototype Construction includes the design and production of jigs and fixtures (manual or automated) and all tooling to support prototype construction.';
    stage_description['project_stage_icon_flig'] = 'Flight Testing includes the development and execution of test plans to fully flight test any project.';
    stage_description['project_stage_icon_proj'] = 'AirBoss handles a project early on with task management and critical path analysis. We assist with everything from R&D program planning, financial planning, to identifying part compatibility.';
    */
    <?php //$first_selected = false; ?>
    <?php foreach($project_stage as $this_stage) { ?>
      <?php //if (! $first_selected) { $first_selected = true; ?>
        //curr_stage_selected = 'project_stage_icon_' + '<?php #echo $this_stage; ?>';
        //$('#project_stage_icon_<?php #echo $this_stage; ?>').addClass('stage_selected');
        //$('#project_status_desc').html( stage_description[curr_stage_selected] );
      <?php //} ?>
      $('#project_stage_icon_<?php echo $this_stage; ?>').addClass('stage_status');
    <?php } ?>
    /*
    $('.project_stage_icon').on('click touch', function() {
      if ( (! $(this).hasClass('stage_selected')) && ($(this).hasClass('stage_status')) ) {
        $('#' + curr_stage_selected).removeClass('stage_selected');
        curr_stage_selected = $(this).attr('id');
        $('#' + curr_stage_selected).addClass('stage_selected');
        //$('#project_status_desc').html( stage_description[curr_stage_selected] );
      };
    });
    */
    </script>


    <style>
    .project_tech_specs_container table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 1em;
      margin-bottom: 1em;
    }
    .project_tech_specs_container th {
      font-weight: bold;
      font-size: 1.2em;
      background-color: <?php echo $color_base_dark; ?>;
      color: <?php echo $color_light; ?>;
      text-align: left;
      text-transform: uppercase;
    }
    .project_tech_specs_container tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .project_tech_specs_container td:nth-child(1) {
      text-align: left;
    }
    .project_tech_specs_container td:not(:first-child) {
      text-align: left;
    }
    @media (min-width: 576px) {

    }
    @media (min-width: 768px) {

    }
    @media (min-width: 992px) {
      .project_tech_specs_container table {
        width: 80%;
      }
    }
    @media (min-width: 1200px) {

    }
    @media (min-width: 1600px) {

    }
    </style>
    <div class="project_tech_specs_container">
      <h2>Technical Details</h2>
      <?php echo $project_tech_specs; ?>
    </div>


  </div>
<?php } ?>


<?php require 'footer.php'; ?>
