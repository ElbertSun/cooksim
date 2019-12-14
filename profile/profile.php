	<!DOCTYPE html>
<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>

	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>CookSim</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.html"><img src="img/logo.png" alt="COOKSIM" style="max-width: 100px; max-height: 75px;"/></a>
			      </div>
			      <h1 class="textatas">COOKSIM</h1>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="../homepage/home.html">Home</a></li>
			          <li><a href="../about/index.html">About Us</a></li>
			          <li><a href="../library/library/library.html">Menu</a></li>
			          <li class="active"><a href="#top">Profile</a></li>
			          <li id="logout"><a href="../login/logout.php">Log Out</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6>COOKSIM</h6>
							<h1 id="welcome">Welcome : <i><?php echo $login_session; ?></i></h1>
							<a href="#" class="primary-btn text-uppercase">LOOK HERE</a>
						</div>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
							<img class="img-fluid" src="img/hero-img.png" alt="" style="margin-bottom: 200px;">
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area pt-120">
				<div class="container">
					<div class="row align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 home-about-left">
							<img class="img-fluid" src="img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-5 col-md-6 home-about-right">
							<h6>About Me</h6>
							<h1 class="text-uppercase">Elbert Sun</h1>
							<p>
								Hi, my name is Ebek. I really like cooking and cooksim makes cooking easier, no need to open recipe books because everything is available in cooksim, its use is very simple and easy to make me more excited to cook by myself
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->

			<!-- Start services Area -->
			<section class="services-area section-gap">
				<div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content  col-lg-7">
		                    <div class="title text-center">
		                        <h1 class="mb-10">My Biodata</h1>
		                        <p>This is about me!</p>
		                    </div>
		                </div>
		            </div>						
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-license"></span>
								<a href="#"><h4>Title</h4></a>
								<p>
									Top Global
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-calendar-full"></span>
								<a href="#"><h4>Birth Date</h4></a>
								<p>
									Jakarta, 23-07-2001
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-heart"></span>
								<a href="#"><h4>Hobby</h4></a>
								<p>
									Gaming
								</p>
							</div>	
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-flag"></span>
								<a href="#"><h4>Country</h4></a>
								<p>
									Indonesia
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-user"></span>
								<a href="#"><h4>Profession</h4></a>
								<p>
									Leasing & Marcomm Agent
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-services">
								<span class="lnr lnr-users"></span>
								<a href="#"><h4>Gender</h4></a>
								<p>
									Male
								</p>
							</div>				
						</div>														
					</div>
				</div>	
			</section>
			<!-- End services Area -->	

			<!-- Start fact Area -->
			<section class="facts-area section-gap" id="facts-area">
				<div class="container">				
					<div class="row">
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">1087</h1>
							<p>Followers</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">325</h1>
							<p>Following</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">11</h1>
							<p>Level</p>
						</div>	
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">8</h1>
							<p>Recipe</p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end fact Area -->	

			<!-- Start portfolio-area Area -->
            <section class="portfolio-area section-gap" id="portfolio">
                <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Atta's Recipe</h1>
		                        <p>Just Try!</p>
		                    </div>
		                </div>
		            </div>
                    
                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".vector">Dessert</li>
                            <li data-filter=".raster">Main Dish</li>
                            <li data-filter=".ui">Indonesian</li>
                            <li data-filter=".printing">Smoothies</li>
                        </ul>
                    </div>
                    
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p1.jpg" alt="">
	                            	</div>
									<a href="img/p1.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
								</a>                              		
                            	</div>
								<div class="p-inner">
								    <h4>Mixed Fruits Cream</h4>
									<div class="cat">Cake</div>
								</div>					                               
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p2.jpg" alt="">
	                            	</div>
									<a href="img/p2.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
								</a>                              		
                            	</div>
								<div class="p-inner">
								    <h4>Red Prawn with Clam</h4>
									<div class="cat">Seafood</div>
								</div>					                               
                            </div>                            
                            <div class="single-portfolio col-sm-4 all ui">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/123.jfif" alt="">
	                            	</div>
									<a href="img/p3.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a> 
	                            		
	                           	</div>
                                <div class="p-inner">
                                    <h4>Gudeg Jogja</h4>
                                    <div class="cat">Main Dish</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all printing">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p4.jpg" alt="">
	                            	</div>
									<a href="img/p4.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>                            		
                            	</div> 
                                <div class="p-inner">
                                    <h4>Berry Smoothies</h4>
                                    <div class="cat">Smoothies</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p5.jpg" alt="">
	                            	</div>
									<a href="img/p5.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                                <div class="p-inner">
                                    <h4>Rasberry with Blue and strawberry</h4>
                                    <div class="cat">Cup Cakes</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p6.jpg" alt="">
	                            	</div>
									<a href="img/p6.jpg" class="img-pop-up">	
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>                             		
                            	</div>
                                <div class="p-inner">
                                    <h4>Mushroom Sauce Rice</h4>
                                    <div class="cat">Rice</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
            <!-- End portfolio-area Area -->	

			<!-- Start testimonial Area -->
		    <section class="testimonial-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Feedback</h1>
		                        <p>Suggestion makes good, Practice makes perfect</p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user1.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                I follow Ebek because i love the recipes, suitable for my lunch and dinner with my family.	     
		                            </p>
		                            <h4>Jesicca</h4>
		                            <p>Sales</p>
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user2.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                The recipe suitable for my tongue, and the ingredients easily i got from market, i usually cook for my lunch with my friends
		                            </p>
		                            <h4>Elisa</h4>
		                            <p>Administrator</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="rowbawah">
                        	<h2>COOKSIM</h2>
                        	<p>All rights reserved. CookSim Copyright 2019</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
    		<script src="js/jquery.tabs.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>	
            <script src="js/isotope.pkgd.min.js"></script>			
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/simple-skillbar.js"></script>							
			<script src="js/owl.carousel.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>