<?php
include "../inc/databaseconnection.php";
$title = $_POST['title'];
$name = $_POST['name'];
$email = $_POST['email'];
$query = $_POST['query'];

$sqlmakequery =  "INSERT INTO tbl_query (query_title, query_name, query_email, query_description)
VALUES ('$title', '$name', '$email', '$query')";
$rsmakequery = mysqli_query($connection, $sqlmakequery);
header("location: ../../querysent.php");