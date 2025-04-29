<?php
require 'function.php';
if (!isset($_SESSION['session_nim'])) {
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <title>Halaman Awal</title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg bg-warning" style="background: linear-gradient(to right, #ffc107 , #ff4500);">
            <!-- background: linear-gradient(to right, #ffc107 , #ff4500); -->
            <!-- background: linear-gradient(to right, black , #ff4500 , #ff4500); -->
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/logo-fik-transparant.png" alt="Bootstrap" width="200" height="30">
                </a>
                <div class="navbar-nav" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item me-5 fs-5">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item me-5 fs-5">
                            <a class="nav-link active text-white" aria-current="page" href="#about">About</a>
                        </li>
                        <li class="nav-item me-5 fs-5">
                            <a class="nav-link active text-white" aria-current="page" href="#services">Services</a>
                        </li>
                        <li class="nav-item me-5 fs-5">
                            <a class="nav-link active text-white" aria-current="page" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <div id="navbarSupportedContent" aria-labelledby="bd-theme-text" data-bs-popper="static">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i data-feather="user"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><p class="dropdown-item mb-1"><?php echo $_SESSION['session_nim'] ?></p></li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>
    </header>
    <main>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="images/gambar fik.jpg" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption top-0 mt-4">
                        <p class="fs-4 mt-5">Selamat Datang <?php echo $_SESSION['session_nim']; ?> Di Website Layanan Peminjaman Ruangan FIK</p>
                        <h1 class="display-1 fw-bolder text-capitalize">Fakultas Ilmu Komputer</h1>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/Lab-Programming-JPG.jpg" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption top-0 mt-4">
                        <p class="fs-4 mt-5">Mudah, Cepat, dan Efisien: Solusi Pemesanan Kelas Tanpa Batas!</p>
                        <h1 class="display-1 fw-bolder text-capitalize">Fakultas Ilmu Komputer</h1>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="images/sarana1.jpg" class="d-block w-100 c-img" alt="...">
                    <div class="carousel-caption top-0 mt-4">
                        <p class="fs-4 mt-5">Akses Kelas Lebih Mudah, Belajar Lebih Lancar dan Efektif!</p>
                        <h1 class="display-1 fw-bolder text-capitalize">Fakultas Ilmu Komputer</h1>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container my-5" id="about">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card-body">
                        <div class="container my-5">
                            <h2 class="card-text">Layanan Peminjaman Ruangan</h2>
                            <p class="card-text" style="text-align: justify;">Sistem Peminjaman Kelas untuk Fakultas Komputer dirancang 
                                untuk memfasilitasi mahasiswa dan dosen yang membutuhkan ruang kelas, baik untuk keperluan penggantian 
                                jadwal maupun penambahan kelas. Melalui sistem ini, pengguna dapat meminjam ruang kelas yang tersedia 
                                tanpa perlu mengunjungi layanan administrasi untuk memeriksa ketersediaan ruangan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body">
                        <img src="images/studentsinadmin.png" class="card-img-top " alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5" id="services">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="images/sarana1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Kelas Gedung Dewi Sartika</h5>
                            <p class="card-text">Kelas Gedung Dewi Sartika Digunakan Untuk Melaksanakan Kelas Mata Kuliah Teori Yang Ada Di Fakultas Ilmu Komputer</p>
                            <a href="kelas-dw.php" class="btn text-white" style="background: #ff7f00">Check Jadwal</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <img src="images/Lab-Programming-JPG.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">FIKLAB Gedung Ki Hadjar Dewantara</h5>
                            <p class="card-text">FIKLAB Digunakan Untuk Melaksanakan Kelas Mata Kuliah Praktikum Yang Ada Di Fakultas Ilmu Komputer</p>
                            <a href="kelas-fiklab.php" class="btn text-white" style="background: #ff7f00">Check Jadwal</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- test -->
        <form action="" method="POST" onsubmit="myFunction()">
            <div class="container my-5" id="contact">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="row pt-3">
                                    <!-- Form Column -->
                                    <div class="col-md-5">
                                        <h2 class="card-text"><i data-feather="mail"></i> Feedback</h2>
                                        <hr>
                                        <div class="mb-3">
                                            <label for="kontak_nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="kontak_nama" name="kontak_nama" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kontak_email" class="form-label">Alamat Email</label>
                                            <input type="email" class="form-control" id="kontak_email" name="kontak_email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Pesan" class="form-label">Pesan</label>
                                            <textarea class="form-control" id="kontak_pesan" rows="3" name="kontak_pesan" required></textarea>
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn text-white" style="background: #ff7f00" name="kirim_pesan">Kirim</button>
                                        </div>
                                    </div>
                                    <!-- Map Column -->
                                    <div class="col-md-7">
                                        <h2 class="card-text"><i data-feather="map"></i> Maps</h2>
                                        <hr>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6005846073967!2d106.79277181476974!3d-6.3160819954289575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ee229acb972d%3A0x2e74d2fa25f612e2!2sFaculty%20of%20Computer%20Sciance%20-%20Pembangunan%20Nasional%20%22Veteran%22%20Jakarta%20University!5e0!3m2!1sen!2sid!4v1616120323035!5m2!1sen!2sid"
                                            width="100%" height="280" frameborder="0" style="border:none;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        <hr>
                                        <p><i data-feather="map-pin"></i> Jl. RS. Fatmawati, Pondok Labu, Jakarta Selatan, 12450</p>
                                        <p><i data-feather="mail"></i> upnvj@upnvj.ac.id.</p>
                                        <p><i data-feather="phone"></i> (021)7656971</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>


        <!-- test end -->

    </main>

    <footer class="text-white py-4" style="background: linear-gradient(to right, #ffc107 , #ff4500);">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <p class="fs-5 text-shift">&copy; 2024 Fakultas Ilmu Komputer. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script>
        feather.replace();
    </script>
    <script src="js/script.js"></script>
</body>

</html>