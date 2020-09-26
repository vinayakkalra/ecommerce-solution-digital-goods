<?php
session_start();

include("./php/config.php");
    if(!isset($_GET['Product'] )){
        $Product = 1 ;
      }else{
     
         $Product = $_GET['Product'];
      }
      $index = $Product;
      $query = "SELECT * FROM `product`  WHERE `id` =  $Product";
      if ($result = mysqli_query($conn, $query)) {
        if( ! mysqli_num_rows($result) ) {
            header("Location: index");
        } else {
            while( $row = mysqli_fetch_array($result)){
                $table_name = $row['table_name'];
                $product_category = $row['product_category'];
                $proId = $row['id'];
            }
        }
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Enter a proper page title here -->
    <title>Products | BULKDATABASE PROVIDER</title>

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
        /* desktop view css start */

        /*  side links css start */
        #link a {
            font-size: 16px;
            font-family: Lato-Regular;
            padding: 6px 0px;
        }

        #link a:hover {
            color: #000000;
            text-decoration: none;
        }

        .active {
            font-weight: bold;
            color: black;
        }

        /*  side links css end */

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
        /* desktop view css end */
    </style>
</head>

<body>

    <div class="d-none d-lg-block">

        <!-- Enter code for desktop UI here -->

        <!-- desktop header start -->
        <div id="header-desktop"></div>
        <!-- desktop header end -->

        <!-- second bar header start -->
        <div class="container" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;">
            <div style="width:100%;">
                <h1 style="color: rgba(102,102,102,0.7); font-size: 18.4px;" class="font-Lato-Regular">
                    <a href="index" style="color: rgba(102,102,102,0.7); text-decoration:none;" >HOME</a> /
                    <span style="color: #222222; font-weight: bold;text-transform: uppercase;">
                        <?=$product_category ?>
                    </span>
                </h1>
            </div>
        </div>
        <!-- side links -->
        <div class="container" style="padding:0;  padding-top:30px;">
            <div style="width:100%;display:flex;">
                <div style="width:30%;" id="link">
                    <p style="font-size: 16px; color: #282828; font-weight: bold;" class="font-Lato-Regular">BROWSE ALL
                        DATABASES</p>
                    <div
                        style="margin-top: .66em;height: 3px;display: block;background-color: rgba(0,0,0,0.1);margin: 1em 0 1em;width: 100%;max-width: 30px;">
                        <hr>
                    </div>
                    <?php
                        $querysec = "SELECT * FROM `product` ";
                        if ($result = mysqli_query($conn, $querysec)) {
                          if( ! mysqli_num_rows($result) ) {
                            //   header("Location: index");
                          } else {
                              while( $row = mysqli_fetch_array($result)){
                                  ?>
                            <p><a href="product-category?Product=<?=$row['id']?>" class = "list-group-itemss" ><?=$row['product_category']?></a></p>
                                  <?php
                              }
                          }
                        }
                    ?>
                    <!-- <p><a href="product-category?Product=3" class = "list-group-itemss" id="three">Government Employees Database</a></p>
                    <p><a href="product-category?Product=7" class = "list-group-itemss" id="seven">Students Database</a></p>
                    <p><a href="product-category?Product=4" class = "list-group-itemss" id="four">Job Seekers Database </a></p>
                    <p><a href="product-category?Product=1" class = "list-group-itemss" id="one">All India Database</a></p>
                    <p><a href="product-category?Product=5" class = "list-group-itemss" id="five">Other Databases</a></p>
                    <p><a href="product-category?Product=6" class = "list-group-itemss" id="six">Policy Bazaar Database</a></p> -->
                </div>
                <div style="width:70%">
                    <h1 style="color: #282828; font-size: 16px; margin:0px 0px 20.8px; font-weight: 400;"
                        class="font-Lato-Regular"><?=$product_category ?></h1>
                    <div class="row mx-md-n5">

                        <?php
                            $query = "SELECT * FROM `$table_name` ";
                            if ($result = mysqli_query($conn, $query)) {
                                if( ! mysqli_num_rows($result) ) {
                                    header("Location: index");
                                }else{

                                    while( $row = mysqli_fetch_array($result)){
                                        $img= $row['image'];
                                        $des = $row['category'];
                                        $o_price = $row['original_price'];
                                        $d_price = $row['discounted_price'];
                                        $productId = $row['id'];
                        ?>

                        <div class="col-4 px-md-5" style="margin-top: 5px; margin-bottom: 5px;" onclick="location.href='desc?Type=<?=$proId ?>&Product=<?=$productId ?>';" style="cursor: pointer;">
                            <div class="row">
                                <div class="col">
                                    <div class="hv">
                                        <img class="card-img-top center" src="<?=$img ?>" alt="Card image cap">
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
                                <div class="col">
                                    <p style="font-size: 11px;opacity: .7;margin-top: .1em;
                                        margin-bottom: .1em;font-weight: 400; color: #282828;text-transform: uppercase;" class="font-Lato-Regular">
                                        <?=$des ?>
                                    </p>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <h6 style="text-align: left;" id="product-link">
                                        <a href="#" class="font-Lato-Regular" style="font-size: 13px;text-transform: uppercase;">
                                            <?=$des ?>
                                        </a>
                                       
                                        <p style="font-weight:bold; color:#111;font-size: 14px;margin-top:5px;" class="font-Lato-Regular">
                                            <span
                                                style="margin-right: 10px; font-weight: normal; color: #282828;opacity: .7"><s>₹<?=$o_price ?></s></span>₹<?=$d_price ?>
                                        <p>
                                    </h6>
                                </div>
                                
                            </div>
                        </div>

                        <?php
                                    }}}
                        ?>
                        

        
                    </div>
                </div>
            </div>
        </div>
        <!-- second bar header end -->

        <!-- desktop footer start -->
        <div id="footer-desktop"></div>
        <!-- deskop footer end -->

    </div>

    <!-- mobile view -->
    <div class="d-lg-none position-relative">
        <!-- Enter Code for Mobile UI here -->

        <!-- mobile view header start -->
        <div id="header-mob"></div>
        <!-- mobile view header end -->

        <!-- second bar start -->
        <div class="container" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;">
            <div style="width:100%; text-align: center;">
                <h1 style="color: rgba(102,102,102,0.7); font-size: 16px;" class="font-Lato-Regular">
                    <a href="index" style="color: rgba(102,102,102,0.7);text-decoration:none;">HOME</a> /
                    <span style="color: #222222; font-weight: bold;text-transform: uppercase;">
                        <?=$product_category ?>
                    </span>
                </h1>
            </div>
        </div>
        <!-- product  -->
        <div class="container" style="padding:0; padding: 15px;">
            <div style="width:100%;display:flex; margin: 5px;">
                <div style="width:100%">
                    <h1 style="color: #282828; font-size: 16px;" class="font-Lato-Regular">All
                        <?=$product_category ?></h1>
                    <div class="row mx-md-n5">

                        
                            <?php
                                $query = "SELECT * FROM `$table_name` ";
                                if ($result = mysqli_query($conn, $query)) {
                                    if( ! mysqli_num_rows($result) ) {
                                        header("Location: index");
                                    }else{
                                        while( $row = mysqli_fetch_array($result)){
                                            $img= $row['image'];
                                            $des = $row['category'];
                                            $o_price = $row['original_price'];
                                            $d_price = $row['discounted_price'];
                                            $productId = $row['id'];
                            ?>



                        <div class="col-6 px-md-5" style="margin-top: 5px; margin-bottom: 5px;" onclick="location.href='desc?Type=<?=$proId ?>&Product=<?=$productId ?>';" style="cursor: pointer;">
                            <div class="row">
                                <img class="card-img-top center" src="<?=$img ?>" alt="Card image cap">
                            </div>
                            <div class="row mt-2">
                                <div class="col">
                                    <p style="font-size: 10px; opacity: 0.7;margin-top: .1em;
                                margin-bottom: .1em;font-weight: 400; color: #282828;text-transform: uppercase;" class="font-Lato-Regular">
                                        <?=$des ?>
                                    </p>
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    <h6 style="text-align: left; font-size: 12px;" id="product-link">
                                        <a href="#" class="font-Lato-Regular" style="text-transform: uppercase;">
                                            <?=$des ?>
                                        </a>
                                        <p style="font-weight:bold; color:#111;font-size: .9em;margin-top:5px;"
                                            class="font-Lato-Regular"><span
                                                style="margin-right: 5px; font-weight: normal; color: #282828;opacity: .7"><s>₹<?=$o_price ?></s></span>₹<?=$d_price ?>
                                        <p>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        <?php
                                    }}}
                        ?>

                        
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
    <script src="js/custom_mobile_header.js"></script>
    <script>

        // Add custom javascript and jquery here

        // including header footer
        $("#header-desktop").load('template/header.php');
            $("#footer-desktop").load('template/footer.php');
            $("#footer-mob").load('template/footerMob.php');
            $("#header-mob").load('template/headerMob.php');

       

        $(document).ready(function(){
            var data = <?= $index ?>;
            var classno = data - 1 ;
            addactiveclass = document.getElementsByClassName('list-group-itemss');
            addactiveclass[classno].classList.add('active');
            addactiveclass = document.getElementsByClassName('list-group-itemssheader');
            addactiveclass[classno].classList.add('active1');
            // if (data == 1) {
            //     $("#one1").addClass("active1");
            //     $("#one").addClass("active");
            // } else if(data == 2) {
            //     $("#two2").addClass("active1");
            //     $("#two").addClass("active");
            // } else if(data==3) {
            //     $("#three3").addClass("active1");
            //     $("#three").addClass("active");
            // } else if(data==4) {
            //     $("#four4").addClass("active1");
            //     $("#four").addClass("active");
            // } else if(data==5) {
            //     $("#five5").addClass("active1");
            //     $("#five").addClass("active");
            // } else if (data==6) {
            //     $("#six").addClass("active");
                
            // } else if (data==7) {
            //     $("#six6").addClass("active1");
            //     $("#seven").addClass("active");
            // }
        }); 
        
       // jquery for top links 
    </script>
</body>

</html>