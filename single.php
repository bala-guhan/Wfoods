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
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="gallery.php">Gallery</a></li>
									<li class="dropdown">
										<a href="codes.php" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Pages <b class="caret"></b></a>
										<ul class="dropdown-menu">
											<li><a href="icons.php">Icons</a></li>
											<li><a href="codes.php">Short Codes</a></li>
										</ul>
									</li>
									<li><a href="contact.php">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
			</div>
		</div>
		<div class="wthree-heading">
			<h2>Single Post</h2>
		</div>
	</div>
	<!-- //banner -->
	<!-- single -->
	<div class="single">
		<div class="container">
			<div class="agileits-single-img">
				<img src="images/g9.jpg" alt="">
				
				<h4>Suspendisse ornare vitae ex nec aliquam. Nunc et massa ut purus porta euismod quis eu erat. Nam ornare faucibus elit sed tempor. Quisque iaculis odio nibh, et auctor tellus rhoncus vel.</h4>
				<div class="agileinfo-single-icons">
					<ul>
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span>Admin</span></a></li>
						<li><i class="fa fa-calendar" aria-hidden="true"></i><span>04.Nov.2015</span></li>
						<li><a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i><span>20 Comments</span></a></li>
						<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>300 Likes</span></a></li>
					</ul>				
				</div>
				<p>Vestibulum commodo posuere ipsum in elementum. Proin id nibh dictum, ornare purus quis, ullamcorper lectus. Nullam bibendum, dui eu ornare hendrerit, turpis odio tempor nulla, id tempus neque erat finibus risus. Nullam accumsan ipsum at nunc molestie, at pretium ipsum dignissim. Nullam lorem ligula, gravida sit amet tincidunt id, porta non turpis. Vestibulum tincidunt at lectus et egestas. Sed facilisis tempor tellus eget feugiat. Praesent ut est vel metus consequat consequat. Etiam interdum egestas posuere. Quisque at mi eget lorem malesuada ornare non non quam.</p>
			</div>
			
			<!-- comments -->
			<div class="agileits_three_comments">
				<h3>Comments</h3>
				<div class="agileits_three_comment_grid">
					<div class="agileits_tom">
						<img src="images/f1.jpg" alt=" " class="img-responsive">
					</div>
					<div class="agileits_tom_right">
						<div class="hardy">
							<h4>David Son</h4>
							<p>21 June 2017</p>
						</div>
						<div class="reply">
							<a href="#">Reply</a>
						</div>
						<div class="clearfix"> </div>
						<p class="lorem">There are many variations of passages of Lorem Ipsum available,
						but the majority have suffered alteration in some form, by injected humour, 
						or randomised words which don't.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="agileits_three_comment_grid agileits_three_comment_grid1">
					<div class="agileits_tom">
						<img src="images/f2.jpg" alt=" " class="img-responsive">
					</div>
					<div class="agileits_tom_right">
						<div class="hardy">
							<h4>Shane Watson</h4>
							<p>21 June 2017</p>
						</div>
						<div class="reply">
							<a href="#">Reply</a>
						</div>
						<div class="clearfix"> </div>
						<p class="lorem">There are many variations of passages of Lorem Ipsum available,
						but the majority have suffered alteration in some form, by injected humour, 
						or randomised words which don't.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="agileits_three_comment_grid">
					<div class="agileits_tom">
						<img src="images/f3.jpg" alt=" " class="img-responsive">
					</div>
					<div class="agileits_tom_right">
						<div class="hardy">
							<h4>Steve Smith</h4>
							<p>21 June 2017</p>
						</div>
						<div class="reply">
							<a href="#">Reply</a>
						</div>
						<div class="clearfix"> </div>
						<p class="lorem">There are many variations of passages of lorem ipsum available,
							but the majority have suffered alteration in some form, by injected humour, 
							or randomised words which don't.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //comments -->
			<!-- leave-comments -->
			<div class="w3_leave_comment">
				<h3>Leave your comment</h3>
				<form action="#" method="post">
					<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
					<textarea name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Send">
				</form>
			</div>
			<!-- //leave-comments -->
		</div>
	</div>
	<!-- //single -->
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