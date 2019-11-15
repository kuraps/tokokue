<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Toko Kue - Nuri Cake</title>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" />

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link href="css/style.css?version=<?php echo filemtime('css/style.css'); ?>" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css" />


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.html">
				<img src="img/logo2.png" alt="">
			</a>
			<div class="user-panel">
				<a href="#">Login</a> / <a href="#">Register</a>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="index.html">Halaman Awal</a></li>
					<li><a href="review.html">Katalog Kue</a></li>
					<li><a href="contact.html">Kontak Kami</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Promo Kue November 2019</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">Kue Ultah</span>Beli 10 Kue ultah gratis 1 Kue ultah
					elit. </div>
				<div class="nt-item"><span class="strategy">Kue Tart</span>Beli 2 Kue tart, diskon 10 persen
					elit. </div>
				<div class="nt-item"><span class="racing">Kue kering</span>Beli Kue kering lebih dari 11 gratis 1 kue kering
					kering.
				</div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Page section -->
	<section class="page-section spad contact-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<h4 class="comment-title">Hubungi kami</h4>
					<p>Jika kamu kesulitan, atau punya pertanyaan, silahkan hubungi kami dibawah ini.</p>
					<div class="row">
						<div class="col-md-9">
							<ul class="contact-info-list">
								<li>
									<div class="cf-left">Alamat</div>
									<div class="cf-right">Margonda Depok</div>
								</li>
								<li>
									<div class="cf-left">Telp</div>
									<div class="cf-right">+62 822 0101 0202</div>
								</li>
								<li>
									<div class="cf-left">E-mail</div>
									<div class="cf-right">nuricake@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="social-links">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<h4 class="comment-title">Masuk</h4>
						<form class="comment-form" action="autentifikasi.php" method="post">
							<div class="row">
								<div class="col-md-12">
									<input type="text" name="username" placeholder="Username" requeired>
								</div>
								<div class="col-md-12">
									<input type="password" name="password" placeholder="Password" requeired>
								</div>
								<div class="col-lg-12">
									<div class="col-md-6">
										<input type="submit" name="login" class="site-btn btn-sm" value="Masuk">
									</div>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section end -->


	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<p class="copyright">
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;
				<script>
					document.write(new Date().getFullYear());
				</script> All rights reserved | This template is made
				with <i class="fa fa-heart-o" aria-hidden="true"></i> by MVREAK DEV TECH Nusa Mandiri
			</p>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.marquee.min.js"></script>
	<script src="js/main.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc&sensor=false"></script>
	<script src="js/map.js"></script>

</body>

</html>