<?php 
//membuat array
$hewan = [
    "kucing",
    "kelinci",
    "sapi",
];

//menambahkan hewan baru
$hewan[3] = "babihutan";

echo $hewan[0]."<br>";
echo $hewan[1]."<br>";
echo $hewan[2]."<br>";
echo $hewan[3]."<br>";

echo "<hr>";
echo "<pre>";
print_r($hewan);
echo "</pre>";
?>
