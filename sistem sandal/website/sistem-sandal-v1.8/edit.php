<!-- proses penyimpanan -->

<?php
include "koneksi.php";

//baca ID data yang akan di edit
$id = $_GET['id'];

//baca data pengunjung berdasarkan id
$cari = mysqli_query($konek, "select * from pengunjung where id='$id'");
$hasil = mysqli_fetch_array($cari);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Masjid Nur Sulaiman Banyumas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

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
    <!-- sweetalert -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.css"> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<!-- start header -->
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
        <a href="index.html" class="logo d-flex align-items-center">
            <h1>Sipenggal<span>.</span></h1>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="data-sandal.php">Data Sandal</a></li>
                <li><a href="#services">Rekap Sandal</a></li>
                <li><a href="#portfolio">Scan Kartu</a></li>
                <li><a href="#team">Registrasi</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
        <!-- .navbar -->
        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
</header>
<!-- End Header -->

<body>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Edit</h2>
                <p>Silahkan edit data pada form dibawh ini</p>
            </div>
            <div class="row gx-lg-0 gy-4">
                <div class="col-lg-4">
                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Lokasi:</h4>
                                <p>Sudagaran, Banyumas 53192, Jawa Tengah</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>nursulaiman@gmail.com</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Telepon:</h4>
                                <p>+6281 1234 5678</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                        <div class="info-item d-flex">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h4>Jam Buka:</h4>
                                <p>Setiap Hari</p>
                            </div>
                        </div>
                        <!-- End Info Item -->
                    </div>
                </div>
                <div class="col-lg-8">
                    <form method="post" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="nokartu" class="form-control" id="nokartu" placeholder="Nomor Kartu" value="<?php echo $hasil['nokartu']; ?>">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Pengunjung" value="<?php echo $hasil['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="alamat" id="alamat" rows="7" placeholder="Alamat Lengkap"><?php echo $hasil['alamat']; ?></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="btnSimpan" id="btnSimpan">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
                <!-- End Contact Form -->
            </div>
        </div>
    </section>

    <!-- End Contact Section -->
    <!-- start footer -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>Sipenggal</span>
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
                        <li><a href="#">anonim</a></li>
                        <li><a href="#">anonim</a></li>
                        <li><a href="#">anonim</a></li>
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
                &copy; Copyright <strong><span>Sipenggal</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by dwpr.tech</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <?php
        //jika tombol simpan diklik
if (isset($_POST['btnSimpan'])) {
    //baca isi inputan form
    $nokartu = $_POST['nokartu'];
    $nama    = $_POST['nama'];
    $alamat  = $_POST['alamat'];

    //simpan ke tabel pengunjung
    $simpan = mysqli_query($konek, "update pengunjung set nokartu='$nokartu', nama='$nama', alamat='$alamat' where id='$id'");
    //jika berhasil tersimpan, tampilkan pesan Tersimpan,
    //kembali ke data pengunjung
    if ($simpan) {
        echo
                    "<script> 
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Update',
                        text: 'data berhasil diubah',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(()=> location = 'data-sandal.php')
                </script>";
//         echo '<script>
//     setTimeout(function() {
//         swal.fire({
//             title: "Wow!",
//             text: "Message!",
//             type: "success"
//         }, function() {
//             window.location.hre = "index.php";
//         });
//     }, 1000);
// </script>';
        // echo "
        // 		<script>
        // 			alert('Tersimpan');
        // 			location.replace('data-sandal.php');
        // 		</script>
        // 	";
    } else {
        echo
                    "<script> 
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Gagal update',
                        text: 'data tidak berhasil diubah',
                        showConfirmButton: false,
                        timer: 2000
                    }).then(()=> location = 'data-sandal.php')
                </script>";
        // echo "
        // 		<script>
        // 			alert('Gagal Tersimpan');
        // 			location.replace('data-sandal.php');
        // 		</script>
        // 	";
    }
}
?>
    ?>
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
    <script src="assets/sweetalert/sweetalert2.all.min.js"></script>

    <!-- sweetalert -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.28.11/dist/sweetalert2.min.js"></script>

</body>

</html>