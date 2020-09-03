<?php

// Use this file for the mysql connection. Require this file where ever you know 
// $link = mysqli_connect("", "", "","");
$link = mysqli_connect("localhost", "root", "", "DATABASE_NAME");

if (mysqli_connect_error()){
    die("<script>console.log('There is a problem with mysql connection')</script>");
}


?>
   