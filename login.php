<?php
require "function.php";

// atur variabel
$err   = "";
$nim   = "";
$ingataku   = "";

if (isset($_COOKIE['cookie_nim'])) {
    $cookie_nim = $_COOKIE['cookie_nim'];
    $cookie_password = $_COOKIE['cookie_password'];

    $sql1 = "SELECT * FROM user WHERE nim = '$cookie_nim' AND password = '$cookie_password'";
    $query1   = mysqli_query($koneksi, $sql1);
    $result1   = mysqli_fetch_array($query1);
    if ($result1['password'] == $cookie_password) {
        $_SESSION['session_nim'] = $cookie_nim;
        $_SESSION['session_password'] = $cookie_password;
    }
}

if (isset($_SESSION['session_nim'])) {
    header("location:index.php");
    exit();
}

if (isset($_POST['login'])) {
    $nim = $_POST['nim'];
    $password = $_POST['password'];
    $ingataku = isset($_POST['ingataku']) ? $_POST['ingataku'] : '';

    if ($nim == '' or $password == '') {
        $err .= "<p>Silakan masukkan nim dan juga password.</p>";
    } else {
        $sql1 = "SELECT * FROM user WHERE nim = '$nim'";
        $query1 = mysqli_query($koneksi, $sql1);
        $result1 = mysqli_fetch_array($query1);

        if (!isset($result1['nim']) || $result1['nim'] == '') {
            $err .= "<p>NIM <b>$nim</b> tidak tersedia</p>";
        } elseif ($result1['password'] != ($password)) {
            $err .= "<p>Password yang di masukkan tidak sesuai</p>";
        }

        if (empty($err)) {
            $_SESSION['session_nim'] = $nim;
            $_SESSION['session_password'] = $password;

            if ($ingataku == 1) {
                $cookie_name = "cookie_nim";
                $cookie_value = $nim;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");

                $cookie_name = "cookie_password";
                $cookie_value = $password;
                $cookie_time = time() + (60 * 60 * 24 * 30);
                setcookie($cookie_name, $cookie_value, $cookie_time, "/");
            }

            header("location:index.php");
        }
    }
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
    <title>Login</title>
</head>

<body>
    <main class="container d-flex justify-content-center align-items-center min-vh-100">
        <section class="row border rounded-5 p-3 bg-white shadow box-area">
            <article class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: linear-gradient(to right, #ffc107 , #ff4500);">
                <div class="featured-image mb-2">
                    <img src="images/gambar fik.jpg" class="img-fluid rounded-3" width="350" height="350" alt="UPNVJ Logo" />
                </div>
                <p class="text-white fs-2" style="font-weight: 600">Website</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;">Layanan Peminjaman Ruangan FIK</small>
            </article>

            <article class="col-md-6 right-box">
                <header class="mb-4">
                    <h2>Silahkan Login</h2>

                    <?php if ($err) { ?>
                        <div id="login-alert" class="alert alert-danger col-sm-12">
                            <ul><?php echo $err ?></ul>
                        </div>
                    <?php } ?>
                </header>
                <form action="" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control bg-light fs-6" name="nim" id="nim" placeholder="nim">
                        <label for="nim">NIM</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control bg-light fs-6" name="password" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <div class="form-check mb-3 mt-3">
                        <label for="formCheck" class="form-check-label text-secondary">
                            <input id="login-remember" type="checkbox" name="ingataku" value="1" class="form-check-input" <?php if ($ingataku == '1') echo "checked" ?> />Ingat Aku
                        </label>
                    </div>
                    <div class="input-group mb-3">
                        <button type="submit" class="btn btn-lg w-100 fs-6" style="background: #ff7f00; color: white;" name="login">Login</button>
                    </div>
                </form>
            </article>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script>
        feather.replace();
    </script>
    <script src="js/script.js"></script>
</body>

</html>