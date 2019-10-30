<?php

  $aso   = [
    [
        'Judul'  => 'Belajar PHP & MySQL untuk pemula',
        'Penulis' => 'Admin SMK',
    ],
    [
        'Judul'  => 'Tutorial PHP dari Nol hinga Mahir',
        'Penulis' => 'Admin SMK',
    ],
    [
        'Judul'  => 'Membuat Aplikasi Web dengan PHP',
        'Penulis' => 'Admin SMK',
    ]
  ];

    foreach ($aso as $value) {
        echo "<h1>".$aso[0].$value["Judul"] . "</h1> <br>";
        echo $aso[1].$value["Penulis"] . "<br>";
        echo "<hr>";
    }
    ?>  