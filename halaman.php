<?php

session_start();

if (empty($_SESSION['username'])) {

	header('location:masuk.php');
} else {
	?>
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
					<a href="logout.php"><?php echo $_SESSION['username']; ?> (Logout)</a>
				</div>
				<!-- responsive -->
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<!-- site menu -->
				<nav class="main-menu">
					<ul>
						<li><a href="halaman.php">Halaman Awal</a></li>
						<li><a href="katalog.php">Katalog Kue</a></li>
						<li><a href="kontak.php">Kontak Kami</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- Header section end -->


		<!-- Hero section -->
		<section class="hero-section">
			<div class="hero-slider owl-carousel">
				<div class="hs-item set-bg" data-setbg="img/fathur_bg_4.jpg">
					<div class="hs-text">
						<div class="container">
							<h2>Toko <span>Kue</span> NuriCake</h2>
							<p>Toko Kue terenak, terjamin, termurah, dan pastinya sehat<br>
								Yang berlokasi di Depok Jawabarat.<br>
								Harga merakyat, kualitas dan rasa luar biasa enaknya!<br>
								Ayo segera di order!.</p>
							<a href="beli.php" class="site-btn">Order sekarang</a>
						</div>
					</div>
				</div>
				<div class="hs-item set-bg" data-setbg="img/fathur_bg_2.jpg">
					<div class="hs-text">
						<div class="container">
							<h2>Toko <span>Kue</span> NuriCake</h2>
							<p>Toko Kue terenak, terjamin, termurah, dan pastinya sehat<br>
								Yang berlokasi di Depok Jawabarat.<br>
								Harga merakyat, kualitas dan rasa luar biasa enaknya!<br>
								Ayo segera di order!.</p>
							<a href="beli.php" class="site-btn">Order sekarang</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Hero section end -->


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


		<!-- Feature section -->
		<section class="feature-section spad">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 p-0">
						<div class="feature-item set-bg" data-setbg="img/features/kue-2	.jpg">
							<span class="cata new">Kue Ultah</span>
							<div class="fi-content text-white">
								<h5><a href="beli.php">Kue Ultah enak dimakan ketika malam</a></h5>
								<p>Tersedia varian rasa Coklat, anggur, strawberry, melon, apel. </p>
								<a href="beli.php" class="fi-comment">Beli sekarang</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 p-0">
						<div class="feature-item set-bg" data-setbg="img/features/kue-1.jpg">
							<span class="cata strategy">Kue Tart</span>
							<div class="fi-content text-white">
								<h5><a href="beli.php">Kue Tart enak dimakan ketika malam</a></h5>
								<p>Tersedia varian rasa Coklat, anggur, strawberry, melon, apel. </p>
								<a href="beli.php" class="fi-comment">Beli sekarang</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 p-0">
						<div class="feature-item set-bg" data-setbg="img/features/kue-3.jpg">
							<span class="cata new">Kue Kering</span>
							<div class="fi-content text-white">
								<h5><a href="beli.php">Kue Kering enak dimakan ketika malam</a></h5>
								<p>Tersedia varian rasa Coklat, anggur, strawberry, melon, apel. </p>
								<a href="beli.php" class="fi-comment">Beli sekarang</a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 p-0">
						<div class="feature-item set-bg" data-setbg="img/features/kue-4.jpg">
							<span class="cata racing">Kue Bolu</span>
							<div class="fi-content text-white">
								<h5><a href="beli.php">Kue Bolu enak dimakan ketika malam</a></h5>
								<p>Tersedia varian rasa Coklat, anggur, strawberry, melon, apel. </p>
								<a href="beli.php" class="fi-comment">Beli sekarang</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature section end -->



		<!-- Footer top section -->
		<section class="footer-top-section">
			<div class="container">
				<div class="footer-top-bg">
					<img src="img/footer-top-bg.png" alt="">
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="footer-logo text-white">
							<img src="img/footer-logo2.png" alt="">
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="footer-widget mb-5 mb-md-0">
							<h4 class="fw-title">Latest Posts</h4>
							<div class="latest-blog">
								<div class="lb-item">
									<div class="lb-thumb set-bg" data-setbg="img/latest-blog/1.jpg"></div>
									<div class="lb-content">
										<div class="lb-date">June 21, 2018</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
										<a href="#" class="lb-author">By Admin</a>
									</div>
								</div>
								<div class="lb-item">
									<div class="lb-thumb set-bg" data-setbg="img/latest-blog/2.jpg"></div>
									<div class="lb-content">
										<div class="lb-date">June 21, 2018</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
										<a href="#" class="lb-author">By Admin</a>
									</div>
								</div>
								<div class="lb-item">
									<div class="lb-thumb set-bg" data-setbg="img/latest-blog/3.jpg"></div>
									<div class="lb-content">
										<div class="lb-date">June 21, 2018</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
										<a href="#" class="lb-author">By Admin</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="footer-widget">
							<h4 class="fw-title">Top Comments</h4>
							<div class="top-comment">
								<div class="tc-item">
									<div class="tc-thumb set-bg" data-setbg="img/authors/1.jpg"></div>
									<div class="tc-content">
										<p><a href="#">James Smith</a> <span>on</span> Lorem ipsum dolor sit amet, co</p>
										<div class="tc-date">June 21, 2018</div>
									</div>
								</div>
								<div class="tc-item">
									<div class="tc-thumb set-bg" data-setbg="img/authors/2.jpg"></div>
									<div class="tc-content">
										<p><a href="#">James Smith</a> <span>on</span> Lorem ipsum dolor sit amet, co</p>
										<div class="tc-date">June 21, 2018</div>
									</div>
								</div>
								<div class="tc-item">
									<div class="tc-thumb set-bg" data-setbg="img/authors/3.jpg"></div>
									<div class="tc-content">
										<p><a href="#">James Smith</a> <span>on</span> Lorem ipsum dolor sit amet, co</p>
										<div class="tc-date">June 21, 2018</div>
									</div>
								</div>
								<div class="tc-item">
									<div class="tc-thumb set-bg" data-setbg="img/authors/4.jpg"></div>
									<div class="tc-content">
										<p><a href="#">James Smith</a> <span>on</span> Lorem ipsum dolor sit amet, co</p>
										<div class="tc-date">June 21, 2018</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer top section end -->


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
	</body>

	</html>
<?php
}
?>