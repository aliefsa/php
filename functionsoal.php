<?php

function segitiga($alas,$tinggi){
    
    echo "Luas Segitiga <br>";
    echo "Alas = $alas <br>";
    echo "Tinggi = $tinggi<br>";
    $luas = ($alas*$tinggi) / 2;
    echo "Luas segitiga = $luas <hr>";
}
segitiga(5,10);

function lingkaran($jari = 8){
    
    echo "Jari-jari lingkaran = $jari<br>";
    $luas = 3.14 * ($jari * $jari);
    $kel = 2 * (3.14 * $jari);
    echo "Luas segitiga = $luas <br>";
    echo "Keliling segitiga = $kel <hr>";
}
$a = 10;
lingkaran();
?>