<!DOCTYPE html>
<?php
include "assets/inc/head.php";
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
                            <!-- selected as default  -->
                            <option selected value="..." hidden>...</option>
                            <option value="Mr">Mr</option>
                            <option value="Miss">Miss</option>
                            <option value="Mrs">Mrs</option>
                        </select>
                        <!-- shows errors -->
                        <div class = "error">
                            <p id = "titleerror"></p>
                        </div>
                    </div>
                    <div id="namediv">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="halfspace" maxlength="30" autocomplete="given-name">
                         <!-- shows errors -->
                        <div class = "error">
                            <p id = "nameerror"></p>
                        </div>
                    </div>
                </div>
                <div id="emaildiv">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" maxlength="50" autocomplete="email">
                     <!-- shows errors -->
                    <div class = "error">
                        <p id= "emailerror"></p>
                    </div>
                </div>
                <div class="querydiv">
                    <label for="query">Query</label>
                    <!-- Each key press will get value of each character in the text area  -->
                    <textarea name="query" id="query"  
                    maxlength="255" onkeyup="charcountupdate(this.value)"></textarea> 
                     <!-- shows errors -->
                    <div class = "error">
                        <p id = "queryerror"></p>
                    </div>
                </div>
                <input id ="formbutton" type="submit">
                <!-- Outputs used characters  -->
                <span id=counter></span>
            </form>              
            <p class="smalltxt"><i class="fa fa-phone" aria-hidden="true"></i> alternatively call: 07526292791 </p>
            
        </div>
    </div>
    <?php
    include "assets/inc/footer.php";
    ?>
    
</body>



<!-- Finds java script to count charters in text area-->
<script src="assets/js/wordcounter255.js"></script>
<!-- validates all inputs -->
<script src="assets/js/validation.js"></script>
