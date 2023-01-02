<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Scan Kartu</title>
    <?php include "header.php"; ?>
    <!-- scanning membaca kartu RFID -->
	<script type="text/javascript">
		$(document).ready(function() {
			setInterval(function(){
				$("#cekkartu").load('bacakartu.php')
			}, 2000);
		});	
	</script>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand text-warning" href="index.html">-</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div
                class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link text-warning" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-warning" href="data-sandal.php">Data Sandal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-warning" href="rekap-sandal.php">Rekap Sandal</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-warning" href="scan-kartu.php">Scan Kartu</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link text-warning" href="registrasi.php">Registrasi</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <header>
        <div class="carousel-image">
            <div id="my-slider" class="carousel slide" data-ride="carousel">
              
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/header-scan-kartu.png" class="d-block w-100" alt="carousel">
                  </div>
              </div>
            </div>
        </div>
    </header>
    <hr>
    <!-- isi -->
	<div class="container-fluid" style="padding-top: 10%">
		<div id="cekkartu"></div>
	</div>
	<br>
    <!--Footer Start-->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="box">
                    <div class="icon">
                        <span class="fa fa-phone"></span>
                    </div>
                    <h4>Phone</h4>
                    <p><a href="#">+62812345678</a></p>
                </div>
                <div class="box">
                    <div class="icon">
                        <span class="fa fa-envelope"></span>
                    </div>
                    <h4>Email</h4>
                    <p><a href="#">layananaduan@gmail.com</a></p>
                </div>
                <div class="box">
                    <div class="icon">
                        <span class="fa fa-map-marker"></span>
                    </div>
                    <h4>Location</h4>
                    <p><a href="#">Indonesia</a></p>
                </div>
            </div>
            <div class="social-links">
                <ul>
                    <li><a href="https://www.linkedin.com/in/dimas-dwi-priyono-0830381ab/?originalSubdomain=id" target="_blank"><span
                                class="fa fa-linkedin"></span></a></li>
                    <li><a href="https://www.instagram.com/dimasdwipriyono/" target="_blank"><span
                                class="fa fa-instagram"></span></a></li>
                    <li><a href="#" target="_blank"><span
                                class="fab fa-whatsapp"></span></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!--Footer End-->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>