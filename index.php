<?php
// Turn off all error reporting error_reporting(0) ;
error_reporting(0);
ini_set('display_errors', 0);
ini_set('html_errors', 0);
?>
<!DOCTYPE html>
<!-- main -->
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Daniele Fusari</title>
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
</head>

<body>
	<section id="home" class="templatemo-home">
		<div class="container">
			<div class="row">

				<div class="col-md-2 col-sm-1"></div>
				<div class="col-md-8 col-sm-10">
					<h1 class="tm-home-title"><strong>Daniele Fusari</strong></h1>
					<h2 class="tm-home-subtitle">Software Developer </h2>
					<p>I'm a self taught software developer</p>
					<a href="#work" class="btn btn-default smoothScroll tm-view-more-btn">My Work</a>
				</div>
				<div class="col-md-2 col-sm-1"></div>
			</div>
		</div>
	</section>
	<!-- START HOME -->
	<?php if (isset($_GET['sent'])) { ?>
		<div class="banner none">
			<p>Thank you! Your Message has been sent</p>
		</div>
	<?php 	} ?>

	<!-- START CONTACT -->
	<section id="contact" class="tm-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="title">Drop me a <strong>message</strong></h2>
					<hr>
				</div>
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-10 col-sm-10">
					<form action="send.php" method="post">
						<div class="col-md-6 col-sm-6">
							<input class="form-control" name="name" type="text" placeholder="Your Name">
						</div>
						<div class="col-md-6 col-sm-6">
							<input class="form-control" name="email" type="email" placeholder="Your Email">
						</div>
						<div class="col-md-12 col-sm-12">
							<input class="form-control" name="subject" type="text" placeholder="Subject">
							<textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea>
						</div>
						<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
							<input class="form-control" type="submit" value="SHOOT">
						</div>
					</form>
				</div>
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-12 col-sm-12">
					<p>Copyright &copy; 2024 @DanieleFusari</p>
				</div>
			</div>
		</div>
	</section>
	<!-- END CONTACT -->
</body>

</html>