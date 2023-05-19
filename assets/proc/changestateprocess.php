<?php
// starts session 
session_start();
// check overlay colour has been changed 
$_SESSION['overlaycolour'] = $_POST['colour'];
// refresh page

header('location: ' .$_SERVER['HTTP_REFERER']);
?>

