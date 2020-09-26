<?php
    include("./php/config.php");
    $error = "";
    if (array_key_exists("forget-buttong",$_POST)) {
        if (!$_POST['forget-email']) {
            $error .= "Email is requried<br>";
        }
        if (!$_POST['forget-password']) {
            $error .= "Password is requried<br>";
        }
        if (!$_POST['forget-ConfirmPassword']) {
            $error .= "Confirm is requried<br>";
        }
        if ($_POST['forget-ConfirmPassword'] != $_POST['forget-password']) {
            $error .= "Password and Confirm Password not match<br>";
        }
        if ($error != "") {
            $error = "<p>There were error(s) in your form</p>".$error;
        } else {
            $query = "SELECT id FROM `user` WHERE email = '".mysqli_real_escape_string($conn,$_POST['forget-email'])."' ";
            $result = mysqli_query($conn,$query);
            if (mysqli_num_rows($result) > 0) {
                $password = mysqli_real_escape_string($conn,$_POST['forget-password']);
                $input = hash("sha512", $password);
                $query = "UPDATE `user` SET password = '".$input."' WHERE email = '".mysqli_real_escape_string($conn, $_POST['forget-email'])."' LIMIT 1";
                mysqli_query($conn, $query);
                header("Location: signup");
            } else {
                $error .= "invalid email";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Enter a proper page title here -->
    <title>Forget Password | BULKDATABASE PROVIDER</title>

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
        .login-button:hover {
            background-color: #24436e;
        }

        .login-button {
            background-color: #2f507e;
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
        <!-- error -->
        <div id="error" style="width:35%;margin: 0 auto;">
            <?php if ($error!="") {
                echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                    
            } ?>
        </div>
        <!-- error -->
            <div style="width:100%;" class="hello">
                <h1 style="color:#2b2b2b; text-align:center; font-size: 1.25em;border-bottom: 2px solid rgba(0,0,0,0.1);padding-bottom: 7.5px; font-weight:700; margin:0px 0px 24px; width:30%; margin:auto;" class="font-Lato-Regular">
                    Forget Password
                </h1>
            </div>
            <div style="width:100%; margin-top: 30px;">
                <div style="width:35%; margin:auto;">
                    <form method="post">
                        <fieldset class="form-group">
                            <div class="input-group-prepend" id="field-outerDiv">
                                <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-envelope"
                                        id="iconFormat"></i> </span>
                                <input class="form-control textradius" type="email" name="forget-email"
                                    placeholder="Email" style="height: auto;" id="inputField">
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="input-group-prepend" id="field-outerDiv">
                                <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-lock"
                                        aria-hidden="true" id="iconFormat"></i> </span>
                                <input class="form-control textradius" type="password" name="forget-password"
                                    placeholder="password" id="inputField">
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="input-group-prepend" id="field-outerDiv">
                                <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-lock"
                                        aria-hidden="true" id="iconFormat"></i> </span>
                                <input class="form-control textradius" type="password" name="forget-ConfirmPassword"
                                    placeholder="confirm password" id="inputField">
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn form-control login-button" style="color:white;"
                                 name="forget-buttong">Change Password</button>
                            </div>
                        </div>
                    </form>
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
         <div class="container" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;">
            <!-- error -->
            <div id="error" style="width:90%;margin: 0 auto;">
                <?php if ($error!="") {
                    echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                    
                } ?>
            </div>
            <!-- error -->
            <div style="width:100%;" class="hello">
                <h1 style="color:#2b2b2b; text-align:center; font-size: 1.25em;border-bottom: 2px solid rgba(0,0,0,0.1);padding-bottom: 7.5px; font-weight:700; margin:0px 0px 24px; width:50%; margin:auto;" class="font-Lato-Regular">
                    Forget Password
                </h1>
            </div>
            <div style="width:100%; margin-top: 30px;">
                <div style="width:100%; margin:auto;">
                    <form method="post">
                        <fieldset class="form-group">
                            <div class="input-group-prepend" id="field-outerDiv">
                                <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-envelope"
                                        id="iconFormat"></i> </span>
                                <input class="form-control textradius" type="email" name="forget-email"
                                    placeholder="Email" style="height: auto;" id="inputField">
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="input-group-prepend" id="field-outerDiv">
                                <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-lock"
                                        aria-hidden="true" id="iconFormat"></i> </span>
                                <input class="form-control textradius" type="password" name="forget-password"
                                    placeholder="password" id="inputField">
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <div class="input-group-prepend" id="field-outerDiv">
                                <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-lock"
                                        aria-hidden="true" id="iconFormat"></i> </span>
                                <input class="form-control textradius" type="password" name="forget-ConfirmPassword"
                                    placeholder="confirm password" id="inputField">
                            </div>
                        </fieldset>
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn form-control login-button" style="color:white;"
                                 name="forget-buttong">Change Password</button>
                            </div>
                        </div>
                    </form>
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