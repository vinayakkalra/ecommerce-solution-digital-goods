<?php
  session_start();
  require_once('./php/config.php');
  if (array_key_exists("logout", $_GET)) {
      // check logout value 1 or not
              
               $_COOKIE["dataexportmail"] = "";  
               $_COOKIE["dataexporid"] = "";
              
              session_destroy();
              
              setcookie("dataexportmail", "", time() - 60*60);
              setcookie("dataexporid", "", time() - 60*60);
              header('location:index');
              // header("Refresh:0; url=client_dashboard");
      //        $_COOKIE["id"] = "";  
      // destroy cookie and session
          }
 
        
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Enter a proper page title here -->
    <title>Template | Example with all standards</title>

    <!-- CSS to include bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- css to include style.css -->


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
    <!-- desktop view header css start -->
    <link rel="stylesheet" href="css/style.css">
    <!-- desktop view header css end -->
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


        #mid-bar {
            background-color: white;
            height: 30px;
            margin-top: 20px;
        }

        #mid-bar-center {
            background-color: white;
            height: 100%;
            width: 80%;

        }

        #mid-bar-left {
            background-color: white;
            height: 100%;
            width: 30%;
            float: left;
        }

        #mid-bar-mid {
            background-color: white;
            height: 100%;
            width: 40%;
            float: left;
            font-weight: bold;
            text-align: center;
            font-size: 100%;
        }

        #mid-bar-right {

            height: 100%;
            width: 30%;
            float: right;
        }

        hr {}



        #button-bar {
            height: 50px;
            margin: 40px auto;
        }

        #button-bar-center {
            height: 100%;
            width: 80%;
            text-align: center;
        }

        .card-group img {
            width: 60%;
        }

        #text-bar {
            text-align: center;
            font-weight: bold;
            font-size: 1.25em;
            margin-bottom: 40px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            height: 50px;
            width: 50px;
            background-size: 100%, 100%;
            background-image: none;
            border: 1px solid white;
            border-radius: 50%;
        }

        .carousel-control-next-icon:after {
            content: '>';
            font-size: 30px;
            color: white;
            font-weight: bold;
        }

        .carousel-control-prev-icon:after {
            content: '<';
            font-size: 30px;
            color: white;
            font-weight: bold;
        }

        .f img {
            width: 70px;
            margin-left: auto;
            margin-right: auto;
        }

        .f {
            text-align: center;

        }



        .k {
            position: relative;
        }

        .text {
            color: white;
            font-size: 15px;
            padding: 5px;
            /* position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%); */
            text-align: center;
            /* height: 50px; */
            /* margin-top: 40px; */
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

        .hv:hover .over {
            height: 100%;
        }

        .over1 {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: gray;
            overflow: hidden;
            width: 100%;
            height: 0;
            transition: .5s ease;
            opacity: 0.8;
        }

        .hv1:hover .over1 {
            height: 30%;
        }

        .bimg :hover {
            webkit-filter: blur(4px);
            filter: blur(4px);
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }



        html,
        body {
            margin: 0;
            padding: 0;
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

        .text1 {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
            height: 50px;
        }

        .hand {
            background-color: red;
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        h6 {
            text-align: center;
        }

        #slide1-center {
            /* height: 100%; */
            width: 100%;
            margin: 5px;
            padding: 15px;
            /* padding-top: 130px; */
            animation: animate 2s linear;
            position: relative;
        }

        @keyframes animate {
            0% {
                transform:
                    perspective(300px) rotateY(-100deg);
            }

            50% {
                transform:

                    rotateY(0deg);
            }

            100% {
                transform:

                    rotateY(0deg);
            }
        }

        #slider1-center-top {
            height: 50px;
            width: 100%;
            margin-top: 5px;
            font-family: "Comic Sans MS", cursive, sans-serif;
        }

        #slider1-center-mid1 {
            height: 110px;
            font-size: 80px;
            font-weight: bold;
        }

        #slider1-center-mid2 {
            height: 110px;
            font-size: 70px;
            font-weight: bold;
        }

        #slider1-center-mid2 hr {
            border-top: 2px solid gray;
            width: 20px;
        }

        #slider1-center-footer {
            height: 50px;
            font-weight: bold;
        }

        #slider-button {
            height: 40px;
            width: 100px;
            background-color: black;
            color: white;
            border: 2px solid white;
            margin: 10px;
        }

        #slider-button:hover {
            background-color: white;
            color: black;
        }

        #slide2-center {
            height: auto;
            width: 95%;
            /* margin: 2px; */
            /* margin-left: auto; */
            /* margin-right: auto; */
            padding: 15px;
            /* padding-bottom: 120px; */
            /* margin-bottom: 50px; */
            background-color: rgba(234, 212, 212, 0.87);
            opacity: 0.9;
            border-radius: 107px;
            animation: myfirst 1.5s 1;
            position: relative;
            animation-direction: normal;
        }

        @keyframes myfirst {
            0% {
                left: -200px;
                top: 0px;
            }

            100% {
                left: 0px;
                top: 0px;
            }
        }

        #slider2-center-top {
            height: 50px;
            width: 100%;
            margin-top: 5px;
            font-family: "Comic Sans MS", cursive, sans-serif;
            color:#2b2b2b;
        }

        #slider2-center-mid1 {
            height: 40px;
            font-size: 27px;
            font-weight: bold;
            color: #2b2b2b;
            animation: mySecond 1.5s 1;
            position: relative;
            animation-direction: normal;
        }

        @keyframes mySecond {
            0% {
                left: -200px;
                top: 0px;
            }

            100% {
                left: 0px;
                top: 0px;
            }
        }

        #slider2-center-mid2 {
            height: 110px;
            font-size: 28px;
            font-weight: bold;
            color: #2b2b2b;
        }

        #slider2-center-mid2 hr {
            border-top: 2px solid gray;
            width: 100px;
            margin-bottom: 20px;
        }

        #slider2-center-footer {
            height: 50px;
            font-weight: bold;
            margin-top: 10px;
        }

        #slider2-button {
            height: 40px;
            width: 120px;
            background-color: pink;
            color: white;
            border: 2px solid #24436e;
            margin: 10px;
            color: #24436e;
            font-weight: bold;
        }

        #slider2-button:hover {
            background-color: #24436e;
            color: white;
        }

        #slide-effect {
            animation: mySecond 1.9s 1;
            position: relative;
            animation-direction: normal;
        }

        .c-center {
            text-align: left;
            margin-top: 10px;
        }

        #text-bg {
            background-color: #24436e;
            width: 100%;
            /* height: 50px; */
        }

        .card {
            border: none;
        }

        #button-color {
            background-color: #24436e;
            color: white;
            animation-fill-mode: forwards;
        }

        #button-color:hover {
            animation-name: move;
            animation-duration: 1s;
            /* position: relative; */
            transform: translateY(-9px);
        }

        /* @keyframes move {
            0% {
                bottom: 10px;
            }

            100% {
                bottom: 10px;
            }
        } */

        #card-style {
            color: white;
            text-align: center;
            height: 50px;
            margin-bottom: 20px;
            background-color: gray;
        }

        #main-img {
            margin-left: auto;
            margin-right: auto;
        }

        #cbody {
            margin-top: 40%;
            background-color: gray;
            text-align: center;
            color: white;
            opacity: 0.8;
            padding: auto;
            font-size: 10px;
        }

        .hv2:hover>#cbody {
            animation-name: up;
            animation-duration: 1s;
            padding-top: auto;
            animation-fill-mode: forwards;
        }

        @keyframes up {
            100% {
                margin-top: 35%;
            }
        }

        .hv2:hover>#main-img {
            webkit-filter: blur(4px);
            filter: blur(4px);
            animation-name: zoom;
            animation-duration: 1s;
            animation-fill-mode: forwards;
        }

        @keyframes zoom {
            100% {
                transform: scale(1.2);
            }
        }

        .card {
            margin: 20px;
        }







        #high {
            height: 500px;
        }

        .txt-section {
            position: relative;
            -js-display: flex;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -ms-flex-align: center;
            align-items: center;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
        }

        .txt-section b {
            display: block;
            -ms-flex: 1;
            flex: 1;
            height: 2px;
            opacity: .1;
            background-color: currentColor;
        }

        /* Mobile View Css */

        /* Hamburder Css Start */
        .navbar.navbar-1 .navbar-toggler-icon {
            background-color: white;
            color: white;
        }

        @media (max-width: 411px) {
            .navbar-collapse {
                position: fixed;
                top: 100px;
                left: 0;
                padding-left: 15px;
                padding-right: 15px;
                padding-bottom: 15px;
                width: 75%;
                height: 100%;
            }

            .navbar-collapse.collapsing {
                -webkit-transition: left 0.3s ease;
                -o-transition: left 0.3s ease;
                -moz-transition: left 0.3s ease;
                transition: left 0.3s ease;
                left: -75%;
            }

            .navbar-collapse.show {
                left: 0;
                -webkit-transition: left 0.3s ease-in;
                -o-transition: left 0.3s ease-in;
                -moz-transition: left 0.3s ease-in;
                transition: left 0.3s ease-in;
            }
        }

        /* Hamburder Css End */

        /* slider css start */

        /* slider slide1 css start */

        #slide1-center-mob {
            height: 100%;
            width: 100%;

            animation: animate 2s linear;
        }

        @keyframes animate {
            0% {
                transform:
                    perspective(300px) rotateY(-100deg);
            }

            50% {
                transform:

                    rotateY(0deg);
            }

            100% {
                transform:

                    rotateY(0deg);
            }
        }

        #slider1-center-top-mob {
            height: 20px;
            width: 100%;
            margin-top: 5px;
            font-family: "Comic Sans MS", cursive, sans-serif;
            font-size: 10px;
        }

        #slider1-center-mid1-mob {
            height: 30px;
            font-size: 25px;
            font-weight: bold;
        }

        #slider1-center-mid2-mob {
            height: 30px;
            font-size: 25px;
            font-weight: bold;
        }

        #slider1-center-mid2-mob hr {
            border-top: 2px solid gray;
            width: 20px;
        }

        #slider1-center-footer-mob {
            /* height: 10px; */
            font-weight: bold;
            font-size: 5px;
        }

        #slider-button-mob {
            height: 20px;
            width: 40px;
            background-color: black;
            color: white;
            border: 2px solid white;
            margin: 10px;
        }

        #slider-button-mob:hover {
            background-color: white;
            color: black;
        }

        /* slider slide1 css end */

        /* slider slide2 css start */

        #slide2-center-mob {
            height: 110px;
            width: 160px;
            margin: auto;
            margin-left: auto;
            margin-right: auto;
            padding: 5px;
            /* padding-bottom: 120px;
            margin-bottom: 50px; */
            background-color: rgba(234, 212, 212, 0.87);
            opacity: 0.9;
            border-radius: 40%;
            animation: myfirst 1.5s 1;
            position: relative;
            animation-direction: normal;
        }

        @keyframes myfirst {
            0% {
                left: -200px;
                top: 0px;
            }

            100% {
                left: 0px;
                top: 0px;
            }
        }

        #slider2-center-top-mob {
            height: 15px;
            width: 100%;
            margin-top: 5px;
            font-family: "Comic Sans MS", cursive, sans-serif;
            color: #2b2b2b;
            font-size: 10px;
        }

        #slider2-center-mid1-mob {
            height: 12px;
            font-size: 10px;
            font-weight: bold;
            color: #2b2b2b;
            animation: mySecond 1.5s 1;
            position: relative;
            animation-direction: normal;
        }

        @keyframes mySecond {
            0% {
                left: -200px;
                top: 0px;
            }

            100% {
                left: 0px;
                top: 0px;
            }
        }

        #slider2-center-mid2-mob {
            height: 15px;
            font-size: 10px;
            font-weight: bold;
            color: #2b2b2b;
        }

        #slider2-center-mid2-mob hr {
            border-top: 2px solid gray;
            width: 40px;
            margin-bottom: 200px;
        }

        #slider2-center-footer-mob {
            height: 10px;
            font-weight: bold;
            margin-top: 10px;
        }

        #slider2-button-mob {
            height: 20px;
            width: 50px;
            background-color: pink;
            color: white;
            border: 2px solid #24436e;
            margin: 10px;
            color: #24436e;
            font-weight: bold;
            font-size: 5px;
        }

        #slider2-button-mob:hover {
            background-color: #24436e;
            color: white;
        }

        #slide-effect-mob {
            animation: mySecond 1.9s 1;
            position: relative;
            animation-direction: normal;
        }

        /* slider slide2 css end */

        /* slider css end */

        /* card css start */
        #card-bar-center-mob {
            height: 100%;
            width: 100%;

        }

        /* card css end */

        /* Slider2 css start */
        #cbody-mob {
            background-color: gray;
            text-align: center;
            color: white;
            position: absolute;
            bottom: 0 !important;
            opacity: 0.8;
            /* height: 25%; */
            font-size: 5px;
            width: 100%;
            /* height: 0; */
            transition: .5s ease;
        }

        .hv2-mob:hover>#cbody-mob {
            /* animation-name: up-mob; */
            /* animation-duration: 1s; */
            height: 25%;
            /* padding-top: auto; */
            /* animation-fill-mode: forwards; */
        }

        .hv2-mob:hover>#main-img {
            webkit-filter: blur(4px);
            filter: blur(4px);
            animation-name: zoom;
            animation-duration: 1s;
            animation-fill-mode: forwards;
        }

        @keyframes up-mob {
            100% {
                margin-top: 75%;
                padding: auto !important;
                padding-top: none;
            }
        }

        /* Slider2 css end */

        /* card css start */
        .hv-mob:hover .over-mob {
            height: 80%;
        }

        .over-mob {
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

        #text-bg-mob {
            background-color: #24436e;
            width: 100%;
            height: 80%;
        }

        .text-mob {
            color: white;
            font-size: 10px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
            height: 50px;
            margin-top: 35px;
        }

        /* card css end */
        /* sider bar css start */
        /* The side navigation menu */


        /* mobile image product css */
        @media only screen and (max-width: 900px) {
            .card-group img {
                width: 100%;
            }

            #card-bar-center {
                height: 100%;
                width: 100%;
            }

            .sss {
                padding-left: 0;
                padding-right: 0;
            }

            .card-title {
                font-size: 7px !important;
            }
        }

        .card-img-overlay {

            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;

        }

        .card-title {
            font-size: 15px;
        }
    </style>
