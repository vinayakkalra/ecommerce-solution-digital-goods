<?php

  // enter your connection string for database here
  $conn= new mysqli("localhost","root","","test_data_export");
   
  if($conn->connect_error){
      die("connection Failed" .$conn->connect_error);
  }
  
  // razorpay test key
  $rzp_key = "ENTER_YOUR_RAZORPAY_KEY_HERE";

  
?>