
<?php
  include("include/connection.php");
  if(isset($_POST['submit']))
  {
	 $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
$sql=mysqli_query($con,"insert into contact(name,email,subject,message)values(
'$name','$email','$subject','$message')");	
  }
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>ARISE-SOFT TECH</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Pacifico&amp;subset=cyrillic,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Barlow+Semi+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<!-- header -->
	<div class="header">
		<!-- navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<h1>
				<a class="navbar-brand" href="index.html">
					<img src="images/145.png" alt=" " class="img-fluid">
				</a>
			</h1>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item  mx-lg-3">
						<a class="nav-link" href="about.html">About</a>
					</li>
					
					<li class="nav-item  mr-lg-3">
						<a class="nav-link" href="services.html">Services</a>
					</li>
					<li class="nav-item  mr-lg-3">
						<a class="nav-link" href="portfolio.html">Portfolio</a>
					</li>
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="event.html">Event</a>
					</li>
					<li class="nav-item mr-lg-3">
						<a class="nav-link" href="career.html">Career</a>
					</li>
					<li class="nav-item  mr-lg-3">
						<a class="nav-link" href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
		<!-- //navigation -->
	</div>
	<!-- //header -->
	<!-- banner -->
	<div class="banner-2">
		<div class="container">
		<center><h3 class="aa text-white">Arise-Soft Tech</h3></center>
		</div>
	</div>
	<!-- //banner -->
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
    </ol>
	<!-- contact -->
	<div class="contact-main  w3layouts-section py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="title-heading text-center mb-sm-5 mb-4">
				<h3 class="title text-capitalize text-dark">contact us</h3>
				<p class="title-text font-weight-light font-italic mt-2">Fill The Form And Send Your Query</p>
				<p>We have made it easy for clients to reach us and get their solutions weaved</p>
			</div>
			<div class="inner_contact">
				<div class=" contact-leftgrid">
					<h4>let's Get In Touch</h4>
					<div class="address">
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-phone" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<p>+(91) 987654321</p>
								<p>+1 234 567 8901</p>
							</div>
						</div>
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-envelope" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<a href="mailto:example@email.com"> arisesofttech@gmail.com</a>
								<a href="mailto:example@email.com"> mail@example.com</a>
							</div>
						</div>
						<div class="row wthree-address-grid">
							<div class="col-2 address-left">
								<span class="fa fa-map-marker" aria-hidden="true"></span>
							</div>
							<div class="col-10 address-right">
								<p>12 B, 
									<br> Chauraha
								</p>
								<p> 12 B, 5 street<br> 32 BLock-D
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-right-grid">
					<div class="wthree-contact-form">
						<form name="contact" netlify>
							<input type="text" name="name" placeholder="Name" required="">
							<input type="email" class="email" name="email" placeholder="Email" required="">
							<input type="text" name="subject" placeholder="Subject" required="">
							<textarea name="message" placeholder="Message" required=""></textarea>
							<center><input type="submit" value="SUBMIT" name="submit"></center>
						</form>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<h3 class="title text-capitalize text-dark text-center">Locate us</h3><br><br>

	<div class="contact-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58688.49444205986!2d75.75602044450659!3d23.169072202662644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39637469de00ff23%3A0x7f82abdf7899d412!2sUjjain%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1721911663403!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
	<!-- //contact -->

<!-- footer -->
<div class="mkl_footer text-center py-4">
	<div class="container py-xl-5 py-4">
		<div class="mkls_footer_grid">
			<h2 class="text-white text-capitalize mb-5">Arise-Soft Tech</h2>
			<p>The Ideas That Are Not Afraid To Be Different, Let's Start Work With Arise-Soft Tech Today</p>
			<!-- social icons -->
			
		<!-- //social icons -->
			<!-- footer logo -->
			<div class="logo2 my-sm-5 my-4">
				<a class="" href="index.html">
					<img src="images/145.png" alt=" " class="img-fluid">
				</a>
			</div>
			
			<!-- //footer logo -->
		</div>

		<!-- address -->
		
		<div class="contact-left-footer border-bottom pb-sm-5 pb-4">
			<h2 class="text-white text-capitalize text-center mb-5">Locate US</h2>
			<ul>
				<li>
					<p class="text-white">
						<i class="fas fa-location-arrow mr-2"></i>12 B,   12 B, 5 street 32 BLock-D</p>
				</li>
				<li class="mx-4">
					<p class="text-white">
						<i class="fas fa-phone mr-2"></i>+(91) 987654321</p>
				</li>
				<li>
					<p class="text-white">
						<i class="far fa-envelope-open mr-2"></i>
						<a href="mailto:info@example.com" class="text-white mr-3">allsoftinfotech@gmail.com</a>
					</p>
				</li>
				<li>
					<p class="text-white">
						<i class="fas fa-globe mr-1"></i>
						<a href="mailto:info@example.com" class="text-white">www.allsoftinfotech.com</a>
					</p>
				</li>
			</ul>
			<div class="footer-social mt-4">
				<div class="copyrighttop">
									
					<ul class="social_list1 text-left"><center>
	
						<li>
							<a href="#" class="facebook1 mx-2 ">
								<i class="fab fa-facebook-f"></i>
	
							</a>
						</li>
						<li>
							<a href="#" class="twitter2 mx-1">
								<i class="fab fa-twitter"></i>
	
							</a>
						</li>
						<li>
							<a href="#" class="instagram mx-2">
								<i class="fab fa-instagram"></i>
							</a>
						</li>
						<li>
							<a href="#" class="skype mx-2">
								<i class="fab fa-skype"></i>
							</a>
						</li>
						<li>
							<a href="#" class="linkedin">
								<i class="fab fa-linkedin"></i>
							</a>
						</li>
	
					</center></ul>
	</div>
				</div>
		</div>
		
		<!-- //address -->
	</div>
</div>
<!-- //footer -->

<!-- copyright -->
<div class="w3l-copy text-center py-4">
	<p class="text-white">© 2023 Arise-Soft Tech. All rights reserved. This Design is Made With the love by
		<a href="http://w3layouts.com/">Tanishq 💗</a>
	</p>
</div>
<!-- //copyright -->




	<!-- Js files -->

	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<!-- smooth scrolling-bottom-to-top -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<!-- //smooth scrolling-bottom-to-top -->

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>
