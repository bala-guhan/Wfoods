<!DOCTYPE html>
<?php include("connection/config.php");

if(isset($_POST['btnAdd']))
  {

     $datas = array_filter($_POST);

	 
	 $datas['date_of_create'] = jk_mysql_datetime();



      $insertRoute = jk_insert_data(RET,$datas);
		  
		 if($insertRoute)
      {


      jk_redirect_success_url('index.php?success=Service booking successfully.!');}



   
		  
}

?>
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
									<li><a href="gallery.php">Gallery</a></li>
									<li><a class="active" href="contact.php">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
			</div>
		</div>
		<div class="wthree-heading">
			<h2>Contact</h2>
		</div>
	</div>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact">
		<div class="w3l-about w3l-team">
			<div class="container">
				<!-- map -->
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6542.654697433393!2d80.03595675009323!3d12.824801975509368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52f71300000001%3A0xaec1ecaf02a28337!2sSrm%20Campus!5e0!3m2!1sen!2sin!4v1710694986393!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
				<!-- //map -->
				<div class="agile-contact-grids">
					<div class="col-md-5 address">
						<div class="address-row">
							<div class="col-md-2 w3-agile-address-left">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 w3-agile-address-right">
								<h5>Visit Us</h5>
								<p>SRM kattankulathur,Chennai </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-row">
							<div class="col-md-2 w3-agile-address-left">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 w3-agile-address-right">
								<h5>Mail Us</h5>
								<p><a href="mailto:info@example.com"> pilasulakhi@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-row">
							<div class="col-md-2 w3-agile-address-left">
								<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 w3-agile-address-right">
								<h5>Call Us</h5>
								<p>+919384371342</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-7 contact-form">
						<form action="#" method="post">
							<input type="text" name="firstname" id="firstname" placeholder="First Name" required="">
							<input class="email" name="lastname" id="lastname" type="text" placeholder="Last Name" required="">
							<input type="text" name="number" id="number" placeholder="Mobile Number" required="">
							<input class="email" name="email" id="email" type="email" placeholder="Email" required="">
							<textarea name="message" id="message" placeholder="GIVE YOUR ORDER AS PER THENUMBER MENTIONED IN OUR MENU PAGE" required=""></textarea>
							<input type="submit" name="btnAdd" value="SUBMIT">
						</form>
					</div>
					<div class="clearfix"> </div>	
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
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