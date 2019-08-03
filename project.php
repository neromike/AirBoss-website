<?php require 'header.php'; ?>


<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<?php
if (isset($_GET['aircraft'])) {
  $this_aircraft = $_GET['aircraft'];
  $myfile = fopen("project/" . $this_aircraft . ".php", "r");

  if ($myfile) {
    $program_title = str_replace("\n", "", fgets($myfile));
    $program_subtitle = str_replace("\n", "", fgets($myfile));

    $spec_done = false;
    $program_specs = '';
    while (! $spec_done) {
      $this_line = str_replace("\n", "", fgets($myfile));
      if ( ($this_line == '-----') || (feof($myfile)) ) {
        $spec_done = true;
      } else {
        $program_specs .= $this_line . "<br />";
      }
    }

    $img_done = false;
    $img_list = array();
    while (! $img_done) {
      $this_line = str_replace("\n", "", fgets($myfile));
      if ( ($this_line == '-----') || (feof($myfile))) {
        $img_done = true;
      } else {
        array_push($img_list, $this_line);
      }
    }
  }
} else {
  $myfile = false;
}

if (! $myfile) {
  echo '<script type="text/javascript">window.location = "projects.php?error=missing_project";</script>';
}
?>
<style>
.program_info {
  border: solid 1px red;
}
.program_title {
  font-size: 2em;
  font-weight: bold;
}
.program_subtitle {

}
.program_image {
  border: solid 1px green;
}
</style>
<div class="row text-center">
  <div class="col-4 program_info">
    <h1 class="program_title"><?php echo $program_title; ?></h1>
    <div class="program_subtitle"><?php echo $program_subtitle; ?></div>
    <div class="program_specs"><?php echo $program_specs; ?></div>
  </div>
  <div class="col-8 program_image">
    IMAGE CAROUSEL HERE
    <br />
    <div class="gallery_container">
      <?php
        foreach ($img_list as $img) {
          echo "<div><img class='gallery_image' src='img/project/" . $img . "' /></div>";
        }
      ?>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $('.gallery_container').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    adaptiveHeight: true,
    autoplay: true,
    autoplaySpeed: 2000
  });
});
</script>


<?php require 'footer.php'; ?>
