<?php

if (isset($_POST['lanjut'])) {
    $name   = $_POST['nama'];
    $mapel1 = $_POST['mapel1'];
    $mapel2 = $_POST['mapel2'];
    $rata   = ($mapel1+$mapel2)/2;
    if ($rata > 75) {
        echo "Nama      : <b>$name</b><br>";
        echo "Mapel 1   : <b>$mapel1</b><br>";
        echo "Mapel 2   : <b>$mapel2</b><br>";
        echo "Rata-rata : <b>$rata</b><br>";
        echo "<h2>LULUS</h2>";
    }
    else {
        echo "Nama      : <b>$name</b><br>";
        echo "Mapel 1   : <b>$mapel1</b><br>";
        echo "Mapel 2   : <b>$mapel2</b><br>";
        echo "Rata-rata : <b>$rata</b><br>";
        echo "<h2>TIdak Lulus</h2>";
    }

}

?>