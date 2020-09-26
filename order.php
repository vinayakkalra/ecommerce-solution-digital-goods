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
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Enter a proper page title here -->
    <title>My Orders | BULKDATABASE PROVIDER</title>

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
        #downloadButton:hover {
            background-color: #24436e !important;
        }

        /* product css start */
        .hv:hover .over {
            height: 100%;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }

        .over {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
            opacity: 0.8;
        }

        .icon {
            width: 15%;
            height: 20%;
            text-align: center;
            margin-left: 15px;
        }

        .s {
            height: 10px;
        }

        #text-bg {
            background-color: #24436e;
            width: 100%;
            color: white;
            /* height: 50px; */
        }

        #product-link a:hover {
            color: black;
            text-decoration: none;
        }

        /* product css end */
        #order:hover{
            color : black !important;
            border-right: 2px solid #24436e;
            padding-right: 82%;
        }
    </style>
</head>

<body>

    <div class="d-none d-lg-block">

        <!-- desktop header start -->
        <div id="header-desktop"></div>
        <!-- desktop header end -->
        <!-- second bar start -->
        <div class="container-fluid p-0 "  style="background-color: #f7f7f7;border-top: 1px solid #ececec;border-bottom: 1px solid #ececec;">
            <div class="container" style="padding: 20px 20px;">
                    <h3 style="color:#2b2b2b; font-weight:500;"
                        class="font-Lato-Regular">
                        MY ACCOUNT
                    </h3>
                    <h5 style=" font-weight: normal; margin-top: 5px;margin-bottom:0px;">ORDERS</h5>

            </div>
        </div>
        <div class="container" style="padding: 50px 0px;">
            <div style="width:100%;" class="hello">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-5">
                                        <img src="img/user.png" style="width: 100%;border-radius: 50%;">
                                    </div>
                                    <div class="col-7 font-Lato-Regular" style="line-height: 80px; padding-left: 0px;">
                                        <p style="font-weight: 400; padding-left: 0px;"><?=$customername?></p>
                                    </div>
                                </div>
                                <div class="row" style="cursor:pointer;margin-top: 20px;" id="order">
                                    <div class="col">
                                        <a href=""
                                            style="font-weight: 600;color: rgba(102,102,102,0.85);font-size: 20px;text-decoration: none;"
                                            class="font-Lato-Regular" >ORDERS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-9" style="border-left: 1px solid rgb(224, 219, 219);">
                            <div class="container">
                            <div class="row">
                                <!--  -->
                                <?php
                        $querysec = "SELECT * FROM `orders` WHERE email = '".mysqli_real_escape_string($conn, $customeremail)."' AND status = 'paid'";
                        if ($resultsec = mysqli_query($conn, $querysec)) {

                                if( ! mysqli_num_rows($resultsec) ) {
                                    ?>
                               
                                    <div class="col-3">
                                        <button type="button" class="btn" onclick="location.href='index';"
                                            style="background-color:#315588;color:white;border-radius: 0%; font-weight: bold; font-size: .7em;"
                                            id="downloadButton"><span>BROWSE PRODUCTS</span></button>
                                    </div>
                                    <div class="col">
                                        <p style="margin-left:0px;">No order has been made yet.</p>
                                    </div>

                                    <?php
                                }  while( $rowsec = mysqli_fetch_array($resultsec)){

                                  $tablename = $rowsec['table_name'];
                                  $productid = $rowsec['product_id'];

                                  $query = "SELECT * FROM `$tablename` where `id` =  $productid ";
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
                                              $downloadlink = $row['download_link'];
                                              ?>
                                                <div href="<?=$downloadlink?>" download class="col-4 px-md-5" style="margin-top: 5px; margin-bottom: 5px;cursor: pointer;">
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="hv">
                                                                <img class="card-img-top center" src="<?=$img?>" alt="Card image cap">
                                                                <div class="over" style="display: flex;align-items: flex-end;">
                                                                    <div style="width: 100%;">
                                                                        <div class="icon-bg">
                                                                            <div class="icon">
                                                                                <img src="./img/icon.PNG" style="width: 30px;">
                                                                            </div>
                                                                            <div class="s"></div>
                                                                        </div>
                                                                        <div id="text-bg"
                                                                            style="display: flex;align-items: center;text-align: center;justify-content: center;">
                                                                            <div class="text font-Lato-Regular">Download Now</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row mt-2">
                                                        <div class="col">
                                                            <h6 style="text-align: left;">
                                                                <a href="#" class="font-Lato-Regular" style="font-size: 13px;text-transform: uppercase;">
                                                                    <?=$category ?>
                                                                </a>
                                                            
                                                                <p style="font-weight:bold; color:#111;font-size: 14px;margin-top:5px;" class="font-Lato-Regular">
                                                                    <span
                                                                        style="margin-right: 10px; font-weight: normal; color: #282828;opacity: .7"></span>₹<?=$discounted_price ?>
                                                                </p>
                                                            </h6>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                              <?php
                                          }
                                       
                                        }
                                    }


                                  
                            }
                        }

                                    ?>

                                 <!--  -->
                              
                                 </div>
                            </div>
                        </div>

                    </div>
                </div>

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
        <!--  -->
        <div class="container-fluid p-0 mt-3" style="background-color: #f7f7f7;border-top: 1px solid #ececec;border-bottom: 1px solid #ececec;">
            <div class="container" style="padding: 20px 20px;">
                    <h3 style="color:#2b2b2b; font-weight:500;text-align: center;" class="font-Lato-Regular">
                        MY ACCOUNT
                    </h3>
                    <h5 style="font-weight: normal;margin-top: 5px;text-align: center;margin-bottom:0px;">ORDERS</h5>
            </div>
        </div>
        <!--  -->
        <div class="container font-Lato-Regular" style="padding: 30px 0px;">
            <div style="width:100%;padding: 0 15px 30px;">
                <!-- <h1 style=" text-align : center;color:#2b2b2b; font-size: 1.25em;border-bottom: 2px solid rgba(0,0,0,0.1);padding-bottom: 7.5px; font-weight:700; margin:0px 0px 24px;"
                    class="font-Lato-Regular">
                    MY ACCOUNT
                    <p style="font-size: 10px; font-weight: normal; margin-top: 5px;">ORDERS</p> -->
                <!-- </h1> -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-4">
                                        <img src="img/user.png" style="border-radius: 50%;width: 100%;">
                                    </div>
                                    <div class="col-8 font-Lato-Regular" style="line-height: 80px;">
                                        <p style="font-weight: 400; padding-left: 0px;"><?=$customername?></p>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <a href="" style="font-weight: 400;color: rgba(102,102,102,0.85);font-size: 20px;text-decoration: none;" class="font-Lato-Regular">ORDERS</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col" style="margin-top: 20px;">
                            <div class="container">
                                <div class="row">
                                <!--  -->
                                  <!--  -->
                                  <?php
                        $querysec = "SELECT * FROM `orders` WHERE email = '".mysqli_real_escape_string($conn, $customeremail)."' AND status = 'paid'";
                        if ($resultsec = mysqli_query($conn, $querysec)) {

                                if( ! mysqli_num_rows($resultsec) ) {
                                    ?>
                                    <div class="col-12 mt-5">
                                        <button type="button" class="btn"
                                            style="background-color:#315588;color:white;border-radius: 0%; font-weight: bold; font-size: .7em; "
                                            id="downloadButton"><span>BROWSE PRODUCTS</span></button>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <p style="margin-left:0px;">No order has been made yet.</p>
                                    </div>
                                     <?php
                                }  while( $rowsec = mysqli_fetch_array($resultsec)){

                                  $tablename = $rowsec['table_name'];
                                  $productid = $rowsec['product_id'];

                                  $query = "SELECT * FROM `$tablename` where `id` =  $productid ";
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
                                              $downloadlink = $row['download_link'];
                                              ?>
                                            <!--  -->
                                            <div href="<?=$downloadlink?>" download class="col-6 px-md-5" style="cursor: pointer;">
                                                <div class="row">
                                                    <img class="card-img-top center" src="<?=$img ?>" alt="Card image cap">
                                                </div>
                                                <div class="row mt-2">
                                                    <p style="text-align: left; font-size: 12px; font-weight: bold; color:black;"class="text font-Lato-Regular" ><a href="#" style="text-transform: uppercase;"><?=$category ?></a><br>₹<?=$discounted_price ?></p>
                                                </div>
                                            </div>
                                            <!--  -->
                                               <?php
                                          }
                                       
                                        }
                                    }


                                  
                            }
                        }

                                    ?>
                                <!--  -->
                                   
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- mobile view footer -->
        <div id="footer-mob"></div>
        <!-- mobile view footer end -->
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom_mobile_header.js"></script>
    <script>

        // Add custom javascript and jquery here
        // including header footer
        $("#header-desktop").load('template/header.php');
        $("#footer-desktop").load('template/footer.php');
        $("#footer-mob").load('template/footerMob.php');
        $("#header-mob").load('template/headerMob.php');


    </script>
</body>

</html>