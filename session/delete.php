<?php
    include './koneksi.php';
    $id = $_GET['id'];
    $query=mysqli_query($konek,"DELETE FROM donatur where no_id=$id");
   if($query)
    {
        header("location:../view/admin.php?pesan=berhasil");
    }
    else 
    {
        header("location:../view/admin.php?pesan=gagal");
  }
?>
