<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Sync is a landing page HTML template built with Bootstrap 4 for presenting mobile apps to the online audience and for getting visitors to become users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Webpage Title -->
    <title>Roel's Web Based Junk Shop - Personal Info</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<?php 
    session_start();
    if (!isset($_SESSION['unique_id'])) {
        header("location: index.php");
    }
?>

<body data-spy="scroll" data-target=".fixed-top">
    <?php
        include_once "php/config.php"; 
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if (mysqli_num_rows($sql) > 0) {
            $row = mysqli_fetch_assoc($sql);
        }
    ?>
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    
    <!-- Style -->
<style>
    .inputbox input{
        height: 40px;
        width: 350px;
        margin-top: 10px;
        padding-left: 5px;
        border-radius: 5px;
        border: 1px solid #c7c7c7;
        background-color: #e0e0e0;
    }
    .button input{
        height: 40px;
        width: 350px;
        margin-top: 10px;
        padding-left: 5px;
        border-radius: 5px;
    }
    .inputbox input:focus {
        outline: none;
    }
    .inputimg input{
        height: 40px;
        width: 350px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #c7c7c7;
        background-color: #e0e0e0;
    }
    .inputimg #upload-img::-webkit-file-upload-button {
        border: none;
        height: 100%;
        width: 100px;
        justify-content: center;
    }
    .button a{
        margin-top: 10px;
        width: 350px;
        height: 40px;
        color: white;
        border-radius: 5px;
    }
    .lightbox-pop img{
        width: 100px;
        height: 100px;
        box-shadow: 0 0 5px #ff556e;
        border-radius: 100px;
        margin: 20px 0px 5px 0px;
    }
    .error{
        color: #721c24;
        background: #f8d7da;
        padding: 8px 10px;
        width: 350px;
        height: 40px;
        align-items: center;
        border-radius: 5px;
        display: none;
        
    }
</style>

    <!-- End of Style -->

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Sync</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="images/logo.png" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" title="About Us" href="index.html#description">ABOUT US <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#screens">ITEM DETAILS</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">OTHERS</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="personal-info.php"><span class="item-text">PERSONAL INFO</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="terms-conditions.html"><span class="item-text">TERMS CONDITIONS</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="privacy-policy.html"><span class="item-text">PRIVACY POLICY</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->

                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm page-scroll" href="#download">DOWNLOAD</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

                    <div class="personal-info-container">
                        <form action="#" class="updateform" enctype="multipart/form-data">
                                <div id="edit-acc-popup-lightbox" class="lightbox-pop">
                                    <h3>EDIT PROFILE</h3>
                                    <div class="con-info">
                                    <img src="php/images/<?php echo $row['img'] ?>" alt="">
                                    <h5><?php echo strtoupper($row['fname']) . " " . strtoupper($row['lname']) ?></h5>
                                    <center><div class="error"></div></center>
                                    <div class="inputbox">
                                        <center><input type="text" id="email" name="email" value="<?php echo $row['email'] ?>" required=""></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><input type="text" id="phone" name="phone" value="<?php echo $row['phone'] ?>" required=""></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><input type="text" id="address" name="address" value="<?php echo $row['address'] ?>" required=""></center>
                                    </div>
                                    <div class="inputbox">
                                        <center><input type="text" id="pass" name="pass" value="<?php echo $row['pass'] ?>" required=""></center>
                                    </div>
                                    <div class="inputimg">
                                        <center><input type="file" name="image"  id="upload-img" accept="image/*" value="<?php echo $row['img'] ?>"></center>
                                    </div>
                                    <div class="button field">
                                        <center><input type="submit" class="btn btn-primary" value="Update Profile"></center>
                                        <center><a class="btn btn-warning" href="personal-info.php">Back</a></center>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div> <!-- end of personal-info-container -->


    <!-- Breadcrumbs -->
    <div class="ex-basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumbs">
                        <a href="home.php">Home</a><i class="fa fa-angle-double-right"></i><span>Roel's Web Based Junk Shop: Edit Information</span>
                    </div> <!-- end of breadcrumbs -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of breadcrumbs -->

    
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h5>About Roel's Junk Shop</h5>
                        <p class="p-small">Roel's Junk Shop: Web-based Scrap and E-Waste Trading System is the first web-based Junk Shop that can accomodate clients online or offline.</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h5>Contact Info</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">Sitio Hulo Road 70, Proper</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a href="#your-link">office@roeljunkShop.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-phone-alt"></i>
                                <div class="media-body"><a href="#your-link">+44 376 945 23</a></div>
                            </li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <h5>Value Links</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="index.html#description">About Us</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col fifth">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2022 <a href="https://facebook.com/bhoxs.leonard">Caps Stone</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->

    <script src="JavaScript/update-profile.js"></script>

    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>