<?php
// register form
    include("./php/config.php");
    $error = "";
    if (array_key_exists("signup-button",$_POST)) {

        $data = array();  
        $from_ip = $_SERVER['REMOTE_ADDR'];
        $from_browser = $_SERVER['HTTP_USER_AGENT'];
        date_default_timezone_set("Asia/Calcutta");
        $date_now = date("r");
        
        if (!$_POST['signup-name']) {
            $error .= "Name is requried<br>";
        }
        if (!$_POST['signup-email']) {
            $error .= "Email is requried<br>";
        }
        if (!$_POST['signup-phone']) {
            $error .= "Phone number is requried<br>";
        }
        if (!$_POST['signup-password']) {
            $error .= "Password is requried<br>";
        }
        if (!$_POST['confirm-password']) {
            $error .= "Confirm password is requried<br>";
        }
        if ($_POST['confirm-password'] != $_POST['signup-password']) {
            $error .= "Password and confirm not match<br>";
        }
       
        if ($error != "") {
            $error = "<p>There were error(s) in your form</p>".$error;
        } else {
            $query = "SELECT id FROM `user` WHERE email = '".mysqli_real_escape_string($conn,$_POST['signup-email'])."' ";
            $result = mysqli_query($conn,$query);
            if (mysqli_num_rows($result) > 0) {
                $error = "email is already taken";
            } else {
                $hashpassword = mysqli_real_escape_string($conn,$_POST['signup-password']);
                $hashpasswordg = hash("sha512", $hashpassword);
                $query = "INSERT INTO `user`(`name`,`email`,`number`,`password`,`from_ip`,`from_browser`,`time`) VALUES ('".mysqli_real_escape_string($conn,$_POST['signup-name'])."','".mysqli_real_escape_string($conn,$_POST['signup-email'])."','".mysqli_real_escape_string($conn,$_POST['signup-phone'])."','$hashpasswordg','$from_ip','$from_browser','$date_now' ) ";
                if(!mysqli_query($conn,$query)) {
                    $error = "<p>could not sign you up</p>";
                } else {
                    $error = $hashpasswordg;

                }
            }
        }
    }
    // register form end
    
    // login form
    if (array_key_exists("login-buttong",$_POST)) {
        if (!$_POST['login-email']) {
            $error .= "Email is requried<br>";
        }
        if (!$_POST['login-password']) {
            $error .= "Password is requried<br>";
        }
        $inputpassword = mysqli_real_escape_string($conn,$_POST['login-password']);
        $inputpasswordg = hash("sha512", $inputpassword);
        if ($error != "") {
            $error = "<p>There were error(s) in your login form</p>".$error;
        } else {
            $query = "SELECT id FROM `user` WHERE email = '".mysqli_real_escape_string($conn,$_POST['login-email'])."' AND password = '$inputpasswordg'";
            $result = mysqli_query($conn,$query);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                setcookie("id", $row['id'], time() + 60*60*3); //   cookie
                session_start();
                $_SESSION['id'] = $row['id'];// session
                $error = "login done";
            } else {
                $error = "invalid email and password";
            }
        }
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
        #login-mail {
            font-family: Font Awesome\ 5 Free;
        }

        #login-password {
            font-family: Font Awesome\ 5 Free;
        }

        #login-button:hover {
            background-color: #24436e;
        }

        #login-button {
            background-color: #2f507e;
        }

        #field-outerDiv {
            border: 1px solid #8a92a3;
            padding: 2px;
        }

        #logobg {
            border: none;
            background-color: white;
        }

        #iconFormat {
            color: #cacbcc;
        }

        #inputField {
            height: auto;
            border: none;
            box-shadow: none;
        }

        /* toggle */
        /* #register-form {
           display : none;
        } */
        /* #login-form {
            display: none;
        } */
    </style>
</head>

