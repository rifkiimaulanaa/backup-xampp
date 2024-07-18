<html>
<head>
<title>Membuat Form Validasi </title>
</head>
<body>
<h1>Membuat Form Validasi Dengan PHP <br/> ---</h1>
<?php
if(isset($_GET['nama'])){
if($_GET['nama'] == "kosong"){
echo "<h4 style='color:red'>Nama Belum Di Masukkan!</h4>";
}
}elseif(isset($_GET['tempat'])){
    if($_GET['tempat'] == "kosong"){
    echo "<h4 style='color:red'>Tempat Belum Di Masukkan!</h4>";
    }
}elseif(isset($_GET['alamat'])){
    if($_GET['alamat'] == "kosong"){
    echo "<h4 style='color:red'>Alamat Belum Di Masukkan!</h4>";
    }
    }

?> <h4>Masukkan Nama Anda :</h4>
<form action="cek.php" method="post">
<table>
<tr>
<li>Nama</li>
<li><input type="text" name="nama"></li>
<li>Tempat</li>
<li><input type="text" name="tempat"></li>
<li>Alamat</li>
<li><input type="text" name="alamat"></li>

<li><input type="submit" value="Cek"></li>
</tr>
</table>
</form>
</body>
</html>
