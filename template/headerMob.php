<?php
    session_start();
    include("../php/config.php");
?>
<html>
    <head>

    </head>
    <body>
        <!-- Top Bar- Start -->
<div class="container-fluid" style="background-color:#24436e; height: auto;">
    <div class="container-sm" style="margin: auto;">
        <div class="row" style="color:white; text-align: center; padding: 2px; font-weight: bold;">
            <div class="col-sm" class="text font-Lato-Regular">
                SAVE 25% COUPON : <u class="text font-Lato-Regular">FLAT25</u>
            </div>
        </div>
    </div>
</div>
<!-- Top Bar- End -->

<!-- Second Bar-Start -->
<div class="container-fluid" style=" height: auto; padding:0;">
    <div class="container" style=" width: 100%;">
        <div class="row row-cols-3 align-items-center" style="padding: 2%;">
            <div class="col-sm">
                <!-- Hamburger Menu-Start -->
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="index" class="text font-Lato-Regular" style="text-align: left;">HOME</a>
                    <a href="product-category?Product=1" class="text font-Lato-Regular" style="text-align: left;">B2B & B2C</a>
                    <a href="product-category?Product=2" class="text font-Lato-Regular" style="text-align: left;">GOVERNMENT</a>
                    <a href="product-category?Product=3" class="text font-Lato-Regular" style="text-align: left;">STUDENTS</a>
                    <a href="product-category?Product=4" class="text font-Lato-Regular" style="text-align: left;">JOB SEEKERS</a>
                    <a href="product-category?Product=5" class="text font-Lato-Regular" style="text-align: left;">ALL INDIA</a>
                    <a href="product-category?Product=6" class="text font-Lato-Regular" style="text-align: left;">OTHER DATABASES</a>
                    <a href="about.php" class="text font-Lato-Regular" style="text-align: left;">ABOUT US</a>
                    <a href="contact" class="text font-Lato-Regular" style="text-align: left;">CONTACT US</a>
                    <a href="#" class="text font-Lato-Regular" style="text-align: left;">SHOP</a>

                    <?php
                        if ((array_key_exists("dataexporid", $_SESSION) and $_SESSION['dataexporid'] and $_SESSION['dataexportmail']) or (array_key_exists("dataexporid", $_COOKIE) and $_COOKIE['dataexporid']  and $_COOKIE['dataexportmail'])) {
                    ?>
                    <a href="index?logout=1" class="text font-Lato-Regular" style="text-align: left;">LOG OUT</a>
                    <?php
                        } else {
                    ?>


                    <a href="signup" class="text font-Lato-Regular" style="text-align: left;">LOGIN</a>

                    
                    <?php
                    }
                    ?>
                  </div>
                  
                  <!-- Use any element to open the sidenav -->
                  <span onclick="openNav()">&#9776;</span>
                  
                  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
                <!-- Hamburger Menu-End -->
            </div>
            <div class="col-sm">
                <img src="./img/logo.png" width="100%" height="100%">
            </div>
            <div class="col-sm text-center" >
                <img src="./img/mob.PNG" style="height: 30%; width: 30%;">
            </div>
        </div>
    </div>
</div>
<!-- Second Bar End -->


<!-- modal -->


        
    </body>
</html>
