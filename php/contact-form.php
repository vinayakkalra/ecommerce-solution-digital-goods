<?php
require 'config.php';


if(isset($_POST['name'])){
    
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
  
   
    $name =  mysqli_real_escape_string($conn, $_POST['name']) ;
    $mail =  mysqli_real_escape_string($conn, $_POST['mail']) ;
    $Textarea =  mysqli_real_escape_string($conn, $_POST['Textarea']) ;

    // $notes = "";
    // if(isset($_POST['notes'])){
    //     $notes = $_POST['notes'];
    // }
    // if($Phone == ""){
    //     $Phone = 0;
    // }
    $id = 0;

    $result = mysqli_query($conn, "SELECT max(id) FROM `contactus`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;

    $query = "INSERT INTO `contactus` (ID, `Name`, `Phone`, `Email`, `MSG` , `time`, `from_ip`, `from_browser` ) VALUES ($id, '$name', '$Phone', '$mail','$Textarea', '$date_now', '$from_ip', '$from_browser' )";

   
    if(!$result = $conn->query($query)){
        die('Error occured [' . $conn->error . ']');

        }
        else{
            $data['status'] = 201;
            echo json_encode($data);
 
        
        }
    }
        ?>
  

   