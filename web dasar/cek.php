<?php
    $nama=$_POST['nama'];
    $tempat=$_POST['tempat'];
    $alamat=$_POST['alamat'];

    if($nama ==""){
        header("location:kominfo.php?nama=kosong");
    }else if ($alamat=="") {
        header("location:kominfo.php?alamat=kosong");
    }elseif ($tempat==""){
        header("location:kominfo.php?tempat=kosong");
    }else{
        echo"Nama anda ialah " .$nama;
        echo" bertempat di " .$tempat;
        echo" alamat anda ialah " .$alamat;
    }
?>

