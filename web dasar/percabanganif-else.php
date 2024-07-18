//Struktur Percabangan: if - else
 •
 •
 Format:
 if(ekspresi_logika){
 statements1
 ...
 } else {
 statements2
 ...
 }
 IF-ELSE membuat percabangan dengan 2 alternatif. Ketika kondisi IF tidak
 terpenuhi (ekspresi IF menghasilkan nilai FALSE) maka pernyataan pada bagian
 else yang akan dijalankan
• Contoh://
<?php
$nilai = 80;
if($nilai >= 60){
echo "Selamat anda lulus!";
} else {
echo "Coba lagi semester depan.";
}
 ?>
 