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
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- SITE TITLE -->
	<title>Daniele Fusari</title>
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">
	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link href='//fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-213828274-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-213828274-1');
	</script>
</head>

<body data-spy="scroll" data-target="#rock-navigation">

	<!-- START NAVIGATION -->
	<div class="navbar navbar-default bs-dos-nav navbar-fixed-top sticky-navigation" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Daniele Fusari</a>
			</div>
			<nav class="collapse navbar-collapse" id="rock-navigation">
				<ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
					<li><a href="#home" class="smoothScroll">Home</a></li>
					<li><a href="#work" class="smoothScroll">My Work</a></li>
					<li><a href="#clients" class="smoothScroll">Clients</a></li>
					<li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
					<li><a href="#resume" class="smoothScroll">Resume</a></li>
					<li><a href="#about" class="smoothScroll">About</a></li>
					<li><a href="#contact" class="smoothScroll">Contact</a></li>
				</ul>
			</nav>

		</div>
	</div>
	<!-- END NAVIGATION -->

	<!-- START HOME -->
	<?php if (isset($_GET['sent'])) { ?>
		<div class="banner none">
			<p>Thank you! Your Message has been sent</p>
		</div>
	<?php 	} ?>
	<section id="home" class="templatemo-home">
		<div class="container">
			<div class="row">

				<div class="col-md-2 col-sm-1"></div>
				<div class="col-md-8 col-sm-10">
					<h1 class="tm-home-title"><strong>Daniele Fusari</strong></h1>
					<h2 class="tm-home-subtitle">Software Developer </h2>
					<p>I'm a <strong>self taught software developer</strong> from Coventry.  </br> I'm looking for an trainee software posistion to further my web developing skills.</p>
					<a href="#work" class="btn btn-default smoothScroll tm-view-more-btn">My Work</a>
				</div>
				<div class="col-md-2 col-sm-1"></div>
			</div>
		</div>
	</section>
	<!-- END HOME -->

	<!-- START work -->
	<?php require_once 'my_work.php' ?>
	<section id="work" class="tm-padding-top-bottom-100">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-1 col-md-11">
					<h2 class="title">Previous <strong>Work</strong></h2>
				</div>
				<?php foreach ($my_work as $work) { ?>
				<a target="_blank" href="<?=$work['link'] ?>">
					<div class="col-md-4 col-sm-4">
						<div class="work-wrapper">
							<div class="img_wrap">
								<img class="my-work-logo" src=<?=$work['logo'] ?> alt=<?=$work['website name']?>>
							</div>
							<h3 class="text-uppercase tm-work-h3"><?=$work['website name']?></h3>
							<hr>
							<p><?=$work['text']?></br>
								<strong><?=$work['complete date']?></strong>
							</p>
						</div>
					</div>
				</a>
				<?php } ?>
			</div>
		</div>
	</section>
	<!-- END work -->

	<!-- START PORTFOLIO -->
	<section id="portfolio" class="tm-portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12 wow bounce">
					<div class="title">
						<h2 class="tm-portfolio-title">My <strong>Portfolio</strong></h2>
					</div>

					<!-- START ISO SECTION -->
					<div class="iso-section">
						<ul class="filter-wrapper clearfix">
							<li><a href="#" class="opc-main-bg selected" data-filter=".languages">Languages</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".html">HTML</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".css">CSS</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".javascript">JavaScript</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".databases">Databases</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".development_tools">Development Tools</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".php">PHP</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".python">Python</a></li>
							<li><a href="#" class="opc-main-bg" data-filter="*">All</a></li>
						</ul>
						<div class="iso-box-section">
							<div class="iso-box-wrapper col4-iso-box">
								<?php foreach ($languages as $language) { ?>
								<div class="iso-box <?= $language['category'] ?> col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="<?= $language['img'] ?>" class="fluid-img <?php if ($language['category'] != 'languages') {
    echo 'strech';
} ?>" alt="<?= $language['header'] ?>">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title"><?= $language['header'] ?></h3>
										</div>
									</div>
								</div>
							<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END PORTFOLIO -->

	<!-- START RESUME -->
	<section id="resume" class="tm-padding-top-bottom-100">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<h2 class="title">My <strong>Profile</strong></h2>
					<p><span class="tm-info-label">Name</span>Daniele Fusari</p>
					<p><span class="tm-info-label">Age</span>39</p>
					<p><span class="tm-info-label">Languages</span>English / BSL</p>
					<p><span class="tm-info-label">Address</span>Coventry UK</p>
					<p><span class="tm-info-label">Phone</span><a href="tel:07449998388">07449998388</a></p>
					<p><span class="tm-info-label">Email</span><a href="mailto:Daniele@Fusari.co.uk">Daniele@Fusari.co.uk</a></p>
					<p><span class="tm-info-label">github</span> <a target="_blank" href="https://github.com/DanieleFusari" class="tm-red-text">github.com/DanieleFusari</a></p>
					<p><span class="tm-info-label">Courses </span> <a target="_blank" href="https://teamtreehouse.com/danielefusaridoughty" class="tm-red-text">TeamTreeHouse</a></p>
					<p><span class="tm-info-label">CV</span> <a href="/#contact" class="tm-red-text">Available on request</a></p>
				</div>

				<div class="col-md-6 col-sm-6">
					<h2 class="title">Languages</h2>

					<h4 class="tm-progress-label">HTML5 <small class="progress-percent-small">95%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
					</div>

					<h4 class="tm-progress-label">PHP <small class="progress-percent-small">85%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
					</div>

					<h4 class="tm-progress-label">JavaScript <small class="progress-percent-small">70%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
					</div>

					<h4 class="tm-progress-label">SQL <small class="progress-percent-small">65%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
					</div>

					<h4 class="tm-progress-label">CSS <small class="progress-percent-small">65%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
					</div>

					<h4 class="tm-progress-label">Python <small class="progress-percent-small">20%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END RESUME -->

	<!-- START ABOUT -->
	<section id="about" class="tm-about">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-7">
					<div class="title">
						<h2>This is <strong>me</strong></h2>
						<h1 class="tm-red-text"> <strong>Creative </strong> Adventures</h1>
					</div>
					<p>I have been self teaching software development skills for the past three years. I am looking for a junior software role that would really allow me to use these skills and also enable me to expand my learning. </br> 	I am a keen programmer and I have found not only this has been a hobby but I would like this to be a role for me to progress into.</p>
					<p>I am currently a Broadband Tech advisor and have found that this has given me a really good knowledge base; however, I am looking for a challenge that suits my abilities. I would really appreciate an opportunity like this. </br>I am aware I don’t have all of the qualifications or experience requested though, I am willing to attend extra courses in my own time, where I can demonstrate my creativity and strong work ethics.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- END ABOUT -->

	<!-- START SOCIAL -->
	<section id="social" class="tm-social">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.3s">
					<div class="media linkedIn">
						<a href="https://www.linkedin.com/in/daniele-fusarid/">
							<img class="img_social" src="/images/LI.png" alt="LinkedIn">
							<div class="media-body">
								<h4 class="media-heading tm-social-title">Follow me on</h4>
								<h3>LinkedIn</h3>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.6s">
					<div class="media github">
						<a href="https://github.com/DanieleFusari">
							<img class="img_social" src="/images/GitHub.png" alt="GitHub">
							<div class="media-body">
								<h4 class="media-heading tm-social-title">Follow me on</h4>
								<h3>GitHub</h3>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.6s">
					<div class="media instagram">
						<a href="https://www.instagram.com/daniele_fusarid/">
							<img class="img_social" src="/images/Instagram.png" alt="Instagram">
							<div class="media-body">
								<h4 class="media-heading tm-social-title">Private Account</h4>
								<h3>Instagram</h3>
							</div>
						</a>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!-- END SOCIAL -->

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
							<input class="form-control" name="subject"  type="text" placeholder="Subject">
							<textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea>
						</div>
						<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
							<input class="form-control" type="submit" value="SHOOT">
						</div>
					</form>
				</div>
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-12 col-sm-12">
					<p>Copyright &copy; 2021 @DanieleFusari</p>
				</div>
			</div>
		</div>
	</section>
	<!-- END CONTACT -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/imagesloaded.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>
