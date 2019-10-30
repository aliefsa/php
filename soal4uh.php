<?php

$aso   = [
    [
        'Barang'  => 'Buku Tulis',
        'Harga' => '4000',
        'Berat' => '100gram',
    ]
  ];

    foreach ($aso as $value) {
        echo $value["Barang"] . "</h1> <br>";
        echo $value["Harga"] . "<br>";
        echo $value["Berat"] . "<br>";
        echo "<hr>";
    }
?>