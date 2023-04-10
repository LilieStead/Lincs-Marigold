<!DOCTYPE html>
<?php

include "assets/inc/head.php";
?>
<div id="overlay"></div>
<?php
include "assets/inc/header.php";
?>
<body>
    <!-- Form to send users querys -->
    <div class="center">
        <div id="contactdiv">
            <h1 class="title">Contact us here!</h1>
            <form id="contactform" action="assets/proc/sendformprocess.php" method="post">
                <div class="flexdiv">
                    <div id="titlediv">
                        <label for="title">Title</label>
                        <select name="title" id="title" class="halfspace">
                            <option value="Mr">Mr</option>
                            <option value="Miss">Miss</option>
                            <option value="Mrs">Mrs</option>
                        </select>
                    </div>
                    <div id="namediv">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="halfspace" maxlength="30">
                    </div>
                </div>
                <div id="emaildiv">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" maxlength="50">
                </div>
                <div class="querydiv">
                    <label for="query">Query</label>
                    <!-- Each key press will get value of each character in the text area  -->
                    <textarea name="query" id="query"  
                    maxlength="255" onkeyup="charcountupdate(this.value)"></textarea> 
                </div>
                <!-- Outputs used characters  -->
                <span id=counter></span>
                <input id ="formbutton" type="submit">
            </form>
            <p class="smalltxt"><i class="fa fa-phone" aria-hidden="true"></i> alliteratively call: 07526292791 </p>
        </div>
    </div>
    <?php
    include "assets/inc/footer.php";
    ?>

</body>



<!-- Finds java script to count charters in text area-->
<script src="assets/js/wordcounter255.js"></script>