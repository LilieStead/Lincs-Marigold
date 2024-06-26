<!-- session used to store overlay -->
<?php session_start(); ?>
<!DOCTYPE html>

<?php
include "assets/inc/head.php";
include "assets/inc/header.php";
?>



<body>
    <div>
        <h1 class="title">Our Rooms!</h1>
        <p class="smalltxt" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua. Tristique senectus et netus et. Facilisi cras fermentum
             odio eu feugiat pretium nibh ipsum consequat. </p>
             <!-- div stores all content that belongs to the first room -->
        <div class="flexcontainer">
            <div class="imgdiv">
                <img class="img"src="assets/img/room1.jpg" alt="basic hotel room"> 
                <div class="roomtxt">
                    <h1>Basic rooms</h1>
                    <p class="smalltxt txtleft" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ipsum dolor sit amet consectetur adipiscing elit ut aliquam purus. Sem viverra aliquet eget sit amet tellus cras adipiscing 
                        enim. Id aliquet risus feugiat in. Turpis egestas maecenas pharetra convallis posuere morbi.
                    
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ipsum dolor sit amet consectetur adipiscing elit ut aliquam purus. Sem viverra aliquet eget sit amet tellus cras adipiscing 
                        enim. Id aliquet risus feugiat in. Turpis egestas maecenas pharetra convallis posuere morbi</p>
                </div>
            </div>
            <!-- div stores all content that belongs second room -->
            <div class="imgdiv" id= "imgrightdiv">
                <div class="roomtxt">
                    <h1>Business rooms</h1>
                    <p class="smalltxt txtright" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ipsum dolor sit amet consectetur adipiscing elit ut aliquam purus. Sem viverra aliquet eget sit amet tellus cras adipiscing 
                    enim. Id aliquet risus feugiat in. Turpis egestas maecenas pharetra convallis posuere morbi.
                
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ipsum dolor sit amet consectetur adipiscing elit ut aliquam purus. Sem viverra aliquet eget sit amet tellus cras adipiscing 
                    enim. Id aliquet risus feugiat in. Turpis egestas maecenas pharetra convallis posuere morbi</p>
                </div>
                <img class="img"src="assets/img/room2.jpg" alt="business hotel room">
            </div>
            <!-- div stores all content that belongs third room -->
            <div class="imgdiv">
                <img class="img"src="assets/img/room3.jpg" alt="Luxury hotel room"> 
                <div class="roomtxt">
                    <h1>Luxury rooms</h1>
                    <p class="smalltxt txtleft" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ipsum dolor sit amet consectetur adipiscing elit ut aliquam purus. Sem viverra aliquet eget sit amet tellus cras adipiscing 
                        enim. Id aliquet risus feugiat in. Turpis egestas maecenas pharetra convallis posuere morbi.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ipsum dolor sit amet consectetur adipiscing elit ut aliquam purus. Sem viverra aliquet eget sit amet tellus cras adipiscing 
                        enim. Id aliquet risus feugiat in. Turpis egestas maecenas pharetra convallis posuere morbi</p>
                </div>
            </div>
            
            
        </div>
    </div>
</body>

<?php
include "assets/inc/footer.php";
?>