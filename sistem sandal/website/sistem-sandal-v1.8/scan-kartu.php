<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Scan Kartu</title>
    <script type="text/javascript" src="assets/jquery/jquery.min.js"></script>
    <!-- scanning membaca kartu RFID -->
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function(){
				$("#cekkartu").load('bacakartu.php')
			}, 2000);
		});	
	</script>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">
</head>


<!-- start Header -->
<section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">nursulaiman@gmail.com</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>+6281 1234 5678</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</section>
<!-- End Top Bar -->

<header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
            <h1>Sipendal<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="data-sandal.php">Data Sandal</a></li>
                <li><a href="rekap-sandal.php">Rekap Sandal</a></li>
                <li><a href="scan-kartu.php">Scan Kartu</a></li>
                <li><a href="registrasi.php">Registrasi</a></li>
            </ul>
        </nav>
        <!-- .navbar -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>
<!-- End Header -->

<body>
    <!-- isi -->
    <div class="container-fluid" style="padding-top: 10%">
        <div id="cekkartu"></div>
    </div>

    <!-- start footer -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.php" class="logo d-flex align-items-center">
                        <span>Sipendal</span>
                    </a>
                    <p>#AyoKeMasjid</p>
                    <div class="social-links d-flex mt-4">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Link Terkait</h4>
                    <ul>
                        <li><a href="#">Pemerintah Kab. Banyumas</a></li>
                        <li><a href="#">Kepala desa sudagaran</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4>Social Media</h4>
                    <ul>
                        <li><a href="#">Youtube</a></li>
                        <li><a href="#">TikTok</a></li>
                        <li><a href="#">Email</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Kontak Kami</h4>
                    <p>
                        Jl. Budi Utomo, Barat alun-alun Banyumas <br>
                        Sudagaran, Banyumas 53192<br>
                        Jawa Tengah, Indonesia <br><br>
                        <strong>Phone:</strong> +6281 1234 5678<br>
                        <strong>Email:</strong> nursulaiman@gmail.com<br>
                    </p>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Sipendal</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by dwpr.tech</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/jquery/jquery.min.js"></script>
</body>
</html>