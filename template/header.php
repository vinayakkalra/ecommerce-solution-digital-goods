 <!-- header -->
 <?php
        session_start();
        include("../php/config.php");
        ?>
    <div id="top-bar" class="container-fluid">
    <div id="top-bar-center" class="container-sm">
        <div id="top-bar-left" class="container-sm">
            <p class="font-Lato-Regular">
                SAVE 25% USE COUPON : <u>FLAT25</u>
            </p>
        </div>
        <div id="top-bar-right" class="container-sm">


            <?php
                if ((array_key_exists("dataexporid", $_SESSION) and $_SESSION['dataexporid'] and $_SESSION['dataexportmail']) or (array_key_exists("dataexporid", $_COOKIE) and $_COOKIE['dataexporid']  and $_COOKIE['dataexportmail'])) {
            ?> 
            <a href="order" role="button" class="font-Lato-Regular">My Orders</a>
            <a href="index?logout=1" class="font-Lato-Regular">Log out</a>
            <?php
                } else {
            ?>
            <a href="signup" class="font-Lato-Regular">Login</a>
            <?php
                }
            ?>



            <a href="about.php" role="button" class="font-Lato-Regular">About us</a>
            <a href="contact" role="button" class="font-Lato-Regular">Contace us</a>
            <!-- <a id="shop" href="#" role="button" class="font-Lato-Regular">Shop</a> -->
        </div>
    </div>
</div>
<div id="c"></div>
<div id="second-bar" class="container-fluid">
    <div id="second-bar-center" class="container-sm">
        <div id="second-bar-left" class="container-sm">
            <img  style="cursor:pointer;" onclick="location.href='index';" src="./images/head.png">
        </div>
        <div id="second-bar-mid" class="container-sm">
            <a href="index" class="font-Lato-Regular">HOME</a>
            <a href="product-category?Product=1"  class="font-Lato-Regular list-group-itemssheader">B2B & B2C</a>
            <a href="product-category?Product=2"  class="font-Lato-Regular list-group-itemssheader">GOVERMENT</a>
            <a href="product-category?Product=3"  class="font-Lato-Regular list-group-itemssheader">STUDENTS</a>
            <a href="product-category?Product=4"  class="font-Lato-Regular list-group-itemssheader">JOB SEEKERS</a>
            <a href="product-category?Product=5"  class="font-Lato-Regular list-group-itemssheader">ALL INDIA</a>
            <a href="product-category?Product=6"  class="font-Lato-Regular list-group-itemssheader">OTHER DATABASES</a>
        </div>
        <!-- <div id="second-bar-right" class="container-sm">
            <a href="#"><img src="./img/right.PNG"></a>
        </div> -->

    </div>
</div>
   

