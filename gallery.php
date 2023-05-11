<!DOCTYPE html>

<?php
include "assets/inc/head.php";
include "assets/inc/header.php";
?>


<script>
    function changeimage(selectedimg){
      var expandimg = document.getElementById("expandedimage");

      expandimg.src = selectedimg.src;
    }
</script>






<body>
  <div>
    <h1 class="title">Our gallery</h1>
    <p class="smalltxt">Click on any of the small images bellow to view them above.</p>
    <div class="gallery-container">
      <div id="bigimg">
        <img id="expandedimage" src="assets/img/gallery2.jpg">
      </div>
    <div id="smallimg">
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