<?php
// starts the session 
session_start();
// deletes the session 
session_destroy();
// refreshes webpage
header('location: ' .$_SERVER['HTTP_REFERER']);
?>