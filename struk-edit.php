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
        <section class="page-info-section set-bg" data-setbg="img/page-top-bg/5.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="margin-top:20px;">
                        <h2 class="comment-title" style="color:white;">Tentukan kue pilihanmu! Scroll kebawah untuk beli.</h2>
                    </div>
                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="feature-item set-bg" data-setbg="img/features/kue-2.jpg">
                            <span class="cata new">Kue Ultah</span>
                            <div class="fi-content text-white">
                                <h5><a href="#">Kue Ultah enak dimakan ketika malam</a></h5>
                                <p>Tersedia varian rasa Coklat, anggur, strawberry, melon, apel. </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="feature-item set-bg" data-setbg="img/features/kue-1.jpg">
                            <span class="cata strategy">Kue Tart</span>
                            <div class="fi-content text-white">
                                <h5><a href="#">Kue Tart enak dimakan ketika malam</a></h5>
                                <p>Tersedia varian rasa Coklat, anggur, strawberry, melon, apel. </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="feature-item set-bg" data-setbg="img/features/kue-3.jpg">
                            <span class="cata new">Kue Kering</span>
                            <div class="fi-content text-white">
                                <h5><a href="#">Kue Kering enak dimakan ketika malam</a></h5>
                                <p>Tersedia varian rasa Coklat, anggur, strawberry, melon, apel. </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 p-0">
                        <div class="feature-item set-bg" data-setbg="img/features/kue-4.jpg">
                            <span class="cata racing">Kue Bolu</span>
                            <div class="fi-content text-white">
                                <h5><a href="#">Kue Bolu enak dimakan ketika malam</a></h5>
                                <p>Tersedia varian rasa Coklat, anggur, strawberry, melon, apel. </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Feature section end -->

        <section class="page-info-section set-bg" data-setbg="img/page-top-bg/5.jpg">
            <div class="container">
                <div class="row">
                    <form class="comment-form" action="beli.php" method="post">
                        <div class="row" style="margin-top:50px;">
                            <div class="col-md-12">
                                <h2 class="comment-title" style="color:white;">Nuri Cake | Beli kue</h2>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="username" disabled value="<?php echo $_SESSION['username']; ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="nama" disabled value="<?php echo $_SESSION['nama']; ?>">
                            </div>
                            <div class="col-md-12">
                                <select name="jenis_kue">
                                    <option value="Ultah">Kue Ultah</option>
                                    <option value="Tart">Kue Tart</option>
                                    <option value="Kering">Kue Kering</option>
                                    <option value="Bolu">Kue Bolu</option>
                                </select>
                            </div>
                            <div class="col-md-10">
                                <input type="text" name="jumbel" value="<?php echo $nu; ?>" required>
                            </div>
                            <div class="col-md-2">
                                <input type="submit" name="Submit" value="Proses" class="site-btn btn-sm">
                            </div>
                        </div>
                        <?php
                            if (isset($_POST['Submit'])) {
                                include_once("config.php");
                                $harga = 0;
                                $total_harga = 0;
                                $nama = $_SESSION['nama'];
                                $username = $_SESSION['username'];
                                $jumbel = $_POST['jumbel'];
                                $jenis_kue = $_POST['jenis_kue'];
                                $promo = "TIDAK DAPAT PROMO";
                                if ($jenis_kue == "Ultah") {
                                    $harga = 1000;
                                    $total_harga = $jumbel * $harga;
                                    if ($jumbel >= 10) {
                                        $promo = "GRATIS 1 KUE ULTAH!";
                                    } else {
                                        $promo = "TIDAK DAPAT PROMO";
                                    }
                                } else if ($jenis_kue == "Tart") {
                                    $harga = 1000;
                                    if ($jumbel >= 2) {
                                        $promo = "DISKON 10$!";
                                        $total_harga = ($jumbel * $harga) * 0.1;
                                    } else {
                                        $promo = "TIDAK DAPAT PROMO";
                                        $total_harga = $jumbel * $harga;
                                    }
                                } else if ($jenis_kue == "Kering") {
                                    $harga = 1000;
                                    $total_harga = $jumbel * $harga;
                                    if ($jumbel > 11) {
                                        $promo = "GRATIS 1 KUE KERING!";
                                    } else {
                                        $promo = "TIDAK DAPAT PROMO";
                                    }
                                } else if ($jenis_kue == "Bolu") {
                                    $harga = 1000;
                                    $total_harga = $jumbel * $harga;
                                } else {
                                    $harga = 0;
                                    $total_harga = 0;
                                }
                                $result = mysqli_query($mysqli, "INSERT INTO beli(username,nama,jenis_kue,harga,total_harga,promo) VALUES ('$username','$nama','$jenis_kue','$harga','$total_harga','$promo')");
                                echo "<h4 style='color:white;'>Berhasil beli kue! <a href='struk.php'>cetak struk</a></h4>";
                            }
                            ?>
                    </form>

                </div>
            </div>
        </section>

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