<?php
    include "./koneksi.php";

    $name_volunteer	=$_POST['name_volunteer'];
    $email_volunteer   =$_POST['email_volunteer'];
    $phone   =$_POST['phone'];
    $address   =$_POST['address'];
    $occupation   =$_POST['occupation'];
    $event   =$_POST['event'];

    $query = mysqli_query($konek, "INSERT INTO volunteer VALUES('$name_volunteer','$email_volunteer','$phone','$address','$occupation','$event', '')") 
    or die(mysqli_error($konek));
    $id = mysqli_insert_id($konek);
    if($query)
    {   
        header("location:../view/volunteer-list.php");
    }
    else 
    {
    echo "Proses Input gagal";
    }
?>
