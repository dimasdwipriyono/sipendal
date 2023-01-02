<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Masjid Nur Sulaiman Banyumas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- sweet alert 2 -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

<!-- ======= Header ======= -->
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
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-header-data">
                <h2>Data Sandal</h2>
                <p> Berikut adalah data sandal pengunjung Masjid Agung Nur Sulaiman Banyumas</p>
            </div>
        </div>
    </section>
    <div class="article-dual-column" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="intro"></div>
                </div>
            </div>
            <div class="daftar-aduan">
                <div class="table-responsive">
                    <table class="table dataTable my-0" id="dataTable">
                        <thead>
                            <tr style="background-color: #006a5d; color:#FFF">
                                <th>No</th>
                                <th>No Kartu</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //koneksi ke database
                            include "koneksi.php";
                            //baca data pengunjung
                            $sql = mysqli_query($konek, "select * from pengunjung");
                            $no = 0;
                            while ($data = mysqli_fetch_array($sql)) {
                                $no++;
                            ?>
                                <tr>
                                    <td style="width: 10px;"> <?php echo $no; ?> </td>
                                    <td style="width: 200px;"><?php echo $data['nokartu']; ?></td>
                                    <td style="width: 350px;"><?php echo $data['nama']; ?></td>
                                    <td style="width: 350px;"><?php echo $data['alamat']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $data['id']; ?>" > Edit</a> | 
                                        <a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn-delete"> Hapus</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
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

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    
</body>

</html>