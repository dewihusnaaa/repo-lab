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
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Kelas Dewi Sartika</title>
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
                    <a href="kelas-dw.php" class="sidebar-link">
                        <i class="lni lni-calendar"></i>
                        <span>Jadwal</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="info-peminjaman-dw.php" class="sidebar-link">
                        <i class="lni lni-agenda"></i>
                        <span>Info Peminjaman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="form-dw.php" class="sidebar-link">
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
                <h2 style="color: white">Dewi Sartika</h2>
            </nav>
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <h1 class="mt-4">Jadwal Kelas Dewi Sartika</h1>
                        <div class="card mb-5">
                            <div class="card-header">
                                <span class="btn text-white" style="background: #ff8104">
                                    Lantai 2
                                </span>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Ruang Kelas</th>
                                            <th scope="col">Waktu Mulai</th>
                                            <th scope="col">Waktu Selesai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="15" style="vertical-align: middle;">Senin-Jumat</td>
                                            <td rowspan="3" style="vertical-align: middle;">DS-201</td>
                                            <td>07:40</td>
                                            <td>08:40</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW201 -->
                                            <td>08:40</td>
                                            <td>10:20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW201 -->
                                            <td>10:20</td>
                                            <td>12:00</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <td rowspan="3" style="vertical-align: middle;">DS-202</td>
                                            <td>07:00</td>
                                            <td>08:40</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin  -->
                                            <!-- <td>-</td> DW202 -->
                                            <td>08:40</td>
                                            <td>10:20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW202 -->
                                            <td>10:20</td>
                                            <td>12:00</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <td rowspan="3" style="vertical-align: middle;">DS-203</td>
                                            <td>07:00</td>
                                            <td>08:40</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW203 -->
                                            <td>08:40</td>
                                            <td>10:20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW203 -->
                                            <td>10:20</td>
                                            <td>12:00</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <td rowspan="3" style="vertical-align: middle;">DS-204</td>
                                            <td>07:00</td>
                                            <td>08:40</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW204 -->
                                            <td>08:40</td>
                                            <td>10:20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW204 -->
                                            <td>10:20</td>
                                            <td>12:00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-header">
                                <span class="btn text-white" style="background: #ff8104">
                                    Lantai 3
                                </span>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Ruang Kelas</th>
                                            <th scope="col">Waktu Mulai</th>
                                            <th scope="col">Waktu Selesai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="15" style="vertical-align: middle;">Senin-Jumat</td>
                                            <td rowspan="3" style="vertical-align: middle;">DS-301</td>
                                            <td>07:00</td>
                                            <td>08:40</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW301 -->
                                            <td>08:40</td>
                                            <td>10:20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW301 -->
                                            <td>10:20</td>
                                            <td>12:00</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <td rowspan="3" style="vertical-align: middle;">DS-302</td>
                                            <td>07:00</td>
                                            <td>08:40</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW302 -->
                                            <td>08:40</td>
                                            <td>10:20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW302 -->
                                            <td>10:20</td>
                                            <td>12:00</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <td rowspan="3" style="vertical-align: middle;">DS-303</td>
                                            <td>07:00</td>
                                            <td>08:40</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW303 -->
                                            <td>08:40</td>
                                            <td>10:20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW303 -->
                                            <td>10:20</td>
                                            <td>12:00</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <td rowspan="3" style="vertical-align: middle;">DS-304</td>
                                            <td>07:00</td>
                                            <td>08:40</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW304 -->
                                            <td>08:40</td>
                                            <td>10:20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW304 -->
                                            <td>10:20</td>
                                            <td>12:00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mb-5">
                            <div class="card-header">
                                <span class="btn text-white" style="background: #ff8104">
                                    Lantai 4
                                </span>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered text-center">
                                    <thead>
                                        <tr>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Ruang Kelas</th>
                                            <th scope="col">Waktu Mulai</th>
                                            <th scope="col">Waktu Selesai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td rowspan="15" style="vertical-align: middle;">Senin-Jumat</td>
                                            <td rowspan="3" style="vertical-align: middle;">DS-401</td>
                                            <td>07:00</td>
                                            <td>08:40</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW401 -->
                                            <td>08:40</td>
                                            <td>10:20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW401 -->
                                            <td>10:20</td>
                                            <td>12:00</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <td rowspan="3" style="vertical-align: middle;">DS-402</td>
                                            <td>07:00</td>
                                            <td>08:40</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW402 -->
                                            <td>08:40</td>
                                            <td>10:20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW402 -->
                                            <td>10:20</td>
                                            <td>12:00</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <td rowspan="3" style="vertical-align: middle;">DS-403</td>
                                            <td>07:00</td>
                                            <td>08:40</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW403 -->
                                            <td>08:40</td>
                                            <td>10:20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td>-</td> Senin -->
                                            <!-- <td>-</td> DW403 -->
                                            <td>10:20</td>
                                            <td>12:00</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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