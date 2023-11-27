<?php
    include "./koneksi.php";

    $name	=$_POST['name'];
    $email   =$_POST['email'];
    $donate   =$_POST['donate-amount'];
    $komentar   =$_POST['komentar'];
    if(isset($_POST['anonim'])){
        $anonim = $_POST['anonim'];
    }else{
        $anonim = "no";
    }
    $va_number = rand(123220100, 123220200);

    $query = mysqli_query($konek, "INSERT INTO admin VALUES('','$name','$email','$donate','$va_number','$anonim','$komentar')") 
    or die(mysqli_error($konek));
    $id = mysqli_insert_id($konek);
    if($query)
    {   
        header("location:../view/payment.php?id=$id");
    }
    else 
    {
    echo "Proses Input gagal";
    }
?>
