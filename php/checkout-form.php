<?php

require_once 'config.php';

if(isset($_POST['tablename'])){

    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    $name = mysqli_real_escape_string($conn, $_POST['name']) ;
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $tablename = mysqli_real_escape_string($conn,$_POST['tablename']);
    $productid = mysqli_real_escape_string($conn,$_POST['productid']);
    // 
    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']) ;
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    $state = mysqli_real_escape_string($conn,$_POST['state']);
    $country = mysqli_real_escape_string($conn,$_POST['country']);
    $address = mysqli_real_escape_string($conn,$_POST['address']);
    // 
    $amount = mysqli_real_escape_string($conn,$_POST['amount']);
    // $eventid = $_POST['eventid'];
    // $referral_id = "";
    // if(isset($_POST["referral_id"])){
    //     $referral_id = mysqli_real_escape_string($conn, $_POST["referral_id"]);
    // }
    // if(isset($_POST["coupon_code"])){
    //     $coupon_code = mysqli_real_escape_string($conn, $_POST["coupon_code"]);
    // }
    // $password = mysqli_real_escape_string($conn, $_POST['password']);
    // $hashed_password = hash("sha512", $password);

    if($phone == ""){
        $phone = 0;
    }
    if($amount == ""){
        $amount = 0;
    }

    $id = 0;

    $result = mysqli_query($conn, "SELECT max(id) FROM `orders`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;
    $querysec = "SELECT * FROM `orders` WHERE email ='$email' AND table_name = '$tablename' AND product_id = '$productid' AND status ='paid'";
    if ($resultsec = mysqli_query($conn, $querysec)) {

    if( ! mysqli_num_rows($resultsec) ) {
        // 
        $query = "INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `table_name`, `amount`, `product_id`, `date_now`, `from_ip`, `from_browser`, `status`, `Pincode` ,`city`,`state`, `country`, `address`) VALUES ('$id','$name', '$phone', '$email','$tablename', '$amount','$productid','$date_now','$from_ip', '$from_browser','processing','$pincode','$city','$state','$country', '$address')";
    
        // echo $query;
        
        if($result = mysqli_query($conn, $query))  
        {  
            $data['status'] = 201;
            $data['id'] = $id;
            echo json_encode($data);
        }  
        else  
        {  
            $data['status'] = 601;
            $data['error'] = $conn -> error;
            echo json_encode($data);
        }
        // /
    }else{
        $data['status'] = 701;
        echo json_encode($data);
    }
}

   

        }
    
?>
