<?php
    include './koneksi.php';
    $id_volunteer = $_GET['id_volunteer'];
    $query=mysqli_query($konek,"DELETE FROM volunteer where id_volunteer=$id_volunteer");
   if($query)
    {
        header("location:../view/admin.php?pesan=berhasil");
    }
    else 
    {
        header("location:../view/admin.php?pesan=gagal");
  }
?>
