<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
    <head>
        <!-- Basic head information -->
        <title>Breach Menders | Sign In</title>
        <link rel="icon" type="image/jpg" href="favicon.jpg"/>
        <!-- Define Charset -->
        <meta charset="utf-8">
        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="resource/bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="resource/font-awesome/css/font-awesome.min.css" type="text/css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="resource/css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="resource/css/owl.theme.css" type="text/css">
        <link rel="stylesheet" href="resource/css/owl.transitions.css" type="text/css">
        <!-- CSS3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="resource/css/animate.css">
        <!-- Lightbox CSS -->
        <link rel="stylesheet" type="text/css" href="resource/css/lightbox.css">
        <!-- Breach Menders CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="resource/css/style.css">
		<?php  include('config.php'); ?>
		<!-- Source code for handling registration and login -->
		<?php  include('registration_login.php'); ?>
        <!-- Responsive CSS Style -->
        <link rel="stylesheet" type="text/css" href="resource/css/responsive.css">
        <!-- javascript -->
        <script src="resource/js/modernizrr.js"></script>
    </head>
    <body>
        <header class="clearfix">
            <!-- Start Top Bar -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Start Contact Info -->
                                    <ul class="contact-details">
                                        <li><i class="fa fa-phone"></i> +2348103286372</li>
                                        <li><i class="fa fa-envelope-o"></i> info@breachmenders.com.ng</li> 
                                    </ul>
                                    <!-- End Contact Info -->
                                </div><!-- .col-md-6 -->
                                <div class="col-md-6">
                                    <!-- Start Social Links -->
                                    <ul class="social-list">
                                        <li>
                                            <a href="https://facebook.com/Breach Menders"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://linkedin.com/in/mayowa-olukehinde-771a87190"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                    <!-- End Social Links -->
                                </div><!-- .col-md-6 -->
                            </div>  
                        </div>
                    </div>                        
                </div><!-- .row -->
            </div><!-- .container -->
            <!-- End Top Bar -->
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="index.html">
                            <img src="logo.jpg" alt="breach-menders" style="border-radius:50%;">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="service.html">Practice-Areas</a>
                            </li>
                            <li><a class="active" href="contact.html">Contact</a>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header Logo & Naviagtion -->
        <!-- Start Header Section -->
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Contact Us</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
        <!-- Start Contact Us Section -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center wow fadeInDown" data-wow-duration="2s" data-wow-delay="50ms">
						<form method="post" action="register.php" >
							<h2>Sign In</h2>
						</form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
							<?php include('errors.php') ?>
                            <div class="col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-delay="600ms">
                                <div class="form-group">
                                    <input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
                                    <p class="help-block text-danger"></p>
                                </div>
								<div class="form-group">
                                    <input type="password" name="password_1" placeholder="Password">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center wow zoomIn" data-wow-duration="1s" data-wow-delay="600ms">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
							<p>
								Not yet a member? <a href="register.php">Sign up</a>
							</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
         <!-- Start Footer Section -->
        <section id="footer-section" class="footer-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Office Address</span>
                            </h3>
                        </div>
                        <div class="footer-address">
                            <ul>
                                <li class="footer-contact"><i class="fa fa-home"></i>No 1/3, Awojoodu close, Balogun bus stop, Iju-Ishaga,Lagos state.</li>
                                <li class="footer-contact"><i class="fa fa-envelope"></i><a href="www.breachmenders.com.ng">info@breachmenders.com.ng</a></li>
                                <li class="footer-contact"><i class="fa fa-phone"></i>+2348103286372</li>
                                <li class="footer-contact"><i class="fa fa-globe"></i><a href="www.breachmenders.com.ng" target="_blank">www.breachmenders.com.ng</a></li>
                            </ul>
                        </div>
                    </div><!--/.col-md-3 -->
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Quick-links</span>
                            </h3>
                        </div>
                        <div class="Quick-links">
                            <li>
                                <a class="active" href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <a href="service.html">Practice-Areas</a>
                            </li>
                            <li>
                                <a href="contact.html">Contact</a>
                            </li>
                        </div>
                    </div><!--/.col-md-3 -->
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Stay With us</span>
                            </h3>
                        </div>
                        <div class="subscription">
                            <p>Subscribe to our newsletter</p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your E-mail" id="name" required data-validation-required-message="Please enter your name.">
                                <input type="submit" class="btn btn-primary" value="Subscribe">
                            </div>
                        </div>
                    </div>
                </div><!--/.row -->
            </div><!-- /.container -->
        </section>
        <!-- End Footer Section -->
        <!-- Start Copyright Section -->
        <div id="copyright-section" class="copyright-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="copyright">
                            Breach Menders legal practitioners © 2020 | All Rights Reserved.
                        </div>
                    </div>
                </div><!--/.row -->
            </div><!-- /.container -->
        </div>
        <!-- End Copyright Section -->
       <!-- Breach Menders JS File -->
        <script src="resource/js/jquery-2.1.3.min.js"></script>
        <script src="resource/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="resource/bootstrap/js/bootstrap.min.js"></script>
        <script src="resource/js/owl.carousel.min.js"></script>
        <script src="resource/js/jquery.appear.js"></script>
        <script src="resource/js/jquery.fitvids.js"></script>
        <script src="resource/js/jquery.nicescroll.min.js"></script>
        <script src="resource/js/lightbox.min.js"></script>
        <script src="resource/js/count-to.js"></script>
        <script src="resource/js/styleswitcher.js"></script>
        <script src="resource/js/map.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="resource/js/script.js"></script> 
    </body>
</html>