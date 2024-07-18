 #Bentuk alternatif dari if-elseif-else.
 #Ideal untuk membuat keputusan
 berdasarkan sejumlah kondisi dengan
 hanya membandingkan variabel tunggal
 dengan dengan beberapa kemungkinan
 nilai.
 • Format:
 switch($variable){
 case value_1:
 statement 1;
 break;
 case value_2:
 statement 2;
 break;
 case value_3:
 statement 3;
 break;
 default:
 statement 4;
 break;
contoh : 
<?php
    $plat_nomor = "AB";
    switch($plat_nomor)
    {
    case "AB":
    echo "Yogyakarta";
    break;
    case "AD":
    echo "Surakarta";
    break;
    case "BE":
    echo "Lampung";
    break;
    case "B":
    echo "Jakarta";
    break;
    default:
    echo "Plat kendaraan tidak diketahui.";
    break;
    }
?>