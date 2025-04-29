<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "db_fik");

// Mengirim data kontak
if(isset($_POST['kirim_pesan'])){
    $nama = $_POST['kontak_nama'];
    $email = $_POST['kontak_email'];
    $pesan = $_POST['kontak_pesan'];

    $addtokontak = mysqli_query($koneksi, "INSERT INTO kontak VALUES ('', '$nama', '$email', '$pesan')");
    if($addtokontak){  
    header('location: index.php');
    exit();
    }
    
}    
// Book peminjaman kelas DW
if(isset($_POST['pinjam_kelas'])){
    $nama_mhs = $_POST['nama_mhs'];
    $jurusan = $_POST['jurusan'];
    $ruang_kelas = $_POST['ruang_kelas'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $deskripsi = $_POST['deskripsi'];
    $nim = $_SESSION['session_nim'];

    // Check for time conflict
    $conflict_check = mysqli_query($koneksi, "SELECT * FROM form_peminjaman_kelas_dw 
        WHERE tanggal = '$tanggal' 
        AND waktu = '$waktu' 
        AND ruang_kelas = '$ruang_kelas'");
    
    if(mysqli_num_rows($conflict_check) > 0) {
        // Time slot is already booked
        echo "<script>
            alert('Maaf, ruang kelas sudah dipinjam pada waktu dan tanggal yang sama!');
            window.location.href = 'form-dw.php';
        </script>";
        exit();
    }

    $addtopeminjaman_dw = mysqli_query($koneksi, "INSERT INTO form_peminjaman_kelas_dw VALUES ('', '$nama_mhs', '$jurusan', '$ruang_kelas', '$tanggal', '$waktu', '$deskripsi', '$nim')");
    if($addtopeminjaman_dw){  
    header('location: form-dw.php');
    exit();
    }
}
// Update Peminjaman Kelas DW
if(isset($_POST['update_form'])){
    $id = $_POST['id_edit'];
    $nama_mhs = $_POST['nama_mhs'];
    $jurusan = $_POST['jurusan'];
    $ruang_kelas = $_POST['ruang_kelas'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $deskripsi = $_POST['deskripsi'];

    // Pastikan hanya bisa update milik sendiri
    $cek_milik_sendiri = mysqli_query($koneksi, "SELECT * FROM form_peminjaman_kelas_dw WHERE id_dw = '$id' AND nim = '".$_SESSION['session_nim']."'");
    
    if(mysqli_num_rows($cek_milik_sendiri) > 0) {
        // Check for time conflict, excluding the current record
        $conflict_check = mysqli_query($koneksi, "SELECT * FROM form_peminjaman_kelas_dw 
            WHERE tanggal = '$tanggal' 
            AND waktu = '$waktu' 
            AND ruang_kelas = '$ruang_kelas'
            AND id_dw != '$id'");
        
        if(mysqli_num_rows($conflict_check) > 0) {
            // Time slot is already booked by another record
            echo "<script>
                alert('Maaf, ruang kelas sudah dipinjam pada waktu dan tanggal yang sama!');
                window.location.href = 'form-dw.php';
            </script>";
            exit();
        }

        $query_update = "UPDATE form_peminjaman_kelas_dw SET 
                        nama_mahasiswa = '$nama_mhs', 
                        jurusan = '$jurusan', 
                        ruang_kelas = '$ruang_kelas', 
                        tanggal = '$tanggal', 
                        waktu = '$waktu', 
                        deskripsi = '$deskripsi' 
                        WHERE id_dw = '$id'";
        
        mysqli_query($koneksi, $query_update);
        header("Location: form-dw.php");
        exit();
    } else {
        // If the user tries to update a record that doesn't belong to them
        echo "<script>
            alert(''Maaf, ruang kelas sudah dipinjam pada waktu dan tanggal yang sama!');
            window.location.href = 'form-dw.php';
        </script>";
        exit();
    }
}
// Hapus Peminjaman Kelas DW
if(isset($_POST['hapus_form'])){
    $id = $_POST['id_hapus'];

    // Pastikan hanya bisa hapus milik sendiri
    $cek_milik_sendiri = mysqli_query($koneksi, "SELECT * FROM form_peminjaman_kelas_dw WHERE id_dw = '$id' AND nim = '".$_SESSION['session_nim']."'");
    
    if(mysqli_num_rows($cek_milik_sendiri) > 0) {
        $query_hapus = "DELETE FROM form_peminjaman_kelas_dw WHERE id_dw = '$id'";
        mysqli_query($koneksi, $query_hapus);
        header("Location: form-dw.php");
        exit();
    }
}


// Book peminjaman kelas fl
if(isset($_POST['pinjam_kelas_fl'])){
    $nama_mhs = $_POST['nama_mhs_fl'];
    $jurusan = $_POST['jurusan'];
    $ruang_kelas = $_POST['ruang_kelas_fl'];
    $tanggal = $_POST['tanggal_fl'];
    $waktu = $_POST['waktu_fl'];
    $deskripsi = $_POST['deskripsi_fl'];
    $nim = $_SESSION['session_nim'];

    $conflict_check = mysqli_query($koneksi, "SELECT * FROM form_peminjaman_kelas_fl 
        WHERE tanggal = '$tanggal' 
        AND waktu = '$waktu' 
        AND ruang_kelas = '$ruang_kelas'");

     if(mysqli_num_rows($conflict_check) > 0) {
        // Time slot is already booked
        echo "<script>
            alert('Maaf, ruang lab sudah dipinjam pada waktu dan tanggal yang sama!');
            window.location.href = 'form-fl.php';
        </script>";
        exit();
    }

    $addtopeminjaman_fl = mysqli_query($koneksi, "INSERT INTO form_peminjaman_kelas_fl VALUES ('', '$nama_mhs', '$jurusan', '$ruang_kelas', '$tanggal', '$waktu', '$deskripsi', '$nim')");
    if($addtopeminjaman_fl){  
    header('location: form-fl.php');
    exit();
    }
}    

// Update Peminjaman Kelas FL
if(isset($_POST['update_form_fl'])){
    $id = $_POST['id_edit_fl'];
    $nama_mhs = $_POST['nama_mhs_fl'];
    $jurusan = $_POST['jurusan'];
    $ruang_kelas = $_POST['ruang_kelas_fl'];
    $tanggal = $_POST['tanggal_fl'];
    $waktu = $_POST['waktu_fl'];
    $deskripsi = $_POST['deskripsi_fl'];

    // Pastikan hanya bisa update milik sendiri
    $cek_milik_sendiri = mysqli_query($koneksi, "SELECT * FROM form_peminjaman_kelas_fl WHERE id_fl = '$id' AND nim = '".$_SESSION['session_nim']."'");
    
    if(mysqli_num_rows($cek_milik_sendiri) > 0) {
        // Check for time conflict, excluding the current record
        $conflict_check = mysqli_query($koneksi, "SELECT * FROM form_peminjaman_kelas_fl 
            WHERE tanggal = '$tanggal' 
            AND waktu = '$waktu' 
            AND ruang_kelas = '$ruang_kelas'
            AND id_fl != '$id'");
        
        if(mysqli_num_rows($conflict_check) > 0) {
            // Time slot is already booked by another record
            echo "<script>
                alert('Maaf, ruang lab sudah dipinjam pada waktu dan tanggal yang sama!');
                window.location.href = 'form-fl.php';
            </script>";
            exit();
        }

        $query_update = "UPDATE form_peminjaman_kelas_fl SET 
                        nama_mahasiswa = '$nama_mhs', 
                        jurusan = '$jurusan', 
                        ruang_kelas = '$ruang_kelas', 
                        tanggal = '$tanggal', 
                        waktu = '$waktu', 
                        deskripsi = '$deskripsi' 
                        WHERE id_fl = '$id'";
        
        mysqli_query($koneksi, $query_update);
        header("Location: form-fl.php");
        exit();
    } else {
        // If the user tries to update a record that doesn't belong to them
        echo "<script>
            alert('Maaf, ruang lab sudah dipinjam pada waktu dan tanggal yang sama!');
            window.location.href = 'form-fl.php';
        </script>";
        exit();
    }
}

// Hapus Peminjaman Kelas FL
if(isset($_POST['hapus_form_fl'])){
    $id = $_POST['id_hapus_fl'];

    // Pastikan hanya bisa hapus milik sendiri
    $cek_milik_sendiri = mysqli_query($koneksi, "SELECT * FROM form_peminjaman_kelas_fl WHERE id_fl = '$id' AND nim = '".$_SESSION['session_nim']."'");
    
    if(mysqli_num_rows($cek_milik_sendiri) > 0) {
        $query_hapus = "DELETE FROM form_peminjaman_kelas_fl WHERE id_fl = '$id'";
        mysqli_query($koneksi, $query_hapus);
        header("Location: form-fl.php");
        exit();
    }
}

// Menampilkan data
function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows_dw = [];
    while ( $row_dw = mysqli_fetch_assoc($result)) {
        $rows_dw[] = $row_dw;
    }
    return $rows_dw;
}

function query1($query1) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query1);
    $rows_fl = [];
    while ( $row_fl = mysqli_fetch_assoc($result)) {
        $rows_fl[] = $row_fl;
    }
    return $rows_fl;
}
?>