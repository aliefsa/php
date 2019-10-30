<?php

if (isset($_POST['Pilih'])) {
    $nama    = $_POST['nama'];
    $nis     = $_POST['nis'];
    $alamat  = $_POST['alamat'];
    $jk      = $_POST['jk'];
    $agama   = $_POST['agama'];
    $sekolah = $_POST['sekolah'];   
    $wali    = $_POST['wali'];
    $mapel   = $_POST['mapel'];
    $nilai   = $_POST['nilai'];
    $email   = $_POST['email'];


    if ($nilai > 250) {
        echo "Nama                  : <b>$nama</b><br>";
        echo "NIS                   : <b>$nis</b><br>";
        echo "Alamat                : <b>$alamat</b><br>";
        echo "Jenis Kelamin         : <b>$jk</b><br>";
        echo "Agama                 : <b>$agama</b><br>";
        echo "Asal Sekolah          : <b>$sekolah</b><br>";
        echo "Nama Orang Tua / Wali : <b>$wali</b><br>";
        echo "Mata Pelajaran        : <br>";
        if (isset($_POST['mapel1'])) {
            echo "+ " . $_POST['mapel1'] . "<br>";
        }
        if (isset($_POST['mapel2'])) {
            echo "+ " . $_POST['mapel2'] . "<br>";
        }
        if (isset($_POST['mapel3'])) {
            echo "+ " . $_POST['mapel3'] . "<br>";
        }
        if (isset($_POST['mapel4'])) {
            echo "+ " . $_POST['mapel4'] . "<br>";
        }
        if (isset($_POST['mapel5'])) {
            echo "+ " . $_POST['mapel5'] . "<br>";
        }
        echo "Nilai                 : <b>$nilai</b><br>";
        echo "Email                 : <b>$email</b><br>";
        echo "<br><br>";
        echo"<center><h1><b>SELAMAT ANDA DITERIMA DENGAN NILAI $nilai</b></h1></center>";

    }
    else {
        echo "Nama                  : <b>$nama</b><br>";
        echo "NIS                   : <b>$nis</b><br>";
        echo "Alamat                : <b>$alamat</b><br>";
        echo "Jenis Kelamin         : <b>$jk</b><br>";
        echo "Agama                 : <b>$agama</b><br>";
        echo "Asal Sekolah          : <b>$sekolah</b><br>";
        echo "Nama Orang Tua / Wali : <b>$wali</b><br>";
        echo "Mata Pelajaran        : <br>";
        if (isset($_POST['mapel1'])) {
            echo "+ " . $_POST['mapel1'] . "<br>";
        }
        if (isset($_POST['mapel2'])) {
            echo "+ " . $_POST['mapel2'] . "<br>";
        }
        if (isset($_POST['mapel3'])) {
            echo "+ " . $_POST['mapel3'] . "<br>";
        }
        if (isset($_POST['mapel4'])) {
            echo "+ " . $_POST['mapel4'] . "<br>";
        }
        if (isset($_POST['mapel5'])) {
            echo "+ " . $_POST['mapel5'] . "<br>";
        }
        echo "Nilai                 : <b>$nilai</b><br>";
        echo "Email                 : <b>$email</b><br>";
        echo "<br><br>";
        echo"<center><h1><b>MOHON MAAF ANDA TIDAK DITERIMA DENGAN NILAI $nilai</b></h1></center>";
    }
}

?>