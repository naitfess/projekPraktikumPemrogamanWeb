<!-- CEK LOGIN -->
<?php
session_start();
// menghubungkan dengan koneksi
include 'koneksi.php';
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($konek, "SELECT * FROM login WHERE username='$username' AND password='$password'") or 
    die(mysqli_error($konek));
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    if($username != "admin"){
        $_SESSION['username'] = $username;  
        header("location:../mainpage.php");
      }else{
    $_SESSION['username'] = $username;
    header("location:../view/admin.php");
      }
} else {
    header("location:../loginpage.php?pesan=gagal");
}
?>