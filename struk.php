<?php
// Create database connection using config file
include_once("config.php");

session_start();
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM beli ORDER BY id DESC");
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

    <table class="table table-md table-borderless">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis kue</th>
                <th scope="col">Harga</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Promo</th>
                <th scope="col">Pengaturan</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $no = 0;
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                $no++;
                echo "<td>" . $no . "</td>";
                echo "<td>" . $user_data['username'] . "</td>";
                echo "<td>" . $user_data['nama'] . "</td>";
                echo "<td>" . $user_data['jenis_kue'] . "</td>";
                echo "<td>" . $user_data['harga'] . "</td>";
                echo "<td>" . $user_data['total_harga'] . "</td>";
                echo "<td>" . $user_data['promo'] . "</td>";
                $namaa = $user_data['username'];
                //echo "<td><a href='#' class='btn btn-edit-data-tiketsaya' data-toggle='modal' data-target='#myModal" . $user_data['ket'] . "'>Edit</a></td></tr>";
                if ($namaa == "admin") {
                    echo "<td><a class='btn btn-edit-data-tiketsaya' href='tugas-p3-editdata.php?id=$user_data[id]'>Edit</a> | <a class='btn btn-delete-data-tiketsaya' href='tugas-p3-deletedata.php?id=$user_data[id]'>Hapus</a></td></tr>";
                } else {
                    echo "<td>Hanya Admin</td></tr>";
                }
            }
            ?>

        </tbody>
    </table>
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