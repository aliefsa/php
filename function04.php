<?php

// Pembuatan Function
function tambah_string($str){
    $str = $str . ", Jakarta";
    return $str;
}

// 

$str = "universitas Budi Luhur";
echo "\$str = $str<br>";
echo tambah_string($str). "<br>";
echo "\$str = $str<br>";
?>