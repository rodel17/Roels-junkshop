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
    <title>Roel's Web Based Junk Shop</title>
    
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
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Sync</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.php"><img src="images/logo.png" alt="alternative"></a> 
            
            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#description">ABOUT US<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#screens">ITEM DETAILS</a>
                    </li>

                    <!-- Dropdown Menu -->          
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">OTHERS</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="terms-conditions.php"><span class="item-text">TERMS CONDITIONS</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="privacy-policy.php"><span class="item-text">PRIVACY POLICY</span></a>
                        </div>
                    </li>
                    <!-- end of dropdown menu -->
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm page-scroll" href="#down-load">DOWNLOAD</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>Roel's Web Based Junk Shop</h1>
                        <p class="p-large p-heading">Roel's Junk Shop: Web-based Scrap and E-Waste Trading System</p>

                        <a class="btn-solid-reg popup-with-move-anim" href="#login-popup-lightbox">LOGIN</a>

    <!-- Login Lightbox -->
    <!-- Details Lightbox -->
    <div id="login-popup-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="col-lg-7">
                <div class="image-container">
                    <img class="img-fluid" src="images/header-iphone.png" alt="alternative">
                </div> <!-- end of image-container -->
            </div>
            <div class="col-lg-4">
                <h2><center>LOGIN</center></h2>
                <center><div class="error-txt"></div></center>
                <br>
                <form action="#" enctype="multipart/form-data">
                <center><input type="text" id="log-email" name="email" class="form" placeholder="email" required>
                <i class="fas fa-eye"></i><input type="password" name="pass" id="log-pass" class="form" placeholder="password" required>
                </center>
                <a class="forgot-password" href="forgot-pass.php">Forgot Password?</a>
                <div class="button field">
                <center><input type="submit" id="login" value="LOGIN"><button id="cancel" class="btn-outline-reg mfp-close as-button" type="button">CANCEL</button></center>
                </div>
                </form>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox -->
    <!-- end of login lightbox -->



                        <a class="btn-solid-reg popup-with-move-anim" href="#signup-popup-lightbox">SIGN UP</a>

     <!-- sign up Lightbox -->
    <!-- Details Lightbox -->
    <div id="signup-popup-lightbox" class="lightbox-basic zoom-anim-dialog mfp-hide">
	<h3><center>SIGN UP</center></h3>
    <center><div class="error-text"></div></center>
                <br>
        <form action="#" class="signupForm" enctype="multipart/form-data">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
            <div class="first-container">
                <input id="fname" name="fname" type="text" class="form-control" placeholder="First name" required>
                <input id="lname" name="lname" type="text" class="form-control" placeholder="Last name" required>
                <input id="pass" name="pass" type="password" class="form-control" placeholder="password" required>
            </div>

            <div class="second-container">
                <input id="address" name="address" type="text" class="form-control" placeholder="Address" required>
                <input id="phone" name="phone" type="number" class="form-control" placeholder="Phone number" required>
                <input id="email" name="email" type="text" class="form-control" placeholder="email" required>
            </div>
            
            <div class="yeah">
            <label class="img-label">Upload Image:</label>
            <br>
            <input type="file" class="upload-img" id="image" name="image" accept="image/png, image/jpeg" />
            <center><input type="checkbox" id="pterms" value="Agreed-to-Terms" required>I have read and agree to Roel's Junk Shop <a href="privacy-policy.php">Privacy Policy</a> and <a href="terms-conditions.php">Terms Conditions</a></center>
            </div>
                
            <div class="button field">
            <input type="submit" id="signup" value="SIGN UP"><button id="back" class="btn-solid-reg mfp-close as-button" type="button">BACK</button>
            </div>
        </div> <!-- end of row -->

        <p style="font-size: 12px; text-align: center; margin-top: 10px;"><b>Note:</b> Use an existing email but don't use a password that exist on any of your social media account.</p>
    </form>
    </div> <!-- end of lightbox-basic -->
    <!-- end of details lightbox -->
    <!-- end of sign up lightbox -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container">
                        <img class="img-fluid" src="images/header-iphone.png" alt="alternative">
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div class="deco-white-circle-1">
            <img src="images/decorative-white-circle.svg" alt="alternative">
        </div> <!-- end of deco-white-circle-1 -->
        <div class="deco-white-circle-2">
            <img src="images/decorative-white-circle.svg" alt="alternative">
        </div> <!-- end of deco-white-circle-2 -->
        <div class="deco-blue-circle">
            <img src="images/decorative-blue-circle.svg" alt="alternative">
        </div> <!-- end of deco-blue-circle -->
        <div class="deco-yellow-circle">
            <img src="images/decorative-yellow-circle.svg" alt="alternative">
        </div> <!-- end of deco-yellow-circle -->
        <div class="deco-green-diamond">
            <img src="images/decorative-green-diamond.svg" alt="alternative">
        </div> <!-- end of deco-yellow-circle -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Description 1 -->
    <div id="description" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="images/description-1-app.png" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>About Us</h2>
                        <p>Roel's Junk Shop is the first web-based Junk Shop that can accomodate clients online or offline. We can response immediately as long as it's during our working hours.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Here you can sell your junk items and e-waste materials</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">You don't need to go to our junk shop physically. Instead the Roel's Junk Shop will go to your houses</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Send a direct message to the owner about your concerns</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Updating the junk items and e-waste materials that our shop currently buying</div>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of description 1 -->

    <!-- Screenshots -->
    <div id="screens" class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Image Slider -->
                    <center><h2>ITEM DETAILS</h2></center>
                    <br>
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-1.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-1.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-2.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-2.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-3.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-3.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-4.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-4.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-5.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-5.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-6.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-6.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-7.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-7.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-8.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-8.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->
                                
                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of screenshots -->

    <!-- Download -->
    <div id="download" class="basic-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container">
                        <img class="img-fluid" src="images/e-waste.png" alt="alternative">
                    </div> <!-- end of image-container -->
                    <p class="p-large">Roel's Junk  Shop: Web-Based Scrap and E-waste Trading System, to download the app version please click the link below!</p>
                    <a class="btn-solid-lg" href="#your-link"   id="down-load"><i class="fab fa-google-play"></i>DOWNLOAD</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
        <div class="deco-white-circle-1">
            <img src="images/decorative-white-circle.svg" alt="alternative">
        </div> <!-- end of deco-white-circle-1 -->
        <div class="deco-white-circle-2">
            <img src="images/decorative-white-circle.svg" alt="alternative">
        </div> <!-- end of deco-white-circle-2 -->
        <div class="deco-blue-circle">
            <img src="images/decorative-blue-circle.svg" alt="alternative">
        </div> <!-- end of deco-blue-circle -->
        <div class="deco-yellow-circle">
            <img src="images/decorative-yellow-circle.svg" alt="alternative">
        </div> <!-- end of deco-yellow-circle -->
        <div class="deco-green-diamond">
            <img src="images/decorative-green-diamond.svg" alt="alternative">
        </div> <!-- end of deco-yellow-circle -->
    </div> <!-- end of basic-3 -->
    <!-- end of download -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                    	<center>
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
                            <li><a href="#description">About Us</a></li>
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
                    <p class="p-small">Copyright © 2022 <a href="https://www.facebook.com/bhoxs.leonard">Caps Stone</a> - All rights reserved</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    <!-- Custom Scripts -->
    <script src="JavaScript/pass-show-hide.js"></script>
    <script src="JavaScript/signup.js"></script>
    <script src="JavaScript/login.js"></script>

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