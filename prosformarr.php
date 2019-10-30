<?php

if (isset($_POST['sbm'])) {

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];



    // var_damp($nama);
    foreach ($nama as $data => $x) {
        echo "Nama : " . $nama[$data] .
            " - kelas : " . $kelas[$data] . "<hr>";
    }
}

?>