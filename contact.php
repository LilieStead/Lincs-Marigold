<!DOCTYPE html>
<?php

include "assets/inc/head.php";
include "assets/inc/header.php";

?>

<body>
    <!-- Form to send users querys -->
    <div class="center-contents">
        <h1>Contact us here!</h1>
        <div id="contactdiv">
            <form action="assets/proc/sendformprocess.php" method="post">
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
        </div>
        <p>alliteratively call: 07526292791</p>
    </div>
</body>

<?php
include "assets/inc/footer.php";
?>