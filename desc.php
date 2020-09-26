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
    <title>Description | BULKDATABASE PROVIDER</title>

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
        .firstDiv a {
            font-size: .85em;
            color: #808080;
            text-decoration: none;
            font-family: Lato-Regular;
            font-weight: normal;
        }

        .firstDiv a:hover {
            color: #111;
        }

        #cartButton:hover {
            box-shadow: inset 0 0 0 100px rgba(0, 0, 0, 0.2);
        }

        #downloadButton:hover {
            color: black !important;
        }

        #tagLink a:hover {
            color: black;
            text-decoration: none;
        }

        #commentBar a {
            color: #808080;
        }

        .active {
            color: black !important;
        }

        .nav-link.active {
            border-color: #dee2e6 #dee2e6 #fff;
            border-top: 2px solid #24436e !important;
        }

        /* desktop product css start */
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
        ul li {
            margin-bottom: .6em;
        }
        #card-bar {
            height: auto !important;
            margin-top: 20px;
        }

        /* desktop product css end */
    </style>
</head>

<body>

    <div class="d-none d-lg-block">

        <!-- desktop header start -->
        <div id="header-desktop"></div>
        <!-- desktop header end -->
        <!-- second bar start -->
        <div class="container" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-5">
                        <img src="<?=$img?>" style="width: 90%;margin-top: 10px;">
                    </div>
                    <div class="col-7">
                        <div class="firstDiv">
                            <span>
                                <a href="index" class="firstLink">HOME</a>
                            </span>
                            <span style="color:#808080">
                                /
                            </span>
                            <span>
                                <a href="product-category?Product=<?=$type?>" class="firstLink"><?=$category?></a>
                            </span>
                        </div>
                        <div>
                            <h1 class="font-Lato-Regular"
                                style="font-size: 1.7em;margin-bottom: .5em;font-weight: 700;color: #2b2b2b;">
                                <?=$category?>
                            </h1>
                        </div>
                        <div class="font-Lato-Regular" style="margin:.5em 0;">
                            <span style="font-size: 1.5em; color:#808080;font-weight: normal;">
                                <del>₹<?=number_format($original_price)?>&nbsp;</del>
                            </span>
                            <span style="font-size: 1.5em; font-weight: bold;">
                                ₹<?=number_format($discounted_price)?>
                            </span>
                        </div>
                        <div class="font-Lato-Regular" style="font-weight: 400; color: #282828; ">

                            <?=$product_category?>

                            <ul>
                               <?=$full_description?>
                            </ul>
                        </div>
                        <div>
                            <button type="button" class="btn" onclick="location.href='shopCart?Type=<?=$type?>&Product=<?=$Product?>';"
                                style="background-color: #ef561e; color: white;border-radius: 0%; font-weight: bold;font-size: 1em;margin-bottom: 1em;padding: 0 1.2em;min-height: 2.5em;"
                                id="cartButton">BUY NOW</button>
                        </div>
                        <!-- <div>
                            <button type="button" class="btn"
                                style="background-color:#24436e;color:white;border-radius: 0%; font-weight: bold; font-size: .7em;"
                                id="downloadButton"><span>DOWNLOAD SAMPLE DATA</span></button>
                        </div> -->
                        <div style="margin-top:15px;font-weight: 400;font-size: .8em;" class="font-Lato-Regular"
                            id="tagLink">
                            <p>Category:<a href="product-category?Product=<?=$type?>" style="text-transform: capitalize;" > <?=$category?></a></p>
                            <!-- <p>Tags: <a href="">All India,</a><a href=""> Complete Database,</a><a href=""> Database</a> -->
                            <!-- </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- second bar end -->
        <!-- comment bar start -->
        <div class="container" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;" id="commentBar">
            <ul class="nav nav-tabs" id="myTab" role="tablist" class="font-Lato-Regular"
                style="font-weight: 700; font-size: .8em;">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">DESCRIPTION </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">REVIEWS</a>
                </li> -->
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="font-Lato-Regular" style="font-weight: 400; color: #282828;margin-top:30px;">
                        <p style="margin:0%;"><?=$records?> Records</p>
                        <p style="margin:0%;text-transform: capitalize;"><?=$category?></p>
                        <ul>
                            <?=$full_description?>
                        </ul>
                        <p style="margin-top:30px;">Available Fields :</p>
                        <ul>
                            <?=$available_field?>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- <div class="container">
                        <div class="row">
                          <div class="col-sm">
                            <h3>
                                Reviews for All India Complete Database
                            </h3>
                          </div>
                          <div class="col-sm">
                            One of three columns
                          </div>
                        </div>
                      </div> -->
                </div>
            </div>
        </div>
        <!-- comment bar end -->
        <!-- slider start -->
        <div class="container font-Lato-Regular" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;"
            id="commentBar">
            <h3 style="padding-top: 15px;padding-bottom: 15px;font-weight: 700;font-size: 1.25em;">
                RELATED PRODUCTS
            </h3>
            <div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- first slide -->

                            <!-- product start -->
                            <div id="card-bar" class="container-fluid">
                                <div  class="container">
                                    <div class="row ">
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
                                                    <div class="col-3 " onclick="location.href='desc?Type=<?=$type?>&Product=<?=$productid ?>';" style="cursor: pointer;" >
                                                        <div class="row" style="margin-right:5px;">
                                                            <div class="col">
                                                                <div class="hv">
                                                                    <img class="card-img-top center" src="<?=$img?>"
                                                                        alt="Card image cap">
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
                                                                                <div class="text font-Lato-Regular">QUICK VIEW</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row mt-2">
                                                            <h6 style="text-align: left;"><a href="desc?Type=<?=$type?>&Product=<?=$productid ?>" class="font-Lato-Regular"><?=$product_category?></a><br>₹<?=number_format($discounted_price)?></h6>
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
                    <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" style="display: none;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" style="display: none;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a> -->
                </div>
            </div>
        </div>
        <!-- slider end -->

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
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <img src="<?=$img?>" style="width: 100%;">
                    </div>
                    <div class="col-sm">
                        <div class="firstDiv">
                            <span>
                                <a href="index" class="firstLink">HOME</a>
                            </span>
                            <span style="color:#808080">
                                /
                            </span>
                            <span>
                                <a href="" class="firstLink"><?=$category?></a>
                            </span>
                        </div>
                        <div>
                            <h1 class="font-Lato-Regular"
                                style="font-size: 1.7em;margin-bottom: .5em;font-weight: 700;color: #2b2b2b;">
                                <?=$category?>
                            </h1>
                        </div>
                        <div class="font-Lato-Regular" style="margin: .5em 0;">
                            <span style="font-size: 1.5em; color:#808080;font-weight: normal;">
                                <del>₹<?=number_format($original_price)?>&nbsp;</del>
                            </span>
                            <span style="font-size: 1.5em; font-weight: bold;">
                                ₹<?=number_format($discounted_price)?>
                            </span>
                        </div>
                        <div class="font-Lato-Regular" style="font-weight: 400; color: #282828; ">

                        <?=$product_category?>

                            <ul>
                            <?=$full_description?>
                            </ul>
                        </div>
                        <div>
                            <button type="button" class="btn"  onclick="location.href='shopCart?Type=<?=$type?>&Product=<?=$Product?>';"
                                style="background-color: #ef561e; color: white;border-radius: 0%; font-weight: bold;font-size: 1em;margin-bottom: 1em;padding: 0 1.2em;min-height: 2.5em;"
                                id="cartButton">BUY NOW</button>
                        </div>
                        <div>
                            <!-- <button type="button" class="btn"
                                style="background-color:#24436e;color:white;border-radius: 0%; font-weight: bold; font-size: .7em;"
                                id="downloadButton"><span>DOWNLOAD SAMPLE DATA</span></button> -->
                        </div>
                        <div style="margin-top:15px;font-weight: 400;font-size: .8em;" class="font-Lato-Regular"
                            id="tagLink">
                            <p>Category:<a href="product-category?Product=<?=$type?>"> <?=$category?></a></p>
                            <!-- <p>Tags: <a href="">All India,</a><a href=""> Complete Database,</a><a href=""> Database</a> -->
                            <!-- </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- second bar end -->
        <!-- comment bar start -->
        <div class="container" style="border-top: 1px solid rgb(221, 221, 221);margin: 0 auto;width: 90%;padding: 20px 0px;" id="commentBar">
            <ul class="nav nav-tabs" id="myTab" role="tablist" class="font-Lato-Regular"
                style="font-weight: 700; font-size: .8em;">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">DESCRIPTION </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">REVIEWS</a>
                </li> -->
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="font-Lato-Regular" style="font-weight: 400; color: #282828;margin-top:30px;">
                        <p style="margin:0%;"><?=$records?> Records</p>
                        <p style="margin:0%"><?=$category?></p>
                        <ul>
                            <?=$full_description?>
                        </ul>
                        <p style="margin-top:30px;">Available Fields :</p>
                        <ul>
                            <?=$available_field?>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <!-- <div class="container">
                        <div class="row">
                          <div class="col-sm">
                            <h3>
                                Reviews for All India Complete Database
                            </h3>
                          </div>
                          <div class="col-sm">
                            One of three columns
                          </div>
                        </div>
                      </div> -->
                </div>
            </div>
        </div>
        <!-- comment bar end -->
        <!-- slider start -->
        <div class="container font-Lato-Regular" style="width:90%;margin:0 auto;border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;"
            id="commentBar">
            <h3 style="padding-top: 15px;padding-bottom: 15px;font-weight: 700;font-size: 1.25em;">
                RELATED PRODUCTS
            </h3>
            <div>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <!-- first slide -->
                            <!-- product start -->
                            <div id="card-bar-mob" class="container-fluid">
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
        <!-- second bar end -->

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