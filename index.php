<!DOCTYPE html>
<html lang="en">
<?php include("header.php");?>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="header-top-grids">
			<div class="header">
					<div class="header-left">
						<div class="w3layouts-logo">
							<h1>
								<a href="index.php">W <span>Foods</span></a>
							</h1>
						</div>
					</div>
			</div>
			<div class="top-nav">
				<div class="top-nav-info">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a class="active" href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
			</div>
		</div>
		<div class="w3layouts-banner-slider">
				<div class="container">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="top-agileits-banner">
										<div class="agileits-banner-info">
											<h3>Services</h3>
											<div class="w3-button">
												<div class="w3ls-button">
													<a href="single.php">Read More</a>
												</div>
											</div>
											<div class="bounce animated">
												<a href="#welcome" class="scroll">
													<div class="mouse"></div>
												</a>
											</div>
										</div>
										<div class="agileinfo-social-grids">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-rss"></i></a>
											<a href="#"><i class="fa fa-vk"></i></a>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="top-agileits-banner">
										<div class="agileits-banner-info">
											<h3>Foods</h3>
											<div class="w3-button">
												<div class="w3ls-button">
													<a href="single.php">Read More</a>
												</div>
											</div>
											<div class="bounce animated">
												<a href="#welcome" class="scroll">
													<div class="mouse"></div>
												</a>
											</div>
										</div>
										<div class="agileinfo-social-grids">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-rss"></i></a>
											<a href="#"><i class="fa fa-vk"></i></a>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="top-agileits-banner">
										<div class="agileits-banner-info">
											<h3>Ratings</h3>
											<div class="w3-button">
												<div class="w3ls-button">
													<a href="single.php">Read More</a>
												</div>
											</div>
											<div class="bounce animated">
												<a href="#welcome" class="scroll">
													<div class="mouse"></div>
												</a>
											</div>
										</div>
										<div class="agileinfo-social-grids">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-rss"></i></a>
											<a href="#"><i class="fa fa-vk"></i></a>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="top-agileits-banner">
										<div class="agileits-banner-info">
											<h3>Speciality</h3>
											<div class="w3-button">
												<div class="w3ls-button">
													<a href="single.php">Read More</a>
												</div>
											</div>
											<div class="bounce animated">
												<a href="#welcome" class="scroll">
													<div class="mouse"></div>
												</a>
											</div>
										</div>
										<div class="agileinfo-social-grids">
											<a href="#"><i class="fa fa-facebook"></i></a>
											<a href="#"><i class="fa fa-twitter"></i></a>
											<a href="#"><i class="fa fa-rss"></i></a>
											<a href="#"><i class="fa fa-vk"></i></a>
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:false,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
						<!--banner Slider starts Here-->
					</div>
				</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome" id="welcome">
		<div class="col-md-5 ab-w3-agile-img">
			 
		</div>
		<div class="col-md-7 ab-w3-agile-info">
			<div class="ab-w3-agile-info-text">
				<h2 class="title-w3">Welcome</h2>
				<p class="sub-text one">Choose Your Style</p>
				<p>Indulge in the tantalizing fusion of flavors with our signature dish, blending traditional spices with modern culinary twists</p>
				
			</div>
			<div class="ab-w3-agile-inner">
				<div class="col-md-6 ab-w3-agile-part">
					<h4>Dancing Supplies</h4>
					<p>"Step into our restaurant and immerse yourself in a world where culinary creativity knows no bounds. Our specialty dishes are not just meals; they're masterpieces meticulously crafted to ignite your senses and leave an indelible mark on your palate. From the first bite to the last, each morsel tells a story of tradition, innovation, and a relentless pursuit of gastronomic perfection. Join us on a journey where flavors collide, textures harmonize, and every dish is a celebration of culinary artistry. Indulge in an experience beyond the ordinary; indulge in our unique specialty.</p>
				</div>
				<div class="col-md-6 ab-w3-agile-part two">
					<h4>Master Classes</h4>
					<p>At our restaurant, we take pride in offering a dining experience that transcends the ordinary. Our specialty dishes are a testament to our unwavering commitment to culinary excellence, combining age-old recipes with contemporary techniques to create a symphony of flavors that dance on your palate. With every bite, you'll taste the passion and dedication of our chefs, who pour their hearts into each dish to ensure a culinary adventure like no other. From the vibrant colors to the exquisite aromas, every aspect of our specialty is designed to tantalize your senses and leave you craving more. </p>
				</div>
				<div class="clearfix"></div>		   
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="w3-agile-heading">
				<h3>Services</h3>
			</div>
			<div class="w3ls-services-grids">
				<div class="col-md-3 w3ls-services-left">
					<div class="w3ls-services-left-top">
						<i class="fa fa-user" aria-hidden="true"></i>
						<h5>Chef's Touch</h5>
						<p>Savor the essence of authenticity in every bite, as our chefs craft each dish with locally sourced, farm-fresh ingredients.</p>
					</div>
					<div class="w3ls-services-left-top w3ls-services-left-top1">
						<i class="fa fa-asterisk" aria-hidden="true"></i>
						<h5>Culinary Fusion</h5>
						<p>Experience culinary innovation with our exclusive menu, showcasing a symphony of textures and tastes, curated for discerning palates</p>
					</div>
				</div>
				<div class="col-md-6 w3ls-services-middle">
					<div class="w3ls-services-middle-img">
						<img src="images/4.jpg" alt="" />
					</div>
					<div class="w3ls-services-middle-grids">
						<div class="col-md-6 w3ls-services-middle-left">
							<div class="w3ls-services-left-top">
								<i class="fa fa-bell" aria-hidden="true"></i>
								<h5>Artisanal Creations</h5>
								<p>Embark on a gastronomic journey like no other, as our chefs reinterpret classic recipes with a contemporary flair.</p>
							</div>
						</div>
						<div class="col-md-6 w3ls-services-middle-left">
							<div class="w3ls-services-left-top">
								<i class="fa fa-heart" aria-hidden="true"></i>
								<h5>Gourmet Adventures</h5>
								<p>Elevate your dining experience with our specialty, where tradition meets innovation in a harmonious culinary marriage</p>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 w3ls-services-left">
					<div class="w3ls-services-left-top">
						<i class="fa fa-eye" aria-hidden="true"></i>
						<h5>Farm-to-Table Excellence</h5>
						<p>Discover the perfect balance of bold flavors and delicate nuances, meticulously crafted in each dish by our culinary artisans.</p>
					</div>
					<div class="w3ls-services-left-top w3ls-services-left-top1">
						<i class="fa fa-anchor" aria-hidden="true"></i>
						<h5>Sensory Symphony</h5>
						<p>Tantalize your taste buds with our culinary masterpiece, where every ingredient is thoughtfully selected to deliver a memorable dining experience.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- news -->
	<div class="news jarallax">
		<div class="container">
			<div class="w3-agile-heading news-heading">
				<h3>Events</h3>
			</div>
			<div class="news-grids">
				<div class=" col-md-4 section-grid-wthree one">
					<div class="services-info-w3-agileits">
						<h5 class="sub-title"><a href="single.php">Excellence </a></h5>
						<h6>Sep 06,2023 | By <a href="#">Admin</a></h6>
						<p class="para-w3">Discover a culinary journey at our restaurant, where we specialize in 'Global Gastronomy.' </p>
					</div>
					<div class="services-img-agileits-w3layouts">
						<a href="single.php"><img src="images/5.jpg" alt="service-img"></a>
					</div>
				</div>
				<div class=" col-md-4 section-grid-wthree">
					<div class="services-img-agileits-w3layouts">
						<a href="single.php"><img src="images/6.jpg" alt="service-img"></a>
					</div>
					<div class="services-info-w3-agileits mid">
						<h5 class="sub-title"><a href="single.php">Seduced!!  </a></h5>
						<h6>Sep 07,2023 | By <a href="#">Admin</a></h6>
						<p class="para-w3">crafted to ignite your senses and leave a lasting impression</p>
					</div>
				</div>
				<div class=" col-md-4 section-grid-wthree">
					<div class="services-info-w3-agileits">
						<h5 class="sub-title"><a href="single.php">Flavour </a></h5>
						<h6>Sep 08,2023 | By <a href="#">Admin</a></h6>
						<p class="para-w3">Immerse yourself in a world of inventive flavors and cultural fusions, as our dishes take you on an unforgettable taste exploration</p>
					</div>
					<div class="services-img-agileits-w3layouts">
						<a href="single.php"><img src="images/7.jpg" alt="service-img"></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- subscribe -->
	<div class="subscribe">
		<div class="container">
			<div class="w3-agile-heading agile-subscribe-heading">
				<h3>Subscribe</h3>
				<p>Subscribe to our email newsletter to receive updates</p>
			</div>
			<div class="subscribe-grid">
				<form action="#" method="post">
					<input type="text" placeholder="Subscribe" name="Subscribe" required="">
					<button class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
				</form>
			</div>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- footer -->
	<?php include("footer.php");?>
	<!-- //footer -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>