<?php  include('function.php');  ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Africa University Scholership</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/png" href="assets_2/images/icon/favicon.ico">
    <!-- all css here -->
    <link rel="stylesheet" href="assets_2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets_2/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets_2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets_2/css/magnific-popup.css">
    <link rel="stylesheet" href="assets_2/css/slicknav.min.css">
    <link rel="stylesheet" href="assets_2/css/typography.css">
    <link rel="stylesheet" href="assets_2/css/default-css.css">
    <link rel="stylesheet" href="assets_2/css/styles.css">
    <link rel="stylesheet" href="assets_2/css/responsive.css">
    <!--color css-->
    <link rel="stylesheet" id="triggerColor" href="assets_2/css/triggerplate/color-0.css">
    <!-- modernizr css -->
    <script src="assets_2/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- prealoader area end -->
    
<?php

if(isset($_POST['login'])){

$email = $_POST['email'];
$pass = $_POST['pass'];


    Login($email, $pass);
}


?>



    <!-- header area start -->
    <header id="header">
        <!-- header two area start -->
        <div class="header-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-sm-6 d-block d-lg-none">
                        <!-- <div class="logo">
                            <a href="index.php"><img src="assets_2/images/icon/logo.png" alt="logo"></a>
                        </div> -->
                    </div>
                    <div class="col-lg-9 offset-lg-1 d-none d-lg-block">
                        <div class="main-menu menu-style2">
                            <nav>
                                <ul id="m_menu_active">
                                

                                <?php  if(isset($_SESSION['user_id'])){            ?>
                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="courses.php">Scholarships</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="profile.php">Profile</a></li>
                                    <li><a href="my_scholership.php">My Scholarship</a></li>
                                    <li><a href="logout.php">Log out</a></li>
                                    <?php }else{ ?>

                                    <li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="courses.php">Scholarships</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <?php } ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-2 col-sm-5">
                        <div class="header-bottom-right-style-2">
                            <ul>
                                <?php  if(isset($_SESSION['user_id'])){            ?>
                                   <?php include("user_notification.php");  ?> <a href="my_scholership.php"><i class="fa fa-bell-o"></i></a>
                                   <!-- <i class="fa fa-bell-o"></i> -->
                    <!-- <li><a class="btn btn-light btn-round"  href="logout.php">Log out</a></li> -->
                   <?php   echo  $_SESSION['user_name'];        ?>

                                    <?php }else{  ?>
                                <li><a data-toggle="modal" data-target="#exampleModal" class="btn btn-light btn-round" href="#">Log in</a></li>
                                <!-- <li><a data-toggle="modal" data-target="#exampleModal2"  class="btn btn-primary btn-round" class="active" href="#">Sign Up</a></li> -->
                                <li><a class="btn btn-primary btn-round" class="active" href="registration.php">Sign Up</a></li>
<?php       }    ?>
                            </ul>
                        </div>
                        <!-- Button trigger modal -->  
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content p-5">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Login Here</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form action="index.php" method="POST"> 
                                    <input type="email" name="email" placeholder="Enter Your Email.." required="required">
                                    <input type="password" name="pass" placeholder="Enter Your Paddword" required="required">
                                    <!-- <label class="checkbox-inline mr-5"><input type="checkbox" value="">Remember Me</label>  -->
                                    <a class="primary-color" href="registration.php"><u>I dont have Account</u></a>
                                    <input class="btn btn-primary btn-sm" name="login" type="submit" value="Login">
                                </form> 
                                <!-- Login($email, $pass) -->
                              </div> 
                            </div>
                          </div>
                        </div> 

                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content p-5">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Please Sign Up Here</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body"> 
                                <form class="signup-form text-center">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <input type="email" placeholder="Enter Your Email.." required="">
                                    <input type="password" placeholder="Enter Your Password">
                                    <label class="checkbox-inline"><input type="checkbox" value="">I Agree</label> 
                                    <input class="btn btn-primary btn-sm" type="submit" value="Register Now">
                                </form> 
                              </div> 
                            </div>
                          </div>
                        </div>
                    </div><!-- col-lg-2 -->
                    <div class="col-12 d-block d-lg-none">
                        <div id="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header two area end -->
    </header>
    <!-- header area end -->
