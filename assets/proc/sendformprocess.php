<?php
include "../inc/databaseconnection.php";
// takes all the user inputs from contact page 
$title = $_POST['title'];
$name = $_POST['name'];
$email = $_POST['email'];
$query = $_POST['query'];


// SQL used to inset data into database
$sqlmakequery =  "INSERT INTO tbl_query (query_title, query_name, query_email, query_description)
VALUES ('$title', '$name', '$email', '$query')";
// sends data to database
$rsmakequery = mysqli_query($connection, $sqlmakequery);
header("location: ../../querysent.php");