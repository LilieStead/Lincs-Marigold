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
                <label for="title">Title</label>
                <select name="title" id="title">
                    <option value="Mr">Mr</option>
                    <option value="Miss">Miss</option>
                    <option value="Mrs">Mrs</option>
                </select>
                <label for="name">Name</label>
                <input type="text" id="name" name="name">
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
                <label for="query">Query</label>
                <input type="text" id="query" name="query">
                <input type="submit">
            </form>
            <p class="smalltxt"><i class="fa fa-phone" aria-hidden="true"></i> alliteratively call: 07526292791 </p>
        </div>
    </div>
</body>

<?php
include "assets/inc/footer.php";
?>