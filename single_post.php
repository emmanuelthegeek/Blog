<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">
    <head>
        <!-- Basic -->
        <title><?php echo $post['title'] ?> | Breach menders</title>
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
        <!-- Main CSS   -->
        <link rel="stylesheet" type="text/css" href="asset/css/style.css">
        <!-- Responsive CSS Style -->
        <link rel="stylesheet" type="text/css" href="asset/css/responsive.css">
		<?php include('config.php') ?>
		<?php include('public_functions.php') ?>
		<?php 
			if (isset($_GET['post-slug'])) {
				$post = getPost($_GET['post-slug']);
			}
			$topics = getAllTopics();
		?>
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
                        <a class="navbar-brand" href="index.html">Breach Menders</a>
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
                        <div class="post-img">
                            <img src="asset/images/blog/blog-01.jpg" class="img-responsive" alt="Blog image">
                        </div>
                        <h1 class="post-title"><a href="#">Dummy texts</a></h1>
                        
                        <ul class="post-meta">
							<li><i class="fa fa-clock-o"></i>October 25 2020</li>
							<li><i class="fa fa-user"></i><a href="#">Super User</a></li>
							<li><i class="fa fa-file"></i><a href="#">Blog</a></li>
                            <li><i class="fa fa-tags"></i><a href="#">Women Rights</a></li>
							<li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
						</ul>
                        
                        <p class="post-content">
							<?php if ($post['published'] == false): ?>
								<h2 class="post-title">Sorry... This post has not been published</h2>
							<?php else: ?>
								<h2 class="post-title"><?php echo $post['title']; ?></h2>
								<div class="post-body-div">
									<?php echo html_entity_decode($post['body']); ?>
								</div>
							<?php endif ?>
						</p>
                        <a href="#" class="btn btn-primary readmore">Read more...<i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- End Blog Post -->
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
                                <h4 class="media-heading"><a href="#">Dummy text</a></h4>
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
                                <h4 class="media-heading"><a href="#">Dummy text</a></h4>
								<p class="post-content">
									<?php foreach ($topics as $topic): ?>
										<a 
											href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
											<?php echo $topic['name']; ?>
										</a> 
									<?php endforeach ?>
								</p>
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
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#">Dummy text</a></h4>
                                <ul>
                                    <li><a href="#">Super User</a></li>
                                    <li>15 October 2020</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Recent Post Widget -->
                    <!-- Start Blog categories widget -->
                    <div class="widget widget-categories">
                        
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Blog Categories</span>
                            </h3>
                        </div>
                        
                        <ul>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                <a href="#">Blog</a>
                                <a href="#" class="cat-counter">(4)</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                <a href="#">News</a>
                                <a href="#" class="cat-counter">(0)</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                <a href="#">Charity</a>
                                <a href="#" class="cat-counter">(0)</a>
                            </li>
                            <li>
                                <i class="fa fa-angle-double-right"></i>
                                <a href="#">Fashion</a>
                                <a href="#" class="cat-counter">(0)</a>
                            </li>
                        </ul>
                        
                    </div>
                    <!-- End Blog categories widget -->
                    <!-- Start Tag Cloud Widget -->
                    <div class="widget widget-tags">
                        <div class="section-heading-2">
                            <h3 class="section-title">
                                <span>Popular Tags</span>
                            </h3>
                        </div>
                        <div class="tagcloud">
                            <a href="#">Charity</a>
							<a href="#">Children</a>
							<a href="#">Education</a>
							<a href="#">Elderly</a>
							<a href="#">Humanity</a>
							<a href="#">Women Rights</a>
				        </div>
                    </div>
                    <!-- End Tag Cloud Widget -->
                </div>
                <!-- End Sidebar Section -->
            </div>
        </div>
        <!-- End Blog Page Section -->
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
                    </div><!--/.col-md-3 -->
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
                            Copyright © 2020. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-md-5">
                    </div>
                </div><!--/.row -->
            </div><!-- /.container -->
        </div>
        <!-- End Copyright Section -->
        <!--  JS File -->
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