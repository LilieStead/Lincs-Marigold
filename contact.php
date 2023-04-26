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
                    <div id="titlediv" class="section">
                        <label for="title">Title</label>
                        <select name="title" id="title" class="halfspace">
                            <option selected value="..." hidden>...</option>
                            <option value="Mr">Mr</option>
                            <option value="Miss">Miss</option>
                            <option value="Mrs">Mrs</option>
                        </select>
                        <?php include "assets/inc/validationicons.php";?>
                    </div>
                    <div id="namediv" class="section">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="halfspace" maxlength="30">
                        <?php include "assets/inc/validationicons.php";?>
                    </div>
                </div>
                <div id="emaildiv" class="section">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" maxlength="50">
                    <?php include "assets/inc/validationicons.php";?>
                </div>
                <div class="querydiv" class="section">
                    <label for="query">Query</label>
                    <!-- Each key press will get value of each character in the text area  -->
                    <textarea name="query" id="query"  
                    maxlength="255" onkeyup="charcountupdate(this.value)"></textarea> 
                    <?php include "assets/inc/validationicons.php";?>
                </div>
                <input id ="formbutton" onclick="validation(), tareaVal();" type="submit">
                <!-- Outputs used characters  -->
                <span id=counter></span>
            </form>              
            <p class="smalltxt"><i class="fa fa-phone" aria-hidden="true"></i> alternatively call: 07526292791 </p>
            
        </div>
    </div>
    <!-- onsubmit="tareaVal()" -->
    <!-- onsubmit="return validation();, return tareaVal();" -->
    <?php
    include "assets/inc/footer.php";
    ?>
    
</body>



<!-- Finds java script to count charters in text area-->
<script src="assets/js/wordcounter255.js"></script>

<script>
    function validation() {
        var valid = true;
        var titlesection = document.querySelector('#titlediv');
        var namesection = document.querySelector('#namediv');
        var emailsection = document.querySelector('#emaildiv');
        var querysection = document.querySelector('#querydiv');

        var titleerror = null;
        var title = titlesection.querySelector('select').value;
        if (title =="...") {
            titleerror = "You must select a title";
        }

        showerror(titlesection, titleerror);
        if (titleerror != null){
            valid = false;
        }

        var nameerror = null;
        var name = namesection.querySelector('input').value;
        if (name == ""){
            nameerror = "You must enter your name";
        }
        showerror(namesection, nameerror);
        if (nameerror != null){
            valid = false;
        }

        var emailerror = null; 
        var email = emailsection.querySelector('input').value;
        if(email =="") {
            emailerror = "You must enter a email";
        }
        showerror(emailsection, emailerror);
        if (emailerror != null){
            valid = false;
        }
        
        // var queryerror = null;
        // var query = querysection.getElementById('query').required = true;
        // if (query ==""){
        //     queryerror = "You need to enter a query";
        // } else if (query.length < 20){
        //     queryerror = "Your query needs to be longer than 20 characters";
        // }

        // showerror(querysection, queryerror);
        // if (queryerror != null){
        //     valid = false
        // }

        






        return valid;
    }

    function tareaVal() {
        document.getElementById("query").required = true;
    }

    function showerror(section, error){
        if (error != null){
            section.querySelector('p').innerHTML = error;
            section.classList = 'section error';
            return false;
        } else {
            section.classList = 'section success';
        }
    }

</script>