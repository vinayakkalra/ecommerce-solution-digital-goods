<?php
session_start();

include("./php/config.php");
if ((array_key_exists("dataexporid", $_SESSION) AND $_SESSION['dataexporid']) OR (array_key_exists("dataexporid", $_COOKIE) AND $_COOKIE['dataexporid'])) {
          
}
else{
    header('location:signup');
}
if(array_key_exists("dataexporid", $_COOKIE) and $_COOKIE['dataexporid']){
        // 
    // getting id of customer
    $customerid =  $_COOKIE['dataexporid'];
    $query = "SELECT * FROM `user` WHERE id = $customerid";
//getting email of customer
        if ($result = mysqli_query($conn, $query)) {
                while( $row = mysqli_fetch_array($result)){
                    $customeremail = $row['email'] ;
                    $customername = $row['name'] ;
                    $customerphone = $row['number'] ;
            }
        }
// 

}
elseif (array_key_exists("dataexporid", $_SESSION) and $_SESSION['dataexporid']) {
        // 
    // getting id of customer
    $customerid =  $_SESSION['dataexporid'];
    $query = "SELECT * FROM `user` WHERE id = $customerid";
//getting email of customer
        if ($result = mysqli_query($conn, $query)) {
                while( $row = mysqli_fetch_array($result)){
                    $customeremail = $row['email'] ;
                    $customername = $row['name'] ;
                    $customerphone = $row['number'] ;
             
            }
        }


}
if(!isset($_GET['Type'] )){
    $type = 1 ;
  }else{
 
     $type = $_GET['Type'];
  }
  if(!isset($_GET['Product'] )){
    $Product = 1 ;
  }else{
 
     $Product = $_GET['Product'];
  }
  $index = $type;
  $query = "SELECT * FROM `product`  WHERE `id` =  $type";
  if ($result = mysqli_query($conn, $query)) {
    if( ! mysqli_num_rows($result) ) {
        header("Location: index");
    } else {
        while( $row = mysqli_fetch_array($result)){
            $table_name = $row['table_name'];
            $product_category = $row['product_category'];
        }
    }
  }
  $query = "SELECT * FROM `$table_name` where `id` =  $Product ";
  if ($result = mysqli_query($conn, $query)) {
      if( ! mysqli_num_rows($result) ) {
          header("Location: index");
      }else{

          while( $row = mysqli_fetch_array($result)){
              $img = $row['image'];
              $category = $row['category'];
              $original_price = $row['original_price'];
              $discounted_price = $row['discounted_price'];
              $full_description = $row['full_description'];
              $available_field = $row['available_field'];
              $records = $row['records'];
              $discount_percentage = $row['discount_percentage'];
          }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Enter a proper page title here -->
    <title>Checkout | BULKDATABASE PROVIDER</title>

    <!-- CSS to include bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css to include style.css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <!-- required meta tags essential for seo and link sharing -->

    <!-- Enter a proper description for the page in the meta description tag -->
    <meta name="description" content="ENTER_PAGE_DESCRIPTION">

    <!-- Enter a keywords for the page in tag -->
    <meta name="Keywords" content="ENTER_KEYWORDS_HERE">

    <!-- Enter Page title -->
    <meta property="og:title" content="ENTER_PAGE_TITLE" />

    <!-- Enter Page URL -->
    <meta property="og:url" content="ENTER_PAGE_URL" />

    <!-- Enter page description -->
    <meta property="og:description" content="ENTER_PAGE_DESCRIPTION">

    <!-- Enter Logo image URL for example : http://cryptonite.finstreet.in/images/cryptonitepost.png -->
    <meta property="og:image" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:secure_url" itemprop="image" content="ENTER_IMAGE_URL" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="315">
    <meta property="og:type" content="website" />

    <!-- Favicon location for example :  images/cropped-Fin-270x270.jpg -->
    <link rel="icon" href="ENTER_FAVICON_LOCATION">

    <!-- Enter Page Specific CSS here. Please make sure all the CSS  -->
    <style>
        /* Example CSS */

        /*.link {
            position: relative;
            display: inline-block;
        }

        .link .tip {
            opacity: 1;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            position: absolute;
            z-index: 1000;
            top: -5px;
            right: 105%;
            transition: 0.5s ease;
            overflow: hidden;
            margin-right: 20px;
        }*/
        .nav-item {
            margin: auto;
            font-weight: normal;
            font-size: 1.6em;
        }

        .nav-item a {
            color: #808080;
        }

        .active {
            color: black !important;
        }

        .nav-item a:hover {
            color: black !important;
        }

        #returnShop:hover {
            background-color: #24436e !important;
        }
        #cartButton:hover {
            box-shadow: inset 0 0 0 100px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>

    <div class="d-none d-lg-block">

        <!-- desktop header start -->
        <div id="header-desktop"></div>
        <!-- desktop header end -->
        <!-- second bar start -->
        <div class="container" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;">
            <div class="container font-Lato-Regular" style="width: 100%;">
                <ul class="nav">
                    <li class="nav-item" style="margin-right: 0px;">
                        <a class="nav-link" >SHOPPING CART<span style="margin-left: 30px;">></span></a>
                    </li>
                    <li class="nav-item" style="margin-left: 0px; margin-right: 0px;">
                        <a class="nav-link active" >CHECKOUT DETAILS <span
                                style="margin-left: 30px;">></span></a>
                    </li>
                    <li class="nav-item" style="margin-left: 0px;">
                        <a class="nav-link disabled" >ORDER COMPLETE </a>
                    </li>
                </ul>
            </div>
            <div>
                <div class="container" style="margin-top: 20px;" class="font-Lato-Regular" style="font-weight: bold;">
                    <!-- <p style="font-size: 16px; font-weight: 400; margin-bottom: 2px;">Returning customer? <a href="login">Click here to login</a></p>
                    <p style="font-size: 16px; font-weight: 400;">Have a coupon?<a href="">Click here to enter your code</a></p> -->
                    <div class="row" style="font-weight: bold;">
                        <div class="col-7" style="border-top:1px solid rgb(218, 211, 211)">
                            <h3 style="font-size: 1.1em; margin-top: 25px;">BILLING DETAILS</h3>
                            <div style="font-size: .9em;">
                                <!-- <form> -->
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="name"  value="<?= $customername ?>" readonly>
                                        </div>
                                        <div class="col">
                                            <label for="exampleInputEmail1">Mobile Number</label>
                                            <input type="text" id="phone" value="<?= $customerphone ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="email"  value="<?= $customeremail ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="text" class="form-control"
                                            id="address" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">City</label>
                                            <input type="text" class="form-control"  id="city"  placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">State</label>
                                            <input type="text" class="form-control" id="state"  placeholder="Enter State">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Country</label>
                                            <input type="text" class="form-control" id="country"  placeholder="Enter Country">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Pincode</label>
                                            <input type="email" class="form-control" id="pincode"  placeholder="Enter Pincode">
                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        <div class="col-5" style="border:2px solid #24436e; height: 50%; padding: 10px; position: sticky; top:0;">
                            <h3 style="font-size: 1.1em; margin-top: 15px;margin-bottom: 15px;">YOUR ORDER</h3>
                            <div class="container" style="font-size: .9em;">
                                <div style="border-bottom: 2px solid #ececec;padding-bottom: 10px;margin-bottom: 10px;display: flex;width: 100%;">
                                    <div class="col-6 p-0">
                                        <h6 class="mb-0" style="font-weight: 800;">PRODUCT</h6>
                                    </div>
                                    <div class="col-6 p-0" style="text-align: right;">
                                        <h6 class="mb-0" style="font-weight: 800;">SUBTOTAL</h6>
                                    </div>
                                </div>
                                <div style="border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-bottom: 10px;display: flex;width: 100%;">
                                    <div class="col-6 p-0">
                                        <p class="mb-0" style="font-weight: 400;color: #666;"> <?=$category?></p>
                                    </div>
                                    <div class="col-6 p-0" style="text-align: right;">
                                        <p class="mb-0" style="font-weight: 600;">₹<?=number_format($discounted_price)?></p>
                                    </div>
                                </div>
                                <div style="border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-bottom: 10px;display: flex;width: 100%;">
                                    <div class="col-6 p-0">
                                        <p class="mb-0" style="font-weight: 600;">Orignal Price</p>
                                    </div>
                                    <div class="col-6 p-0" style="text-align: right;">
                                        <p class="mb-0" style="font-weight: 600;">₹<?=number_format($original_price)?></p>
                                    </div>
                                </div>
                                <div style="border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-bottom: 10px;display: flex;width: 100%;">
                                    <div class="col-6 p-0">
                                        <p class="mb-0" style="font-weight: 600;">Discount</p>
                                    </div>
                                    <div class="col-6 p-0" style="text-align: right;">
                                        <p class="mb-0" style="font-weight: 600;"><?=$discount_percentage?>% OFF</p>
                                    </div>
                                </div>
                                <div style="border-bottom: 2px solid #ececec;padding-bottom: 10px;margin-bottom: 10px;display: flex;width: 100%;">
                                    <div class="col-6 p-0">
                                        <p class="mb-0" style="font-weight: 600;">Total</p>
                                    </div>
                                    <div class="col-6 p-0" style="text-align: right;">
                                        <p class="mb-0" style="font-weight: 600;">₹<?=number_format($discounted_price)?></p>
                                    </div>
                                </div>
                            </div>
                            <div style="font-size: .9em;">
                                <p style="margin-top: 15px; margin-bottom: 0;font-size: .9em;">Credit Card/Debit Card/NetBanking</p>
                                <p style="font-size: .9em;font-weight:normal">Pay securely by Credit or Debit card or Internet Banking through Razorpay.</p>
                                <button type="button" class="btn"
                                style="background-color: #ef561e; color: white;border-radius: 0%; font-weight: bold;font-size: 1em;margin-bottom: 1em;padding: 0 1.2em;min-height: 2.5em;"
                                id="razorpaycheckout">PLACE ORDER</button>
                                <p style="font-size: .9em;font-weight:normal">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="policy">privacy policy.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                
            </div>
        </div>
        <!-- second bar end -->


        <!-- desktop footer start -->
        <div id="footer-desktop"></div>
        <!-- deskop footer end -->
    </div>

    <!-- mobile view -->
    <div class="d-lg-none position-relative">
        <!-- mobile view header start -->
        <div id="header-mob"></div>
        <!-- mobile view header end -->
        <!-- second bar start -->
        <div class="container" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;">
            <div class="container font-Lato-Regular" style="width: 100%;">
                <ul class="nav">
                    <!-- <li class="nav-item" style="margin-right: 0px;">
                        <a class="nav-link" href="#">SHOPPING CART<span style="margin-left: 30px;">></span></a>
                    </li> -->
                    <li class="nav-item" style="margin-left: 0px; margin-right: 0px; margin: auto;">
                        <a class="nav-link active" >CHECKOUT DETAILS</a>
                    </li>
                    <!-- <li class="nav-item" style="margin-left: 0px;">
                        <a class="nav-link disabled" href="#">ORDER COMPLETE </a>
                    </li> -->
                </ul>
            </div>
            <div>
                <div class="container" style="margin-top: 20px;" class="font-Lato-Regular" style="font-weight: bold;">
                    <!-- <p style="font-size: 16px; font-weight: 400; margin-bottom: 2px; text-align: center;">Returning customer? <a href="login">Click here to login</a></p>
                    <p style="font-size: 16px; font-weight: 400; text-align: center;">Have a coupon?<a href="">Click here to enter your code</a></p> -->
                    <div class="row" style="font-weight: bold;">
                        <div class="col-12" style="border-top:1px solid rgb(218, 211, 211)">
                            <h3 style="font-size: 1.1em; margin-top: 25px;">BILLING DETAILS</h3>
                            <div style="font-size: .9em;">
                                <!-- <form> -->
                                    <div class="row">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="namemob"  value="<?= $customername ?>" readonly>
                                        </div>
                                        <div class="col">
                                            <label for="exampleInputEmail1">Mobile Number</label>
                                            <input type="text" id="phonemob" value="<?= $customerphone ?>" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="emailmob"  value="<?= $customeremail ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="text" class="form-control"
                                            id="addressmob" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">City</label>
                                            <input type="text" class="form-control"  id="citymob"  placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">State</label>
                                            <input type="text" class="form-control" id="statemob"  placeholder="Enter State">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Country</label>
                                            <input type="text" class="form-control" id="countrymob"  placeholder="Enter Country">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div class="col">
                                            <label for="exampleInputEmail1">Pincode</label>
                                            <input type="email" class="form-control" id="pincodemob"  placeholder="Enter Pincode">
                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-12" style="border:2px solid #24436e;padding: 10px; margin-top: 20px;">
                            <h3 style="font-size: 1.1em; margin-top: 15px;">YOUR ORDER</h3>
                            <div class="container" style="font-size: .9em;">
                                <div style="border-bottom: 2px solid #ececec;padding-bottom: 10px;margin-bottom: 10px;display: flex;width: 100%;">
                                    <div class="col-6 p-0">
                                        <h6 class="mb-0" style="font-weight: 800;">PRODUCT</h6>
                                    </div>
                                    <div class="col-6 p-0" style="text-align: right;">
                                        <h6 class="mb-0" style="font-weight: 800;">SUBTOTAL</h6>
                                    </div>
                                </div>
                                <div style="border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-bottom: 10px;display: flex;width: 100%;">
                                    <div class="col-6 p-0">
                                        <p class="mb-0" style="font-weight: 400;color: #666;"> <?=$category?></p>
                                    </div>
                                    <div class="col-6 p-0" style="text-align: right;">
                                        <p class="mb-0" style="font-weight: 600;">₹<?=number_format($discounted_price)?></p>
                                    </div>
                                </div>
                                <div style="border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-bottom: 10px;display: flex;width: 100%;">
                                    <div class="col-6 p-0">
                                        <p class="mb-0" style="font-weight: 600;">Orignal Price</p>
                                    </div>
                                    <div class="col-6 p-0" style="text-align: right;">
                                        <p class="mb-0" style="font-weight: 600;">₹<?=number_format($original_price)?></p>
                                    </div>
                                </div>
                                <div style="border-bottom: 1px solid #ececec;padding-bottom: 10px;margin-bottom: 10px;display: flex;width: 100%;">
                                    <div class="col-6 p-0">
                                        <p class="mb-0" style="font-weight: 600;">Discount</p>
                                    </div>
                                    <div class="col-6 p-0" style="text-align: right;">
                                        <p class="mb-0" style="font-weight: 600;"><?=$discount_percentage?>% OFF</p>
                                    </div>
                                </div>
                                <div style="border-bottom: 2px solid #ececec;padding-bottom: 10px;margin-bottom: 10px;display: flex;width: 100%;">
                                    <div class="col-6 p-0">
                                        <p class="mb-0" style="font-weight: 600;">Total</p>
                                    </div>
                                    <div class="col-6 p-0" style="text-align: right;">
                                        <p class="mb-0" style="font-weight: 600;">₹<?=number_format($discounted_price)?></p>
                                    </div>
                                </div>
                            </div>
                            <div style="font-size: .9em;">
                                <p style="margin-top: 15px; margin-bottom: 0;font-size: .9em;">Credit Card/Debit Card/NetBanking</p>
                                <p style="font-size: .9em;font-weight:normal">Pay securely by Credit or Debit card or Internet Banking through Razorpay.</p>
                                <button type="button" class="btn"
                                style="background-color: #ef561e; color: white;border-radius: 0%; font-weight: bold;font-size: 1em;margin-bottom: 1em;padding: 0 1.2em;min-height: 2.5em;"
                                id="razorpaycheckoutmob">PLACE ORDER</button>
                                <p style="font-size: .9em;font-weight:normal">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="policy">privacy policy.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- second bar end -->

        <!-- mobile view footer -->
        <div id="footer-mob"></div>
        <!-- mobile view footer end -->
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script> 
    <script src="js/custom_mobile_header.js"></script>
    <script>

        // Add custom javascript and jquery here
        // including header footer
        $("#header-desktop").load('template/header.php');
        $("#footer-desktop").load('template/footer.php');
        $("#footer-mob").load('template/footerMob.php');
        $("#header-mob").load('template/headerMob.php');
    // validation razorpay 
    $("#razorpaycheckout").on("click", function () {
        var error = "";
        // coupon_code = result.coupon_code;	
        // referral_id = "";
        // check fields
        if($("#country").val() == 0){
            $("#country").css('border-color','red ');
            $("#country").css('border-width','2px ');
            $("#country").attr('placeholder','Required Field');
            error = error + 'country';
        } else{
            $("#country").css('border-color','black');
            $("#Country").css('border-width','1px');
        }
        if($("#address").val() == ""){
            $("#address").css('border-color','red ');
            $("#address").css('border-width','2px' );
            $("#address").attr('placeholder','Required Field');
            error = error + 'address';
        } else{
            $("#address").css('border-color','black');
            $("#address").css('border-width','1px');
        }
        if($("#state").val() == ""){
            $("#state").css('border-color','red ');
            $("#state").css('border-width','2px ');
            $("#state").attr('placeholder','Required Field');
            error = error + 'state';
        } else{
            $("#state").css('border-color','black');
            $("#state").css('border-width','1px');
        }
        if($("#city").val() == ""){
            $("#city").css('border-color','red ');
            $("#city").css('border-width','2px ');
            $("#city").attr('placeholder','Required Field');
            error = error + 'city';
        } else{
            $("#city").css('border-color','black');
            $("#city").css('border-width','1px');
        }
        if($("#pincode").val() == ""){
            $("#pincode").css('border-color','red ');
            $("#pincode").css('border-width','2px ');
            $("#pincode").attr('placeholder','Required Field');
            error = error + 'pincode';
        } else{
            $("#pincode").css('border-color','black');
            $("#pincode").css('border-width','1px');
        }	
        //  

        if (error == "") {
            // ajax call
            $.ajax({
                type: 'POST',
                url: './php/checkout-form.php',
                dataType: "json",
                data: {
                    name: $("#name").val(),
                    email: $("#email").val(),
                    phone: $("#phone").val(),
                    // productName: $("#productname").val(),
                    // eventname: $("#eventname").val(),
                    pincode: $("#pincode").val(),
                    city: $("#city").val(),
                    state: $("#state").val(),
                    country: $("#country").val(),
                    address: $("#address").val(),
                    amount: <?=$discounted_price?>,
                    tablename: "<?=mysqli_real_escape_string($conn,$table_name)?>",
                    productid: <?=$Product?>,
                    // 'referral_id': referral_id,
                    // password: $("#password").val(),
                    // discount: result.discount,
                    // eventid: EVENTNAME,
                    // 'coupon_code': coupon_code,
                },
                success: function (data) {
                    if (data.status == 201) {
                        // alert("hello");
                        window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({'event': 'payment initiated'});
                        // fbq('track', 'InitiateCheckout');
                        // alert("checked out");
                        var order_id = data.id;
                        var options = {
                            "key": "<?=$rzp_key?>",
                            "amount": parseInt(<?=$discounted_price?> * 100), // Amount is in currency subunits. Default currency is INR. Hence, 29935 refers to 29935 paise or INR 299.35.    
                            "currency": "INR",
                            "name": "<?=mysqli_real_escape_string($conn,$category)?>",
                            "description": "<?=mysqli_real_escape_string($conn,$category)?>",
                            "image": "images/head.png",
                            //"order_id": "order_9A33XWu170gUtm",//This is a sample Order ID. Create an Order using Orders API. (https://razorpay.com/docs/payment-gateway/orders/integration/#step-1-create-an-order). Refer the Checkout form table given below    
                            "handler": function (response) {
                                // alert(response.razorpay_payment_id);
                                var razorpay_payment_id = response.razorpay_payment_id;
                                // console.log(response);
                                $.ajax({
                                    type: 'POST',
                                    url: './php/checkout-update-form.php',
                                    dataType: "json",
                                    data: {
                                        id: data.id,
                                        // productName: "Finstreet",
                                        razorpay_payment_id: razorpay_payment_id,
                                        amount: <?=$discounted_price?>,
                                        email: $("#email").val()
                                    },
                                    success: function (data) {
                                        if (data.status == 'ok') {
                                            //window.location = "thankyou.html";
                                            //alert("Your payment has been successful");
                                            // $("#checkout-form").css('display','none');
                                            // $("#order-success").css('display','block');
                                            // $("#order-id").html('#'+ data.id);
                                            // window.scrollTo(0,0);
                                            // alert("Your payment has been successful");
                                                window.location = "order";
                                                // $("#checkout-form").css('display','none');
                                                // $("#order-success").css('display','block');
                                                // $("#order-id").html('#'+ data.id);
                                                // window.scrollTo(0,0);
                                                sessionStorage.useremail = $("#email").val();
                                                window.dataLayer = window.dataLayer || [];
                                                window.dataLayer.push({'event':'payment success'});
                                            
                                        } else {
                                            alert("Your payment unsuccessful please try again later"); 
                                                console.log("error");
                                        }
                                    }
                                });


                            }, "prefill": {
                                "name": $("#name").val(),
                                "email": $("#email").val(),
                                // "contact": $("#phone").val()
                            }, "notes": {
                                // "country": $("#country").val(),
                                // "address": $("#Address").val(),
                                // "state": $("#state").val(),
                                // "postcode": $("#postcode").val(),
                                // "productName": "Crypto-Nite 2020",

                            }, "theme": {
                                "color": "#2e3192"
                            }
                        };

                        var rzp1 = new Razorpay(options);
                        rzp1.open();


                    }else if (data.status == 601) {
                        console.log(data.error);
                        // alert("problem with query");
                    
                    }else if (data.status == 701){
                        alert("Already Purchased");
                        // $(".order-success").css('display', 'block');
                        // $(".checkout-form").css('display', 'none');
                        // $('#exampleModalCenter').modal('show')
                    
                    }else{

                    }
                }
            });
        } else {
            // return true;
        }
    });
     // validation razorpay mobile
     $("#razorpaycheckoutmob").on("click", function () {
        var error = "";
        // coupon_code = result.coupon_code;	
        // referral_id = "";
        // check fields
        if($("#countrymob").val() == 0){
            $("#countrymob").css('border-color','red ');
            $("#countrymob").css('border-width','2px ');
            $("#countrymob").attr('placeholder','Required Field');
            error = error + 'country';
        } else{
            $("#countrymob").css('border-color','black');
            $("#Countrymob").css('border-width','1px');
        }
        if($("#addressmob").val() == ""){
            $("#addressmob").css('border-color','red ');
            $("#addressmob").css('border-width','2px' );
            $("#addressmob").attr('placeholder','Required Field');
            error = error + 'address';
        } else{
            $("#addressmob").css('border-color','black');
            $("#addressmob").css('border-width','1px');
        }
        if($("#statemob").val() == ""){
            $("#statemob").css('border-color','red ');
            $("#statemob").css('border-width','2px ');
            $("#statemob").attr('placeholder','Required Field');
            error = error + 'state';
        } else{
            $("#statemob").css('border-color','black');
            $("#statemob").css('border-width','1px');
        }
        if($("#citymob").val() == ""){
            $("#citymob").css('border-color','red ');
            $("#citymob").css('border-width','2px ');
            $("#citymob").attr('placeholder','Required Field');
            error = error + 'city';
        } else{
            $("#citymob").css('border-color','black');
            $("#citymob").css('border-width','1px');
        }
        if($("#pincodemob").val() == ""){
            $("#pincodemob").css('border-color','red ');
            $("#pincodemob").css('border-width','2px ');
            $("#pincodemob").attr('placeholder','Required Field');
            error = error + 'pincode';
        } else{
            $("#pincodemob").css('border-color','black');
            $("#pincodemob").css('border-width','1px');
        }	
        //  

        if (error == "") {
            // ajax call
            $.ajax({
                type: 'POST',
                url: './php/checkout-form.php',
                dataType: "json",
                data: {
                    name: $("#namemob").val(),
                    email: $("#emailmob").val(),
                    phone: $("#phonemob").val(),
                    // productName: $("#productname").val(),
                    // eventname: $("#eventname").val(),
                    pincode: $("#pincodemob").val(),
                    city: $("#citymob").val(),
                    state: $("#statemob").val(),
                    country: $("#countrymob").val(),
                    address: $("#addressmob").val(),
                    amount: <?=$discounted_price?>,
                    tablename: "<?=mysqli_real_escape_string($conn,$table_name)?>",
                    productid: <?=$Product?>,
                    // 'referral_id': referral_id,
                    // password: $("#password").val(),
                    // discount: result.discount,
                    // eventid: EVENTNAME,
                    // 'coupon_code': coupon_code,
                },
                success: function (data) {
                    if (data.status == 201) {
                        // alert("hello");
                        window.dataLayer = window.dataLayer || [];
                            window.dataLayer.push({'event': 'payment initiated'});
                        // fbq('track', 'InitiateCheckout');
                        // alert("checked out");
                        var order_id = data.id;
                        var options = {
                            "key": "<?=$rzp_key?>",
                            "amount": parseInt(<?=$discounted_price?> * 100), // Amount is in currency subunits. Default currency is INR. Hence, 29935 refers to 29935 paise or INR 299.35.    
                            "currency": "INR",
                            "name": "<?=mysqli_real_escape_string($conn,$category)?>",
                            "description": "<?=mysqli_real_escape_string($conn,$category)?>",
                            "image": "images/head.png",
                            //"order_id": "order_9A33XWu170gUtm",//This is a sample Order ID. Create an Order using Orders API. (https://razorpay.com/docs/payment-gateway/orders/integration/#step-1-create-an-order). Refer the Checkout form table given below    
                            "handler": function (response) {
                                // alert(response.razorpay_payment_id);
                                var razorpay_payment_id = response.razorpay_payment_id;
                                // console.log(response);
                                $.ajax({
                                    type: 'POST',
                                    url: './php/checkout-update-form.php',
                                    dataType: "json",
                                    data: {
                                        id: data.id,
                                        // productName: "Finstreet",
                                        razorpay_payment_id: razorpay_payment_id,
                                        amount: <?=$discounted_price?>,
                                        email: $("#emailmob").val()
                                    },
                                    success: function (data) {
                                        if (data.status == 'ok') {
                                            //window.location = "thankyou.html";
                                            //alert("Your payment has been successful");
                                            // $("#checkout-form").css('display','none');
                                            // $("#order-success").css('display','block');
                                            // $("#order-id").html('#'+ data.id);
                                            // window.scrollTo(0,0);
                                            // alert("Your payment has been successful");
                                                window.location = "order";
                                                // $("#checkout-form").css('display','none');
                                                // $("#order-success").css('display','block');
                                                // $("#order-id").html('#'+ data.id);
                                                // window.scrollTo(0,0);
                                                sessionStorage.useremail = $("#email").val();
                                                window.dataLayer = window.dataLayer || [];
                                                window.dataLayer.push({'event':'payment success'});
                                            
                                        } else {
                                            alert("Your payment unsuccessful please try again later"); 
                                                console.log("error");
                                        }
                                    }
                                });


                            }, "prefill": {
                                "name": $("#namemob").val(),
                                "email": $("#emailmob").val(),
                                // "contact": $("#phone").val()
                            }, "notes": {
                                // "country": $("#country").val(),
                                // "address": $("#Address").val(),
                                // "state": $("#state").val(),
                                // "postcode": $("#postcode").val(),
                                // "productName": "Crypto-Nite 2020",

                            }, "theme": {
                                "color": "#2e3192"
                            }
                        };

                        var rzp1 = new Razorpay(options);
                        rzp1.open();


                    }else if (data.status == 601) {
                        console.log(data.error);
                        // alert("problem with query");
                    
                    }else if (data.status == 701){
                        alert("Already Purchased");
                        // $(".order-success").css('display', 'block');
                        // $(".checkout-form").css('display', 'none');
                        // $('#exampleModalCenter').modal('show')
                    
                    }else{

                    }
                }
            });
        } else {
            // return true;
        }
    });

    </script>
</body>

</html>