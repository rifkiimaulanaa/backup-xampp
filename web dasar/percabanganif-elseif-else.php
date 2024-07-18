Struktur Percabangan: if - elseif - else
 • Jika lebih dari dua alternatif
 • Format:
 ?php
 if (ekspresiA) {
 statement1;
 } elseif (ekspresiB) {
 statement2;
 } else {
 statement3;
 }
 ?

 <?php
 $nilai = 80;
 if(($nilai >= 85) && ($nilai <= 100)){
 $index = "A";
 } elseif($nilai >= 70) {
 $index = "B";
 } elseif($nilai >= 50) {
 $index = "C";
 } elseif($nilai >= 30){
 $index = "D";
 } else {
 $index = "E";
 }
 echo "Nilai anda adalah : ".$nilai;
 echo "<br />";
 echo "Dengan index      
: ".$index;
?>
