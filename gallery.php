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
								<a href="index.php">W<span>Foods</span></a>
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
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a class="active" href="gallery.php">Gallery</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
			</div>
		</div>
		<div class="wthree-heading">
			<h2>Gallery</h2>
		</div>
	</div>
	<!-- //banner -->
	<!-- gallery -->
	<div class="gallery-top">
		<div class="container">
			<div class="gallery">	
				<div class="gallery-bg">
					<div class="agileits-gallery gallery-bg-text effect-2">
						<a href="images/g1.jpg" class="big"><img src="images/g1.jpg" alt="" title="No1.STEAK Starts from $100 Onwards" /></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="agileits-gallery gallery-small-text effect-3">
						<a href="images/g2.jpg"><img src="images/g2.jpg" alt="" title="No2. Veg Starters @ $15 Onwards"/></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="agileits-gallery gallery-small-text effect-3">
						<a href="images/g3.jpg"><img src="images/g3.jpg" alt="" title="No3. Vegetarian Combos @ $20 Onwards"/></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="agileits-gallery gallery-small-text effect-3">
						<a href="images/g4.jpg"><img src="images/g4.jpg" alt="" title="No4. Non Veg Starters @$40 Onwards"/></a>
					</div>
				</div>
				<div class="clearfix"></div>
				
				<div class="gallery-small gallery-middle">
					<div class="agileits-gallery gallery-small-text effect-3">
						<a href="images/g5.jpg"><img src="images/g5.jpg" alt="" title="No5. Kebabs And Arabian Delights @$50 onwards"/></a>
					</div>
				</div>
				<div class="gallery-bg">
					<div class="agileits-gallery gallery-bg-text effect-2">
						<a href="images/g7.jpg" class="big"><img src="images/g7.jpg" alt="" title="No6.Our Special Dragon Sauce Chicken @$40" /></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="agileits-gallery gallery-small-text effect-3">
						<a href="images/g6.jpg"><img src="images/g6.jpg" alt="" title="No7.Sushis @ $5"/></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="agileits-gallery gallery-small-text effect-3">
						<a href="images/g8.jpg"><img src="images/g8.jpg" alt="" title="No8.Our Definitive Burgers@$3"/></a>
					</div>
				</div>
				<div class="clearfix"></div>
				
				<div class="gallery-bg">
					<div class="agileits-gallery gallery-bg-text effect-2">
						<a href="images/g9.jpg" class="big"><img src="images/g9.jpg" alt="" title="No9.Sea Starters @$30" /></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="agileits-gallery gallery-small-text effect-3">
						<a href="images/g2.jpg"><img src="images/g2.jpg" alt="" title="VEGETARIAN VARIETIES"/></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="agileits-gallery gallery-small-text effect-3">
						<a href="images/g5.jpg"><img src="images/g5.jpg" alt="" title="Kebabs And Arabian Delights"/></a>
					</div>
				</div>
				<div class="gallery-small gallery-middle">
					<div class="agileits-gallery gallery-small-text effect-3">
						<a href="images/g6.jpg"><img src="images/g6.jpg" alt="" title="SPECIAL WIAN SUSHI"/></a>
					</div>
				</div>
				<div class="clearfix"></div>
				
			</div>
			<script type="text/javascript" src="js/simple-lightbox.js"></script>
			<script>
				$(function(){
					var $gallery = $('.gallery a').simpleLightbox();
					
					$gallery.on('show.simplelightbox', function(){
						console.log('Requested for showing');
					})
					.on('shown.simplelightbox', function(){
						console.log('Shown');
					})
					.on('close.simplelightbox', function(){
						console.log('Requested for closing');
					})
					.on('closed.simplelightbox', function(){
						console.log('Closed');
					})
					.on('change.simplelightbox', function(){
						console.log('Requested for change');
					})
					.on('next.simplelightbox', function(){
						console.log('Requested for next');
					})
					.on('prev.simplelightbox', function(){
						console.log('Requested for prev');
					})
					.on('nextImageLoaded.simplelightbox', function(){
						console.log('Next image loaded');
					})
					.on('prevImageLoaded.simplelightbox', function(){
						console.log('Prev image loaded');
					})
					.on('changed.simplelightbox', function(){
						console.log('Image changed');
					})
					.on('nextDone.simplelightbox', function(){
						console.log('Image changed to next');
					})
					.on('prevDone.simplelightbox', function(){
						console.log('Image changed to prev');
					})
					.on('error.simplelightbox', function(e){
						console.log('No image found, go to the next/prev');
						console.log(e);
					});
				});
			</script>
		</div>
	</div>
	<!-- //gallery -->
	<!-- footer -->
	<?php include("footer.php");?>
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>
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