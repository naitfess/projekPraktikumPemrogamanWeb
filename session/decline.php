<?php
    include './koneksi.php';
    $id = $_GET['id'];
    $query=mysqli_query($konek,"DELETE FROM admin where id=$id");
   if($query)
    {
        header("location:../view/admin.php?pesan=decline");
    }
    else 
    {
        header("location:../view/admin.php?pesan=gagal");
  }
?>
