<?php require 'header.php'; ?>


<?php
  $press = array();
  $myfile = fopen("Press Links.txt", "r");
  if ($myfile) {
    $start_reading = false;
    $get_date = 0;
    $get_title = false;
    $get_link = false;
    while(!feof($myfile)) {
      $this_line = str_replace("\n", "", fgets($myfile));
      $this_line = str_replace("\r", "", $this_line);
      $this_line = trim($this_line);
      
      if ($start_reading) {
        
        if ($get_link) {
          $this_link = $this_line;
          $get_link = false;
          array_push($press, array($this_title, $this_date, $this_source, $this_link));
        };
        if ($get_source) {
          $this_source = $this_line;
          $get_source = false;
          $get_link = true;
        }
        if ($get_title) {
          $this_title = $this_line;
          $get_title = false;
          $get_source = true;
        };
        if ($get_date == 1) {
          $this_date = $this_line;
          $get_date = 0;
          $get_title = true;
        };
        if ($this_line == '') {
          $get_date++;
        };
        
      };
      
      if (strpos($this_line, '-----') !== false) {
        $start_reading = true;
      };
    };
  };
?>


<style>
.press_item {
  border-bottom: solid 1px <?php echo $color_grey; ?>;
  color: <?php echo $color_base_dark; ?>;
  padding-top: 1em;
  padding-bottom: 1em;
}
.press_item:hover {
  background-color: #EEE;
  text-decoration: none;
  color: <?php echo $color_base_mid_dark; ?>; 
}
.press_source {
  font-style: italic;
  margin-bottom: 1em;
}
.press_info {
  text-align: center !important;
}
.press_title {
  font-size: 1.3em;
  font-weight: bold;
}
.press_date {
  color: <?php echo $color_base_mid_light; ?>;
}

@media (min-width: 576px) {
  
}
@media (min-width: 768px) {
  .press_source {
    margin-bottom: 0em;
  }
  .press_info {
    text-align: left !important;
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
  <h1 class="col-12">Press</h1>
  <div class="page_overview_copy col-12">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur rhoncus lobortis imperdiet. Phasellus pulvinar cursus nisl, et pulvinar eros consequat non. Sed lorem augue, dapibus et nisl sit amet, finibus hendrerit sapien. Suspendisse viverra odio nunc, vitae tincidunt diam blandit eget. Sed pretium metus id purus ullamcorper auctor. Proin gravida, erat eget fermentum vestibulum.
  </div>
	<?php foreach ($press as $press_item) { ?>
    <a href="<?php echo $press_item[3]; ?>" target="_blank" class="press_item col-12">
      <div class="row">
        <div class="press_source col-12 col-md-3 align-self-center"><?php echo $press_item[2]; ?></div>
        <div class="press_info col-12 col-sm-9 text-left">
          <h3 class="press_title"><?php echo $press_item[0]; ?></h3>
          <div class="press_date"><?php echo $press_item[1]; ?></div>
        </div>
      </div>
    </a>
  <?php } ?>
</div>


<?php require 'footer.php'; ?>
