<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
    <head>
        <!-- Basic -->
        <title>Breach Mender | Blog</title>
        <!-- Define Charset -->
        <meta charset="utf-8">
        <!-- Responsive Metatag -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Bootstrap CSS  -->
        <link rel="stylesheet" href="asset/bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- Font Awesome CSS -->
        <link rel="stylesheet" href="asset/font-awesome/css/font-awesome.min.css" type="text/css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="asset/css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="asset/css/owl.theme.css" type="text/css">
        <link rel="stylesheet" href="asset/css/owl.transitions.css" type="text/css">
        <!-- Css3 Transitions Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/animate.css">
        <!-- Lightbox CSS -->
        <link rel="stylesheet" type="text/css" href="asset/css/lightbox.css">
        <!-- Breach Mender CSS Styles  -->
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">
        <!-- Responsive CSS Style -->
        <link rel="stylesheet" type="text/css" href="asset/css/responsive.css">
		<?php require_once('config.php') ?>
		<?php require_once('public_functions.php') ?>
		<?php require_once('registration_login.php') ?>

		<!-- Retrieve all posts from database  -->
		<?php $posts = getPublishedPosts(); ?>

        <script src="asset/js/modernizrr.js"></script>
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
                                </div><!-- .col-md-6 -->
                                <div class="col-md-6">
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
                        <a class="navbar-brand" href="index.html">Breach Mender</a>
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
                                <a href="service.html">Service</a>
                            </li>
                            <li><a href="contact.html">Contact</a>
                            </li>
                        </ul>
                        <!-- End Navigation List -->
                    </div>
                </div>
            </div>
            <!-- End Header Logo & Naviagtion -->
        </header>
        <!-- Start Header Section -->
        <div class="page-header">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Section -->
        <!-- Start Blog Page Section -->
        <div class="container">
            <div class="row">
                <!-- Start Blog Body Section -->
                <div class="col-md-8 blog-body">
                    <!-- Start Blog post -->
                    <div class="blog-post">
						<?php if (isset($_SESSION['user']['username'])) { ?>
							<div class="logged_in_info">
								<span>WELCOME <?php echo $_SESSION['user']['username'] ?></span>
								|
								<span><a href="logout.php">logout</a></span>
							</div>
						<?php }else{ ?>
							<div class="post-img">
								<img src="asset/images/bg.jpg" class="img-responsive" alt="Blog image">
							</div>
							<h1 class="post-title"><a href="#">Breach menders legal practitioners</a></h1>
							<ul class="post-meta">
								<li><i class="fa fa-clock-o"></i>August 20 2020</li>
								<li><i class="fa fa-user"></i><a href="#">Super User</a></li>
								<li><i class="fa fa-file"></i><a href="#">Blog</a></li>
								<li><i class="fa fa-tags"></i><a href="#">legal practitioners</a></li>
								<li><i class="fa fa-comments"></i><a href="#">0 Comments</a></li>
							</ul>
							<p class="post-content">
								<?php foreach ($posts as $post): ?>
									<div class="post" style="margin-left: 0px;">
										<img src="<?php echo BASE_URL . '/asset/images/' . $post['image']; ?>" class="post_image" alt="">
										<?php if (isset($post['topic']['name'])): ?>
											<a 
												href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
												class="btn category">
												<?php echo $post['topic']['name'] ?>
											</a>
										<?php endif ?>
										<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
											<div class="post_info">
												<h3><?php echo $post['title'] ?></h3>
												<div class="info">
													<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
												</div>
											</div>
										</a>
									</div>
								<?php endforeach ?>
							<?php } ?>
						</p>
                        <a href="#" class="btn btn-primary readmore">Read more...<i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- End Blog Post -->
                    <!-- Start Blog post -->
                    <div class="blog-post">
                        <div class="post-img">
                            <img src="asset/images/blog/blog-02.jpg" class="img-responsive" alt="Blog image">
                        </div>
                        <h1 class="post-title"><a href="#">Land Use Act</a></h1>
                        <ul class="post-meta">
							<li><i class="fa fa-clock-o"></i>October 25 2020</li>
							<li><i class="fa fa-user"></i><a href="#">Super User</a></li>
							<li><i class="fa fa-file"></i><a href="#">Blog</a></li>
							<li><i class="fa fa-tags"></i><a href="#">Elderly</a> <a href="#">Education</a></li>
							<li><i class="fa fa-comments"></i><a href="#">1 Comment</a></li>
						</ul>
                        <p class="post-content">Quisncidunmauris. Morbi in dui q.</p>
                        <a href="#" class="btn btn-primary readmore">Read more...<i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- End Blog post -->
                    <!-- Start Pagination -->
                    <nav>
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Start">Start</a></li>
                            <li class="disabled"><a href="#" aria-label="Previous">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">Next</a></li>
                            <li><a href="#">End</a></li>
                        </ul>
                    </nav>
                    <!-- End Pagination -->
                </div>
                <!-- End Blog Body Section -->
                <!-- Start Sidebar Section -->
                <div class="col-md-4 sidebar right-sidebar">
                    <!-- Start Recent Post Widget -->
                    <div class="widget widget-recent-post">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Recent Post</span>
                            </h3>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="asset/images/recent-post/post-02.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Nulla facilisi integer lacinia sollicitudin massa</a></h4>
                                <ul>
                                    <li><a href="#">Super User</a></li>
                                    <li>15 October 2020</li>
                                </ul>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="asset/images/recent-post/post-03.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Quisque cursus metus vitae pharetra auctor sem massa</a></h4>
                                <ul>
                                    <li><a href="#">Super User</a></li>
                                    <li>15 October 2020</li>
                                </ul>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="asset/images/recent-post/post-04.jpg" alt="...">
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    <!-- End Recent Post Widget -->
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
                        </div>
                    </div><!--/.col-md-3 -->
                    <div class="col-md-3">
                    <div class="col-md-3">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Stay With us</span>
                            </h3>
                        </div>
                        <div class="subscription">
                            <p>Subscribe to get latest update from us.</p>
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
                            <h3>Copyright © 2020. All Rights Reserved.</h3>
                        </div>
                    </div>
                    <div class="col-md-5">
                    </div>
                </div><!--/.row -->
            </div><!-- /.container -->
        </div>
        <!-- End Copyright Section -->
        <!-- Breach Mender JS File -->
        <script src="asset/js/jquery-2.1.3.min.js"></script>
        <script src="asset/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="asset/bootstrap/js/bootstrap.min.js"></script>
        <script src="asset/js/owl.carousel.min.js"></script>
        <script src="asset/js/jquery.appear.js"></script>
        <script src="asset/js/jquery.fitvids.js"></script>
        <script src="asset/js/jquery.nicescroll.min.js"></script>
        <script src="asset/js/lightbox.min.js"></script>
        <script src="asset/js/count-to.js"></script>
        <script src="asset/js/styleswitcher.js"></script>
        <script src="asset/js/map.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="asset/js/script.js"></script>
    </body>
</html>