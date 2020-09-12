<?php
  $conn= new mysqli("localhost","root","","test_data_export");
  if($conn->connect_error){
      die("connection Failed" .$conn->connect_error);
  }
?>