<?php
    session_start();
    include 'koneksi.php';
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $query = mysqli_query($konek, "INSERT INTO login VALUES('$user','$pass','$email')") 
    or die(mysqli_error($konek));
    if($query){
        header("location:../loginpage.php?pesan=berhasil");
    }
    else{
        header("location:../loginpage.php?pesan=gagal");
    }

?>