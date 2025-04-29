<?php
require 'function.php';
if (!isset($_SESSION['session_nim'])) {
    header("location:login.php");
    exit();
}
$form_peminjaman_fl = query("SELECT * FROM form_peminjaman_kelas_fl");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Informasi Kelas Yang Sedang Di Pinjam</title>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">Menu</a>
                </div>
            </div>
            <div class="d-flex profile-img justify-content-center">
                <div class="toggle-btn" type="button">
                    <i data-feather="user" class="img-fluid rounded-circle" style="width: 80px; color: white"></i>
                </div>
            </div>
            <a href="#" class="sidebar-link" style="text-align: center;">
                <span><?php echo $_SESSION['session_nim']; ?></span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="kelas-fiklab.php" class="sidebar-link">
                        <i class="lni lni-calendar"></i>
                        <span>Jadwal</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="info-peminjaman-fl.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Info Peminjaman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="form-fl.php" class="sidebar-link">
                        <i class="lni lni-add-files"></i>
                        <span>Form Peminjaman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Kembali</span>
                    </a>
                </li>
            </ul>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-4 py-3" style="background: linear-gradient(to right, #ffc107 , #ff4500);">
                <h2 style="color: white; ">Info Peminjaman FIKLAB</h2>
            </nav>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <h3 class="mt-4">Kelas Yang Sedang Di Pinjam</h3>
                        <div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Jurusan</th>
                                            <th scope="col">Ruang Kelas</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($form_peminjaman_fl as $row_fl) : ?>
                                            <tr>
                                                <td><?= $no; ?></td>
                                                <td><?= $row_fl["nama_mahasiswa"] ?></td>
                                                <td><?= $row_fl["jurusan"] ?></td>
                                                <td><?= $row_fl["ruang_kelas"] ?></td>
                                                <td><?= $formatdate = date('d/m/Y', strtotime($row_fl["tanggal"])) ?></td>
                                                <td><?= $row_fl["waktu"] ?></td>
                                                <td><?= $row_fl["deskripsi"] ?></td>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script>
        feather.replace();
    </script>
    <script src="js/script.js"></script>
</body>

</html>