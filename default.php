<!-- session used to store overlay -->
<?php session_start(); ?>
<!DOCTYPE html>
<?php
include "assets/inc/head.php";
include "assets/inc/header.php";
?>

<body>
    <div id= "defaultimg">
        <!-- stores image in div-->
        <div id="imgoverlay"></div>
            <img id= "homeimg" src="assets/img/defaultimg1.jpg" alt="Hotel Bar">
        <h1 id= "imgtext"> Welcome to Lincs Marigold Hotel & Spa</h1>
    </div>
    <!-- other content stored  below  -->
    <div class ="centercontents">
        <div id= "aboutinfo" >
            <h1>About us</h1>
            <p class="smalltxt">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Quis blandit turpis cursus in hac habitasse. Commodo odio aenean sed adipiscing. Amet
                consectetur adipiscing elit ut aliquam purus sit. Id neque aliquam vestibulum morbi bl
                andit cursus risus. Id semper risus in hendrerit gravida rutrum quisque non. Parturient mo
                ntes nascetur ridiculus mus mauris vitae. Sed cras ornare arcu dui vivamus arcu. Et mag
                nis dis parturient montes nascetur ridiculus mus mauris vitae. Leo urna molestie at elem
                ntum eu.</p>
        </div>
    </div>
</body>

<?php
include "assets/inc/footer.php";
?>
