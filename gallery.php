<?php require 'header.php'; ?>


<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


<style>
.gallery_container {
  margin-left: auto;
  margin-right: auto;
  width: 80%;
  padding-bottom: 1em;
}
.gallery_image {
  width: 100%;
  height: auto;
}
.slick-prev:before, .slick-next:before {
  color: <?php echo $color_base_dark; ?>;
}
</style>
<?php
$path = 'img/gallery/';
$file_list = array_diff(scandir($path), array('.', '..'));
?>
<div class="row text-center">
  <h1 class="col-12">Gallery</h1>
  <div class="gallery_container">
    <?php
      foreach ($file_list as $file) {
        echo "<div><img class='gallery_image' src='" . $path . $file . "' /></div>";
      }
    ?>
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
