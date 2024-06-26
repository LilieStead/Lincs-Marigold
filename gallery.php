<!-- session used to store overlay -->
<?php session_start(); ?>
<!DOCTYPE html>

<?php
include "assets/inc/head.php";
include "assets/inc/header.php";
?>

<!-- used to select images -->
<script>
    function changeimage(selectedimg){
      // find element with the id of expandedimage
      var expandimg = document.getElementById("expandedimage");
      // chnage image location of larger image to selected image
      expandimg.src = selectedimg.src;
    }
</script>
<!-- END OF IMAGE SELECT -->

<body>
  <div>
    <h1 class="title">Our gallery</h1>
    <p class="smalltxt">Click on any of the small images bellow to view them above.</p>
    <div class="gallery-container">
      <div id="bigimg">
        <!-- larger image is displayed here  -->
        <img id="expandedimage" src="assets/img/gallery2.jpg">
      </div>
      <!-- all images  -->
    <div id="smallimg">
            <!-- div used on each image to style each image individually -->
            <div class="smallimgdiv">
                <img src="assets/img/gallery2.jpg" class="galleryimgsmall" onclick="changeimage(this)">
            </div>
            <div class="smallimgdiv">
                <img src="assets/img/gallery3.jpg" class="galleryimgsmall" onclick="changeimage(this)">
            </div>
            <div class="smallimgdiv">
                <img src="assets/img/gallery4.jpg" class="galleryimgsmall" onclick="changeimage(this)">
            </div>
            <div class="smallimgdiv">
                <img src="assets/img/gallery5.jpg" class="galleryimgsmall" onclick="changeimage(this)">
            </div>
            <div class="smallimgdiv">
                <img src="assets/img/gallery6.jpg" class="galleryimgsmall" onclick="changeimage(this)">
            </div>
            <div class="smallimgdiv">
                <img src="assets/img/gallery1.jpg" class="galleryimgsmall" onclick="changeimage(this)">
            </div>
    </div>
    </div>
  </div>
</body>

<?php
include "assets/inc/footer.php";
?>