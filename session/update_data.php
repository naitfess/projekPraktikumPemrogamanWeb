<?php
    include "./koneksi.php";

    $id = $_POST['no_id'];
    $name	=$_POST['name'];
    $email   =$_POST['email'];
    $donate   =$_POST['donate-amount'];
    $komentar   =$_POST['komentar'];
    if(isset($_POST['anonim'])){
        $anonim = $_POST['anonim'];
    }else{
        $anonim = "no";
    }

    $query = mysqli_query($konek,"UPDATE donatur SET name='$name', donatur_email='$email', donate='$donate', komentar='$komentar', anonim='$anonim' where no_id='$id'") 
    or die(mysqli_error($konek));
    if($query)
    {   
        header("location:../view/admin.php");
    }
    else 
    {
    echo "Proses Input gagal";
    }
?>
