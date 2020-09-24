<?php
  $conn= new mysqli("localhost","root","","test_data_export");
    // bulkdatabaseprovider
  // $conn= new mysqli("localhost","bulkdatabaseprov","jd9vjmt0jE1r","bulkdatabaseprovider");
  // $conn= new mysqli("localhost","parvinder","pzxuTAmsgGR3","test_content_engine");
  
  if($conn->connect_error){
      die("connection Failed" .$conn->connect_error);
  }


  // razorpay Live Key
  // $rzp_key = "rzp_live_gdsQLzKqW7UKZN";



  // razorpay test key
  $rzp_key = "rzp_test_mAMehuKH8LNrn8";

  
?>