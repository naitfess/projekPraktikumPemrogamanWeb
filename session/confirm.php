<?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $query=mysqli_query($konek,"select * from admin where id = '$id'");
    $data=mysqli_fetch_array($query);
    
    $name = $data['name'];
    $email = $data['email'];
    $donate = $data['donate'];
    $va_number = $data['va_number'];
    $anonim = $data['anonim'];
    $komentar = $data['komentar'];

    $query2 = mysqli_query($konek, "INSERT INTO donatur VALUES('$name','$email','$donate','$komentar','$anonim','','$va_number')") 
    or die(mysqli_error($konek));
    $query=mysqli_query($konek,"DELETE FROM admin where id=$id");
    if($query2){
        header("location:../view/admin.php?pesan=berhasil");
    }else{
        header("location:../view/admin.php?pesan=gagal");
    }


?>