</head>

<body>

    <div class="d-none d-lg-block">
        <div id="header-desktop"></div>
        <!-- Enter code for desktop UI here -->
        <div id="c"></div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" id="high">
                    <img class="d-block w-100" src="./img/slide1.PNG" alt="First slide">
                    <div class="carousel-caption" style="display: flex;align-items: center;transform: translateY(-50%);top: 50%;padding-bottom: 0px !important;padding-top: 0px !important;">
                        <div id="slide1-center" style="padding-top: 0px !important;">
                            <div id="slider1-center-top" style="font-size: 2em;">
                                <h3 class="font-DancingScript-Regular">
                                    It has finally started
                                </h3>
                            </div>
                            <div id="slider1-center-mid1">
                                <p>HUGE SALE</p>
                            </div>
                            <div id="slider1-center-mid2">
                                <p>60% OFF</p>
                                <hr>
                            </div>
                            <div id="slider1-center-footer">
                                <input type="button" id="slider-button" value="BUY NOW">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" id="high">
                    <img class="d-block w-100" src="./img/slide2.PNG" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block"
                        style="right: 50%;display:flex !important;align-items: center; transform: translateY(-50%);position:absolute;right: none; bottom: none; top:50%;left:15%;z-index:10;padding-top:none;padding-bottom: none; text-align: center;">
                        <div id="slide2-center">
                            <div id="slider2-center-top">
                                <h3 style="font-size: 32px;" class="font-DancingScript-Regular">
                                    Mega Discount
                                </h3>
                            </div>
                            <div id="slider2-center-mid1" style="font-size: 1.5em;">
                                <p>LOCKDOWN OFFER</p>
                            </div>
                            <div id="slider2-center-mid2">
                                <p><span id="slide-effect">DATABASE PRICE STARTS</span><br>
                                    From ₹999</p>
                                <hr>
                                <br>
                            </div>
                            <div id="slider2-center-footer">
                                <input type="button" id="slider2-button" value="SHOP NOW">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="text-bar" class="container" style="padding-top: 40px; font-size: 1.25em;">
            <h4 class="section-title section-title-center txt-section" id="">
                <b></b>
                <span class="section-title-main"
                    style="text-align: center;margin: 0 15px;text-transform: uppercase;">Best Selling Products</span>
                <b></b>
            </h4>
        </div>
        <!-- product element start -->
        <div id="card-bar" class="container-fluid">
            <div id="card-bar-center" class="container">
                <div class="row mx-md-n5">
                    <div class="col-3 px-md-5">
                        <div class="row">
                            <div class="col">
                                <div class="hv">
                                    <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
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
                            <h6 style="text-align: left;"><a href="#" class="font-Lato-Regular">All India Complete Database</a><br>₹1,299.00</h6>
                        </div>

                    </div>
                    <div class="col-3 px-md-5">
                        <div class="row">
                            <div class="col">
                                <div class="hv">
                                    <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
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
                            <h6 style="text-align: left;"><a href="#" class="font-Lato-Regular">All India Complete Database</a><br>₹1,299.00</h6>
                        </div>

                    </div>
                    <div class="col-3 px-md-5">
                        <div class="row">
                            <div class="col">
                                <div class="hv">
                                    <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
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
                            <h6 style="text-align: left;"><a href="#" class="font-Lato-Regular">All India Complete Database</a><br>₹1,299.00</h6>
                        </div>

                    </div>
                    <div class="col-3 px-md-5">
                        <div class="row">
                            <div class="col">
                                <div class="hv">
                                    <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
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
                                                <div class="text" class="font-Lato-Regular">QUICK VIEW</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <h6 style="text-align: left;"><a href="#" class="font-Lato-Regular">All India Complete Database</a><br>₹1,299.00</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- product element end -->

        <!-- product element row2 -->
        <div id="card-bar" class="container-fluid">
            <div id="card-bar-center" class="container">
                <div class="row mx-md-n5">
                    <div class="col-3 px-md-5">
                        <div class="row">
                            <div class="col">
                                <div class="hv">
                                    <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
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
                        <div class="row">
                            <h6 style="text-align: left;"><a href="#" class="font-Lato-Regular">All India Complete Database</a><br>₹1,299.00</h6>
                        </div>

                    </div>
                    <div class="col-3 px-md-5">
                        <div class="row">
                            <div class="col">
                                <div class="hv">
                                    <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
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
                                                <div class="text" class="font-Lato-Regular">QUICK VIEW</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <h6 style="text-align: left;"><a href="#" class="font-Lato-Regular">All India Complete Database</a><br>₹1,299.00</h6>
                        </div>

                    </div>
                    <div class="col-3 px-md-5">
                        <div class="row">
                            <div class="col">
                                <div class="hv">
                                    <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
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
                                                <div class="text" class="font-Lato-Regular">QUICK VIEW</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <h6 style="text-align: left;"><a href="#" class="font-Lato-Regular">All India Complete Database</a><br>₹1,299.00</h6>
                        </div>

                    </div>
                    <div class="col-3 px-md-5">
                        <div class="row">
                            <div class="col">
                                <div class="hv">
                                    <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
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
                                                <div class="text" class="font-Lato-Regular">QUICK VIEW</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <h6 style="text-align: left;"><a href="#" class="font-Lato-Regular"> All India Complete Database</a><br>₹1,299.00</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- product element row2 end -->
        <div id="button-bar" class="container-fluid">
            <div id="button-bar-center" class="container" style="padding-top: 20px; ">
                <button type="button" class="btn font-Lato-Regular" id="button-color"
                    style=" transition: transform .3s, box-shadow .3s, background-color .3s, color .3s, opacity .3s;box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.22); ">SHOW
                    ALL</button>
            </div>
        </div>

        <div id="text-bar" class="container" style="padding-top: 20px;">
            <h4 class="section-title section-title-center txt-section" id="">
                <b></b>
                <span class="section-title-main font-Lato-Regular"
                    style="text-align: center;margin: 0 15px;text-transform: uppercase; font-size: 1.25em;">Browse by
                    categories</span>
                <b></b>
            </h4>
        </div>

        <div id="card-bar" class="container-fluid">
            <div id="card-bar-center" class="container">
                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-group">
                                <div class="card hv2">
                                    <img class="card-img" src="./img/data.png" alt="Card image" id="main-img">
                                    <div class="card-img-overlay" id="cbody">
                                        <p class="mb-0 card-title font-Lato-Regular">WHATSAPP NUMBER DATABASE</p>
                                    </div>
                                </div>
                                <div class="card hv2">
                                    <img class="card-img" src="./img/data.png" alt="Card image" id="main-img">
                                    <div class="card-img-overlay" id="cbody">
                                        <p class="mb-0 card-title font-Lato-Regular">WHATSAPP NUMBER DATABASE</p>
                                    </div>
                                </div>
                                <div class="card hv2">
                                    <img class="card-img" src="./img/data.png" alt="Card image" id="main-img">
                                    <div class="card-img-overlay" id="cbody">
                                        <p class="mb-0 card-title font-Lato-Regular">WHATSAPP NUMBER DATABASE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-group">
                                <div class="card hv2">
                                    <img class="card-img" src="./img/data.png" alt="Card image" id="main-img">
                                    <div class="card-img-overlay" id="cbody">
                                        <p class="mb-0 card-title font-Lato-Regular">WHATSAPP NUMBER DATABASE</p>
                                    </div>
                                </div>
                                <div class="card hv2">
                                    <img class="card-img" src="./img/data.png" alt="Card image" id="main-img">
                                    <div class="card-img-overlay" id="cbody">
                                        <p class="mb-0 card-title font-Lato-Regular">WHATSAPP NUMBER DATABASE</p>
                                    </div>
                                </div>
                                <div class="card hv2">
                                    <img class="card-img" src="./img/data.png" alt="Card image" id="main-img">
                                    <div class="card-img-overlay" id="cbody">
                                        <p class="mb-0 card-title font-Lato-Regular">WHATSAPP NUMBER DATABASE</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

        <div id="card-bar" class="container-fluid">
            <div id="card-bar-center" class="container">
                <div class="card-group">
                    <div class="card f">
                        <img class="card-img-top center" src="./img/f.PNG" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" style="color:#2b2b2b;font-weight: 700;" class="font-Lato-Regular">Data Accuracy</a></h5>
                            <p class="card-text" class="font-Lato-Regular">Our verified email and mobile number lists have the accurate and
                                updated information you would like to make a reliable business database.</p>
                        </div>
                    </div>
                    <div class="card f">
                        <img class="card-img-top" src="./img/one.PNG" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" style="color: #2b2b2b;font-weight: 700;" class="font-Lato-Regular">Cheapest Price Ever</a></h5>
                            <p class="card-text" class="font-Lato-Regular">We are offering the cheapest price ever on the web for such a huge
                                data. You are getting more than 50% OFF than any competitor found on the web.</p>
                        </div>
                    </div>
                    <div class="card f">
                        <img class="card-img-top" src="./img/two.PNG" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><a href="#" style="color:#2b2b2b; font-weight: 700;" class="font-Lato-Regular">Weekly Update</a></h5>
                            <p class="card-text" class="font-Lato-Regular">We update all database on weekly basis. You will always get the latest
                                data sorted by our hard working team. You can compare our data with any other data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer-desktop"></div>

    </div>

    <!-- mobile view -->
    <div class="d-lg-none">
        <!-- Enter Code for Mobile UI here -->
        <!-- header-->
        <div id="header-mob"></div>


        <!-- end header -->

        <!-- Slider Start -->
        <div class="container-fluid">
            <div class="row">
                <div id="carouselExampleIndicators8" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 100%;">
                            <img class="d-block w-100" src="./img/slide1.PNG" alt="First slide">
                            <div class="carousel-caption"
                            style="bottom:unset;padding-top:0px;padding-bottom: 0px;transform : translateY(-50%);position: absolute;right: 15%;top: 50%;left:15%;z-index: 10;height: auto;">
                                <div id="slide1-center-mob">
                                    <div id="slider1-center-top-mob" >
                                        <p class="font-DancingScript-Regular">
                                            It has finally started
                                        </p>
                                    </div>
                                    <div id="slider1-center-mid1-mob">
                                        <p>HUGE SALE</p>
                                    </div>
                                    <div id="slider1-center-mid2-mob">
                                        <p>60% OFF</p>
                                        <hr>
                                    </div>
                                    <div id="slider1-center-footer-mob">
                                        <input type="button" id="slider-button-mob" value="BUY NOW">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 100%;">
                            <img class="d-block w-100" src="./img/slide2.PNG" alt="Second slide">
                            <div class="carousel-caption"
                            style="bottom:unset;padding-top:0px;padding-bottom: 0px;transform : translateY(-50%);position: absolute;right: 15%;top: 50%;left:15%;z-index: 10;height: auto;">
                                <div id="slide2-center-mob">
                                    <div id="slider2-center-top-mob">
                                        <p class="font-DancingScript-Regular">
                                            Mega Discount
                                        </p>
                                    </div>
                                    <div id="slider2-center-mid1-mob">
                                        <p>LOCKDOWN OFFER</p>
                                    </div>
                                    <div id="slider2-center-mid2-mob">
                                        <p><span id="slide-effect-mob">DATABASE PRICE STARTS</span><br>
                                            From ₹999</p>
                                        <br>
                                    </div>
                                    <div id="slider2-center-footer-mob">
                                        <input type="button" id="slider2-button-mob" value="SHOP NOW">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev-mob" href="#carouselExampleIndicators8" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon-mob" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next-mob" href="#carouselExampleIndicators8" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon-mob" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Slider End -->

        <!-- text bar start -->
        <div id="text-bar" class="container" style="padding-top: 20px; height: 10px; padding-bottom: 0;">
            <h4 class="section-title section-title-center txt-section" id="">
                <b></b>
                <span class="text font-Lato-Regular" style="color: black; text-align: center;margin: 0 5px;text-transform: uppercase; font-size: 10px;">Best
                    Selling Products</span>
                <b></b>
            </h4>
        </div>
        <!-- text bar end -->

        <!-- card start -->
        <div id="card-bar-mob" class="container-fluid">
            <div id="card-bar-center-mob" class="container-sm ">
                <div class="row row mx-md-n5">
                    <div class="col-6 px-md-5">
                        <div class="row">
                            <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
                        </div>
                        <div class="row mt-2">
                            <p style="text-align: left; font-size: 12px; font-weight: bold; color:black;"class="text font-Lato-Regular" ><a href="#">All India
                                    Complete
                                    Database</a><br>₹1,299.00</p>
                        </div>
                    </div>
                    <div class="col-6 px-md-5">
                        <div class="row">
                            <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
                        </div>
                        <div class="row mt-2">
                            <p style="text-align: left; font-size: 12px; font-weight: bold; color:black;" class="text font-Lato-Regular"><a href="#">All India
                                    Complete
                                    Database</a><br>₹1,299.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card end -->
        <!-- card start -->
        <div id="card-bar-mob" class="container-fluid">
            <div id="card-bar-center-mob" class="container-sm ">
                <div class="row row mx-md-n5">
                    <div class="col-6 px-md-5">
                        <div class="row">
                            <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
                        </div>
                        <div class="row mt-2">
                            <p style="text-align: left; font-size: 12px; font-weight: bold;color:black; " class="text font-Lato-Regular"><a href="#">All India
                                    Complete
                                    Database</a><br>₹1,299.00</p>
                        </div>
                    </div>
                    <div class="col-6 px-md-5">
                        <div class="row">
                            <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
                        </div>
                        <div class="row mt-2">
                            <p style="text-align: left; font-size: 12px; font-weight: bold;color:black;" class="text font-Lato-Regular"><a href="#">All India
                                    Complete
                                    Database</a><br>₹1,299.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card end -->
        <!-- card start -->
        <div id="card-bar-mob" class="container-fluid">
            <div id="card-bar-center-mob" class="container-sm ">
                <div class="row row mx-md-n5">
                    <div class="col-6 px-md-5">
                        <div class="row">
                            <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
                        </div>
                        <div class="row mt-2">
                            <p style="text-align: left; font-size: 12px; font-weight: bold; color:black;" class="text font-Lato-Regular"><a href="#">All India
                                    Complete
                                    Database</a><br>₹1,299.00</p>
                        </div>
                    </div>
                    <div class="col-6 px-md-5">
                        <div class="row">
                            <img class="card-img-top center" src="./img/data.png" alt="Card image cap">
                        </div>
                        <div class="row mt-2">
                            <p style="text-align: left; font-size: 12px; font-weight: bold;color:black;" class="text font-Lato-Regular"><a href="#">All India
                                    Complete
                                    Database</a><br>₹1,299.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- card end -->
        <!-- button start -->
        <div id="button-bar" class="container-fluid">
            <div id="button-bar-center" class="container" style="padding-top: 0; ">
                <button type="button" class="btn text font-Lato-Regular" id="button-color"
                    style=" transition: transform .3s, box-shadow .3s, background-color .3s, color .3s, opacity .3s;box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.22); ">SHOW
                    ALL</button>
            </div>
        </div>
        <!-- button end -->

        <!-- text bar start -->
        <div id="text-bar" class="container" style="padding-top: 0;">
            <h4 class="section-title section-title-center txt-section" id="">
                <b></b>
                <span class="section-title-main text font-Lato-Regular"
                    style="text-align: center;margin: 0 15px;text-transform: uppercase; font-size: 10px; color: black;">Browse by
                    categories</span>
                <b></b>
            </h4>
        </div>


        <!-- slider2 start -->
        <div class="container-fluid">

            <div id="card-bar-center" class="container">
                <div id="carouselExampleIndicators13" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card-group">
                                <div class="row row-cols-2">
                                    <div class="col-sm sss">
                                        <div class="card">
                                            <img class="card-img" src="./img/data.png" alt="Card image" id="main-img">
                                            <div id="cbody-mob">
                                                <p class="card-title mb-0 text font-Lato-Regular"
                                                    style="padding: 10px;height: 100%;display: flex;justify-content: center;text-align: center;align-items: center;">
                                                    WHATSAPP NUMBER DATABASE</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm sss">
                                        <div class="card">
                                            <img class="card-img" src="./img/data.png" alt="Card image" id="main-img">
                                            <div id="cbody-mob">
                                                <p class="card-title mb-0 text font-Lato-Regular"
                                                    style="padding: 10px;height: 100%;display: flex;justify-content: center;text-align: center;align-items: center;">
                                                    WHATSAPP NUMBER DATABASE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card-group">
                                <div class="row row-cols-2">
                                    <div class="col-sm sss">
                                        <div class="card">
                                            <img class="card-img" src="./img/data.png" alt="Card image" id="main-img">
                                            <div id="cbody-mob">
                                                <p class="card-title mb-0 text font-Lato-Regular"
                                                    style="padding: 10px;height: 100%;display: flex;justify-content: center;text-align: center;align-items: center;">
                                                    WHATSAPP NUMBER DATABASE</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm sss">
                                        <div class="card ">
                                            <img class="card-img" src="./img/data.png" alt="Card image" id="main-img">
                                            <div id="cbody-mob">
                                                <p class="card-title mb-0 text font-Lato-Regular"
                                                    style="padding: 10px;height: 100%;display: flex;justify-content: center;text-align: center;align-items: center;">
                                                    WHATSAPP NUMBER DATABASE</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators13" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon-mob2" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators13" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon-mob2" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


        </div>
        <!-- slider2 end -->
        <!-- footer cards start -->
        <div class="container-fluid">
            <div class="container">
                <div class="card-groupx">

                    <div class="row">
                        <div class="col-sm">
                            <div class="card f">
                                <img class="card-img-top center" src="./img/f.PNG" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" style="color:#2b2b2b;font-weight: 700;" class="text font-Lato-Regular">Data Accuracy</a></h5>
                                    <p class="card-text" class="text font-Lato-Regular">Our verified email and mobile number lists have the
                                        accurate
                                        and
                                        updated information you would like to make a reliable business database.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card f">
                                <img class="card-img-top" src="./img/one.PNG" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" style="color:#2b2b2b;font-weight: 700;" class="text font-Lato-Regular">Cheapest Price Ever</a>
                                    </h5>
                                    <p class="card-text" class="text font-Lato-Regular">We are offering the cheapest price ever on the web for such
                                        a
                                        huge
                                        data. You are getting more than 50% OFF than any competitor found on the
                                        web.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="card f">
                                <img class="card-img-top" src="./img/two.PNG" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="#" style="color:#2b2b2b;font-weight: 700;" class="text font-Lato-Regular">Weekly Update</a></h5>
                                    <p class="card-text" class="text font-Lato-Regular">We update all database on weekly basis. You will always get
                                        the
                                        latest
                                        data sorted by our hard working team. You can compare our data with any
                                        other
                                        data.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- footer cards end -->
        <!-- footer text start-->
        <div id="footer-mob"></div>
    </div>
    <!-- footer text end -->
    




    </div>
    <!-- card end -->


    <!-- text bar end -->















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom_mobile_header.js"></script>

    <script>
        $("#header-desktop").load('template/header.php');
        $("#footer-desktop").load('template/footer.php');
        $("#footer-mob").load('template/footerMob.php');
        $("#header-mob").load('template/headerMob.php');
        // Add custom javascript and jquery here
        // nav var js
        /* Set the width of the side navigation to 250px */

       

    </script>
</body>

</html>