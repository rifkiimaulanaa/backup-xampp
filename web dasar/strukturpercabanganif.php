// Format
 if(ekspresi){
 statements
 ...
 }
 • ekspresi : kondisi yang harus dipenuhi agar daftar perintah (statements) antara tanda “{“ dan 
“}” dapat dijalankan.
 • JIkakondisi tersebut True maka statements dilakukan jika tidak maka eksekusi langsung ke
 perintah setelah tanah “}”.
 • Contoh://
 <?php
 $usia = 30;
 if($usia > 29)
 echo "Maaf … Anda tidak memenuhi Syarat";
 ?>