<body>

    <div class="d-none d-lg-block">

        <!-- desktop header start -->
        <div id="header-desktop"></div>
        <!-- desktop header end -->

        <!-- error div -->
        <div class="container">
            <div id="error" style="width:35%;margin: 0 auto;">
                <?php if ($error!="") {
                    echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                    
                } ?>
            </div>
        </div>
        <!-- error div -->
        <!-- second bar start -->
        <div class="container hello" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;">
            <div id="register-form">
                <div style="width:100%;">
                    <h1 style="color:#2b2b2b; text-align:center; font-size: 1.25em;border-bottom: 2px solid rgba(0,0,0,0.1);padding-bottom: 7.5px; font-weight:700; margin:0px 0px 24px; width:30%; margin:auto;"
                        class="font-Lato-Regular">
                        Register now
                    </h1>
                </div>
                <div style="width:100%; margin-top: 30px;">
                    <div style="width:35%; margin:auto;">
                        <form method="post">
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"><i class="fa fa-user"
                                            id="iconFormat"></i></span>
                                    <input class="form-control textradius" type="text" name="signup-name"
                                        placeholder="Full Name" style="height: auto;" id="inputField">
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-envelope"
                                            id="iconFormat"></i> </span>
                                    <input class="form-control textradius" type="email" name="signup-email"
                                        placeholder="Email" style="height: auto;" id="inputField">
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"><i class="fa fa-phone"
                                            id="iconFormat"></i></span>
                                    <input class="form-control textradius"  type="number" name="signup-phone"
                                        placeholder="Contact Number" style="height: auto; " id="inputField">
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-lock"
                                            aria-hidden="true" id="iconFormat"></i> </span>
                                    <input class="form-control textradius" type="password" name="signup-password"
                                        placeholder="password" id="inputField">
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-lock"
                                            aria-hidden="true" id="iconFormat"></i> </span>
                                    <input class="form-control textradius" type="password" name="confirm-password"
                                        placeholder="Confirm Password" id="inputField">
                                </div>
                            </fieldset>
                            <div class="form-group form-check" style="margin:12px">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I’m in for emails with exciting
                                    discounts and personalized recommendations</label>
                            </div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn form-control" name="signup-button" style="color:white;"
                                        id="login-button">Create a Account</button>
                                </div>
                            </div>
                        </form>
                        <p style="text-align:center;">By signing up, you agree to our <a href="term">Terms of Use</a>
                            and<a href="policy"> Privacy Policy.</a></p>
                        <p style="text-align:center;">Already have an account?<a href="#" class="more">Login in</a></p>
                    </div>
                </div>
            </div>
            <div id="login-form">
                <div style="width:100%;">
                    <h1 style="color:#2b2b2b; text-align:center; font-size: 1.25em;border-bottom: 2px solid rgba(0,0,0,0.1);padding-bottom: 7.5px; font-weight:700; margin:0px 0px 24px; width:20%; margin:auto;"
                        class="font-Lato-Regular">
                        Log In to Your Account!
                    </h1>
                </div>
                <div style="width:100%; margin-top: 30px;">
                    <div style="width:35%; margin:auto;">
                        <form method="post">
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-envelope"
                                            id="iconFormat"></i> </span>
                                    <input class="form-control textradius" type="email" name="login-email"
                                        placeholder="Email" style="height: auto;" id="inputField">
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-lock"
                                            aria-hidden="true" id="iconFormat"></i> </span>
                                    <input class="form-control textradius" type="password" name="login-password"
                                        placeholder="password" id="inputField">
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn form-control" style="color:white;"
                                        id="login-button" name="login-buttong">LOGIN</button>
                                </div>
                            </div>
                        </form>
                        <p style="text-align:center;">or <a href="">Forgot Password</a></p>
                        <p style="text-align:center;">Don't have an account? <a href="#" class="more">Sign up</a></p>
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
        <!-- error bar start -->
        <div id="error">
            <?php if ($error!="") {
                  echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
                  
              } ?>
          </div>
        <!-- error bar end -->
        <!-- second bar start -->
        <div class="container" style="border-top: 1px solid rgb(221, 221, 221); padding: 20px 0px;">
            <div id="register-form-mob">
                <div style="width:100%;" class="hello">
                    <h1 style="color:#2b2b2b; text-align:center; font-size: 1.25em;border-bottom: 2px solid rgba(0,0,0,0.1);padding-bottom: 7.5px; font-weight:700; margin:0px 0px 24px; width:50%; margin:auto;"
                        class="font-Lato-Regular">
                        Register now
                    </h1>
                </div>
                <div style="width:100%; margin-top: 30px;">
                    <div style="width:90%; margin:auto;">
                        <form method="post">
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"><i class="fa fa-user"
                                            id="iconFormat"></i></span>
                                    <input class="form-control textradius" type="text" name="signup-name"
                                        placeholder="Full Name" style="height: auto;" id="inputField">
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-envelope"
                                            id="iconFormat"></i> </span>
                                    <input class="form-control textradius" type="email" name="signup-email"
                                        placeholder="Email" style="height: auto;" id="inputField">
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"><i class="fa fa-phone"
                                            id="iconFormat"></i></span>
                                    <input class="form-control textradius" type="number" name="signup-phone"
                                        placeholder="Contact Number" style="height: auto;" id="inputField">
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-lock"
                                            aria-hidden="true" id="iconFormat"></i> </span>
                                    <input class="form-control textradius" type="password" name="signup-password"
                                        placeholder="password" id="inputField">
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-lock"
                                            aria-hidden="true" id="iconFormat"></i> </span>
                                    <input class="form-control textradius" type="password" name="confirm-password"
                                        placeholder="Confirm Password" id="inputField">
                                </div>
                            </fieldset>
                            <div class="form-group form-check" style="margin:12px">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I’m in for emails with exciting
                                    discounts and personalized recommendations</label>
                            </div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn form-control" style="color:white;"
                                        id="login-button">Create a Account</button>
                                </div>
                            </div>
                        </form>
                        <p style="text-align:center;">By signing up, you agree to our <a href="term">Terms of Use</a>
                            and<a href="policy"> Privacy Policy.</a></p>
                        <p style="text-align:center;">Already have an account?<a href="#" class="more-mob">Login in</a>
                        </p>
                    </div>
                </div>
            </div>
            <div id="login-form-mob">
                <div style="width:100%;">
                    <h1 style="color:#2b2b2b; text-align:center; font-size: 1.25em;border-bottom: 2px solid rgba(0,0,0,0.1);padding-bottom: 7.5px; font-weight:700; margin:0px 0px 24px; width:50%; margin:auto;"
                        class="font-Lato-Regular">
                        Log In to Your Account!
                    </h1>
                </div>
                <div style="width:100%; margin-top: 30px;">
                    <div style="width:90%; margin:auto;">
                        <form method="post">
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-envelope"
                                            id="iconFormat"></i> </span>
                                    <input class="form-control textradius" type="email" name="login-email"
                                        placeholder="Email" style="height: auto;" id="inputField">
                                </div>
                            </fieldset>
                            <fieldset class="form-group">
                                <div class="input-group-prepend" id="field-outerDiv">
                                    <span class="input-group-text iconradius" id="logobg"> <i class="fa fa-lock"
                                            aria-hidden="true" id="iconFormat"></i> </span>
                                    <input class="form-control textradius" type="password" name="login-password"
                                        placeholder="password" id="inputField">
                                </div>
                            </fieldset>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn form-control" style="color:white;"
                                        id="login-button" name="login-buttong">LOGIN</button>
                                </div>
                            </div>
                        </form>
                        <p style="text-align:center;">or <a href="">Forgot Password</a></p>
                        <p style="text-align:center;">Don't have an account? <a href="#" class="more-mob">Sign up</a>
                        </p>
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
    <script src="https://use.fontawesome.com/ebc80d226d.js"></script>

    <script>

        // Add custom javascript and jquery here
        // including header footer
        $("#header-desktop").load('template/header.php');
        $("#footer-desktop").load('template/footer.php');
        $("#footer-mob").load('template/footerMob.php');
        $("#header-mob").load('template/headerMob.php');
        // desktop view toggle
        $(document).ready(function () {
            $("#register-form").hide();
            $(".more").click(function () {
                $("#login-form").toggle();
                $("#register-form").toggle();
            });

            // mobile view toggle
            $("#register-form-mob").hide();
            $(".more-mob").click(function () {
                $("#login-form-mob").toggle();
                $("#register-form-mob").toggle();
            });
        });

    </script>
</body>

</html>