<?php
    session_start();
    require_once('./php/config.php');
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
    <title>CART | BULKDATABASE PROVIDER</title>

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

        /* desktop product css end */
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
                <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                    <li class="nav-item" style="margin-right: 0px;">
                        <a class="nav-link active" id="home-tab" data-toggle="tab"  role="tab"
                            aria-controls="home" aria-selected="true">SHOPPING CART<span
                                style="margin-left: 30px;">></span></a>
                    </li>
                    <li class="nav-item" style="margin-left: 0px; margin-right: 0px;">
                        <a class="nav-link" >CHECKOUT DETAILS <span
                                style="margin-left: 30px;">></span></a>
                    </li>
                    <li class="nav-item" style="margin-left: 0px;">
                        <a class="nav-link disabled">ORDER COMPLETE </a>
                    </li>
                </ul>

            </div>
            <div class="font-Lato-Regular" style="text-align: center; margin-top: 2%;">
                <!-- <p>Your cart is currently empty.</p> -->

                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="container" class="font-Lato-Regular" style="font-size:.9em; font-weight:600;">
                            <div class="row" >
                                <div class="" style="width: 60%;">
                                    <!-- LEFT DIV -->
                                    <div class="container">
                                        <div class="row" style="height:auto;">
                                            <div class="col-6" style="text-align: left;height:100%;">
                                                <span style="text-align: left;">PRODUCT</span>
                                            </div>
                                            <div class="col-2" style="justify-content: center;height:100%;" >
                                              <span style="text-align: left;">PRICE</span>
                                            </div>
                                            <div class="col-2" style="justify-content: center;height:100%;">
                                                <span style="text-align: left;">QUANTITY</span>
                                            </div>
                                            <div class="col-2" style="justify-content: center;height:100%;">
                                                <span style="text-align: left;">SUBTOTAL</span>
                                            </div>
                                        </div>
                                        <div class="row" style="height:auto;">
                                            <div class="col-6" style="text-align: left;height:100%;cursor: pointer;" onclick="location.href='desc?Type=<?=$type?>&Product=<?=$Product?>';">
                                                <div class="container" style="margin-top: 15px;">
                                                    <div class="row">
                                                        <div class="col-4" style="margin-right: 0%;padding-left: 0%;padding: 0;/* padding-right: 20px; */">
                                                            <img src="<?=$img?>" style="width: 100%;">
                                                        </div>
                                                        <div class="col-8" style="margin-left: 0%;padding: 0 0 0 10px;">
                                                            <p style="margin-bottom: 0;height: 100%;display: flex;align-items: center;"><a href="desc?Type=<?=$type?>&Product=<?=$Product?>" style="font-size: 100%;"><?=$category?></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2"  >
                                                <div class="container" style="height: 100%;">
                                                    <div class="row"  style="height: 100%;">
                                                        <div class="col-sm p-0">
                                                            <p  style="margin-bottom: 0;height: 100%;display: flex;justify-content: center;text-align: center;align-items: center;">₹<?=number_format($discounted_price)?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2"  >
                                                <div class="container" style="height: 100%;">
                                                    <div class="row"  style="height: 100%;">
                                                        <div class="col-sm p-0">
                                                            <p  style="margin-bottom: 0;height: 100%;display: flex;justify-content: center;text-align: center;align-items: center;">1</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2"  >
                                                <div class="container" style="height: 100%;">
                                                    <div class="row"  style="height: 100%;">
                                                        <div class="col-sm p-0">
                                                            <p  style="margin-bottom: 0;height: 100%;display: flex;justify-content: center;text-align: center;align-items: center;">₹<?=number_format($discounted_price)?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: 20px;">
                                            <div class="col">
                                                <p style="text-align: left;">You may be interested in…</p>
                                                <div class="container p-0">
                                                    <div class="row ">
                                                    <!--  -->
                                                    <?php
                                       $query = "SELECT * FROM `$table_name` where `id` !=  $Product limit 4 ";
                                       if ($result = mysqli_query($conn, $query)) {
                                           if( ! mysqli_num_rows($result) ) {
                                               header("Location: index");
                                           }else{
                                 
                                               while( $row = mysqli_fetch_array($result)){
                                                   $img = $row['image'];
                                                   $productid = $row['id'];
                                                   $category = $row['category'];
                                                   $original_price = $row['original_price'];
                                                   $discounted_price = $row['discounted_price'];
                                                   $full_description = $row['full_description'];
                                                   $available_field = $row['available_field'];
                                                   $records = $row['records'];
                                                   ?>
                                                        <div class="col-3" style="padding:3px;cursor: pointer;" onclick="location.href='desc?Type=<?=$type?>&Product=<?=$productid ?>';">
                                                            <div class="row" style="text-align:left;margin:5px;">
                                                                <div class="col-12">
                                                                    <div class="hv">
                                                                        <img class="card-img-top center"
                                                                            src="<?=$img?>" alt="Card image cap">
                                                                        <div class="over"
                                                                            style="display: flex;align-items: flex-end;">
                                                                            <div style="width: 100%;">
                                                                                <div class="icon-bg">
                                                                                    <div class="icon">
                                                                                        <img src="./img/icon.PNG"
                                                                                            style="width: 30px;">
                                                                                    </div>
                                                                                    <div class="s"></div>
                                                                                </div>
                                                                                <div id="text-bg"
                                                                                    style="display: flex;align-items: center;text-align: center;justify-content: center;">
                                                                                    <div class="text font-Lato-Regular">
                                                                                        QUICK VIEW</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-2" style="margin:5px;">
                                                                <h6 style="text-align: left;"><a href="desc?Type=<?=$type?>&Product=<?=$productid ?>"
                                                                        class="font-Lato-Regular"><?=$category?></a><br>₹<?=$discounted_price?></h6>
                                                            </div>
                                                        </div>

                                                    <?php
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
                                <div class="" style="width: 40%;">
                                    <!-- right div -->
                                    <div class="container" style="text-align: left;">
                                        <div class="row">
                                            <div class="col-12">
                                                <p style="border-bottom:1px solid rgb(211, 197, 197)">CART TOTALS</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <p style="font-weight: normal;">Orignal Price</p>
                                                        </div>
                                                        <div class="col-sm" style="text-align: end;">
                                                            <p>₹<?=number_format($original_price)?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <p style="font-weight: normal;">Discount</p>
                                                        </div>
                                                        <div class="col-sm" style="text-align: end;">
                                                            <p><?=$discount_percentage?>% OFF</p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="padding-top: 5px;border-top: 1px solid rgb(211, 197, 197);">
                                                        <div class="col-sm">
                                                            <p style="font-weight: normal;">Total</p>
                                                        </div>
                                                        <div class="col-sm" style="text-align:end;">
                                                            <p>₹<?=number_format($discounted_price)?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="button" class="btn" onclick="location.href='checkout?Type=<?=$type?>&Product=<?=$Product?>';"
                                                    style="min-height: 2.5em;background-color: #ef561e; color: white;border-radius: 0%; font-weight: bold;font-size: 1em;margin-bottom: 1em;padding: 0 1.2em; width: 100%;"
                                                    id="cartButton">PROCEED TO CHECKOUT</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="container" style="text-align: left;margin-top: 20px;">
                                        <div class="row" style="margin-bottom:10px;">
                                            <div class="col-12" style="margin-bottom: 10px;">
                                                <p
                                                    style="border-bottom:1px solid rgb(231, 228, 228); padding-bottom: 8px;">
                                                    Coupon</p>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">

                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" placeholder="Coupon code">

                                                </div>
                                            </div>
                                            <div class="col-12">

                                                <button type="button" class="btn"
                                                    style="color: #666;border-radius: 0%; font-weight: bold;font-size: 1em;margin-bottom: 1em;padding: 0 1.2em; width: 100%; border: 1px solid #ddd;    font-weight: normal;    min-height: 2.5em;"
                                                    id="cartButton">APPLY COUPON</button>

                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="font-Lato-Regular">
                        <p>Your cart is currently empty.</p>
                        <div>
                            <button type="button" class="btn"
                                style="background-color:#24436e;color:white;border-radius: 0%; font-weight: bold; font-size: .7em;"
                                id="downloadButton"><span>RETURN TO SHOP</span></button>
                        </div>
                    </div> -->
                </div>



            </div>
            <!-- <div class="font-Lato-Regular" style="text-align: center; margin-top: 2%;">
                <button type="button" class="btn"
                    style="background-color:#405c83;color:white;border-radius: 0%; font-weight: bold; font-size: .7em;"
                    id="returnShop"><span>RETURN TO SHOP</span></button>
            </div> -->
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
        <div class="container" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;">
            <div class="container font-Lato-Regular" style="width: 100%;">
                <ul class="nav">
                    <li class="nav-item" style="margin: auto;">
                        <a class="nav-link active" >SHOPPING CART</a>
                    </li>
                </ul>
            </div>
            <!-- <div class="font-Lato-Regular" style="text-align: center; margin-top: 2%;">
                <p>Your cart is currently empty.</p>
            </div>
            <div class="font-Lato-Regular" style="text-align: center; margin-top: 2%;">
                <button type="button" class="btn"
                    style="background-color:#405c83;color:white;border-radius: 0%; font-weight: bold; font-size: .7em;"
                    id="returnShop"><span>RETURN TO SHOP</span></button>
            </div> -->
            <div class="font-Lato-Regular" style="text-align: center; margin-top: 2%;">
                <!-- <p>Your cart is currently empty.</p> -->
                <div>
                    <div class="container" class="font-Lato-Regular" style="font-size:.9em; font-weight:600;">
                        <div class="row">
                            <div class="col-12">
                                <!-- LEFT DIV -->
                                <div class="container ">
                                        <div class="row" style="height:auto;">
                                            <div class="col-9" style="text-align: left;height:100%;">
                                                <span style="text-align: left;">PRODUCT</span>
                                            </div>
                                            <div class="col-3" style="justify-content: center;height:100%;" >
                                              <span style="text-align: left;">PRICE</span>
                                            </div>
                                        </div>
                                        <div class="row" style="height:auto;margin-bottom:20px;">
                                            <div class="col-9" onclick="location.href='desc?Type=<?=$type?>&Product=<?=$Product?>';" style="text-align: left;height:100%;">
                                                <div class="container" style="margin-top: 15px;">
                                                    <div class="row">
                                                        <div class="col-4" style="margin-right: 0%;padding-left: 0%;padding: 0;/* padding-right: 20px; */">
                                                            <img src="<?=$img?>" style="width: 100%;">
                                                        </div>
                                                        <div class="col-8" style="margin-left: 0%;padding: 0 0 0 10px;">
                                                            <p style="margin-bottom: 0;height: 100%;display: flex;align-items: center;"><a href="desc?Type=<?=$type?>&Product=<?=$Product?>" style="font-size: 100%;"><?=$category?></a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3"  >
                                                <div class="container" style="height: 100%;">
                                                    <div class="row"  style="height: 100%;">
                                                        <div class="col-sm p-0">
                                                            <p  style="margin-bottom: 0;height: 100%;display: flex;justify-content: center;text-align: center;align-items: center;">₹<?=number_format($discounted_price)?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!--  -->
                                    <!-- slider start -->
        <div class="container font-Lato-Regular" style="width:100%;margin:0 auto;border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;padding-top:0px;"
            id="commentBar">
            <h3 style="text-align:left;padding-top: 15px;padding-bottom: 15px;font-weight: 700;font-size: 1.25em;">
            You may be interested in…
            </h3>
            <div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- first slide -->
                            <!-- product start -->
                            <div id="card-bar-mob" class="container-fluid p-0">
                                <div id="card-bar-center-mob" class="container-sm ">
                                    <div class="row row mx-md-n5">
                                    <?php
                                       $query = "SELECT * FROM `$table_name` where `id` !=  $Product limit 2 ";
                                       if ($result = mysqli_query($conn, $query)) {
                                           if( ! mysqli_num_rows($result) ) {
                                               header("Location: index");
                                           }else{
                                 
                                               while( $row = mysqli_fetch_array($result)){
                                                   $img = $row['image'];
                                                   $productid = $row['id'];
                                                   $category = $row['category'];
                                                   $original_price = $row['original_price'];
                                                   $discounted_price = $row['discounted_price'];
                                                   $full_description = $row['full_description'];
                                                   $available_field = $row['available_field'];
                                                   $records = $row['records'];
                                                   ?>
                                        <div class="col-6 px-md-5" onclick="location.href='desc?Type=<?=$type?>&Product=<?=$productid ?>';">
                                            <div class="row">
                                                <img class="card-img-top center" src="<?=$img?>"
                                                    alt="Card image cap">
                                            </div>
                                            <div class="row mt-2">
                                                <p style="text-align: left; font-size: 12px; font-weight: bold; color:black;"
                                                    class="text font-Lato-Regular"><a href="desc?Type=<?=$type?>&Product=<?=$productid ?>"><?=$product_category?></a><br>₹<?=number_format($discounted_price)?></p>
                                            </div>
                                        </div>
                                                        <?php
                                               }
                                             }
                                         }
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <!-- product end -->

                        </div>
                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> -->
                </div>
            </div>
        </div>
                                    <!--  -->
                                  
                                </div>
                            </div>
                            <div class="col-12">
                                <!-- right div -->
                                <div class="container" style="text-align: left; margin-top: 0px;">
                                    <div class="row">
                                        <div class="col-12">
                                            <p style="padding-bottom: 5px;border-bottom: 1px solid rgb(211, 197, 197);">CART TOTALS</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p style="font-weight: normal;">Orignal Price</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p style="text-align: right;"><?=number_format($original_price)?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <p style="font-weight: normal;">Discount</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p style="text-align: right;"><?=$discount_percentage?>% OFF</p>
                                                    </div>
                                                </div>
                                                <div class="row" style="padding-top: 5px;border-top: 1px solid rgb(211, 197, 197);">
                                                    <div class="col-6">
                                                        <p style="font-weight: normal;">Total</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p style="text-align: right;">₹<?=number_format($discounted_price)?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn" onclick="location.href='checkout?Type=<?=$type?>&Product=<?=$Product?>';"
                                                style="min-height: 2.5em;background-color: #ef561e; color: white;border-radius: 0%; font-weight: bold;font-size: 1em;margin-bottom: 1em;padding: 0 1.2em; width: 100%;"
                                                id="cartButton">PROCEED TO CHECKOUT</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="container" style="text-align: left;margin-top: 20px;">
                                    <div class="row" style="margin-bottom:10px;">
                                        <div class="col-12" style="margin-bottom: 10px;">
                                            Coupon
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">

                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp" placeholder="Coupon code">

                                            </div>
                                        </div>
                                        <div class="col-12">

                                            <button type="button" class="btn"
                                                style="color: #666;border-radius: 0%; font-weight: bold;font-size: 1em;margin-bottom: 1em;padding: 0 1.2em; border: 1px solid #ddd;    font-weight: normal;    min-height: 2.5em;"
                                                id="cartButton">APPLY COUPON</button>

                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="font-Lato-Regular">
                    <p>Your cart is currently empty.</p>
                    <div>
                        <button type="button" class="btn"
                                style="background-color:#24436e;color:white;border-radius: 0%; font-weight: bold; font-size: .7em;"
                                id="downloadButton"><span>DOWNLOAD SAMPLE DATA</span></button>
                    </div>
                </div> -->
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
    <script src="https://use.fontawesome.com/ebc80d226d.js"></script>
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