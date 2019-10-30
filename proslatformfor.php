<?php

echo date("d/m/Y H:i:s")."<br>" ;

if (isset($_POST['Masukan'])) {
    $nama       = $_POST['nama'];
    $nip        = $_POST['nip'];
    $jk         = $_POST['jk'];
    $almt       = $_POST['alamat'];
    $status     = $_POST['status'];
    $jabatan    = $_POST['jabatan'];  
    $golongan = $_POST['golongan'];
    $potongan   = $_POST['potongan'];

    echo "Nama          : <b>$nama</b><br>";
    echo "NIP           : <b>$nip</b><br>";
    echo "Jenis Kelamin : <b>$jk</b><br>";
    echo "Alamat        : <b>$almt</b><br>";
    echo "Status        : <b>$status</b>";
    if ($status == Menikah) {
        $status = 100000;
        echo " Selamat anda mendapat tunjangan <u>Rp $status</u> <br>";
    }
    else {
        $status = 50000;
        echo " Selamat anda mendapat tunjangan <u>Rp $status</u> <br>";
    }
    echo "Jabatan       : <b>$jabatan</b>";
    if ($jabatan == HRD) {
        $jabatan = 5000000;
        echo " gaji <u>Rp $jabatan</u> <br>";
    }
    elseif ($jabatan == Manager) {
        $jabatan = 4500000;
        echo " gaji <u>Rp $jabatan</u> <br>";
    }
    elseif ($jabatan == Staff) {
        $jabatan = 3000000;
        echo " gaji <u>Rp $jabatan</u> <br>";
    }
    elseif ($jabatan == Karyawan) {
        $jabatan = 2500000;
        echo " gaji <u>Rp $jabatan</u> <br>";
    }
    echo "Potongan       : ";
    if (isset($_POST['BPJS'])) {
        echo "+ " . $_POST['BPJS'] . "<br>";
        $potongan1 = 250000;
    }
    if (isset($_POST['Koperasi'])) {
        echo "+ " . $_POST['Koperasi'] . "<br>";
        $potongan2 = 150000;
    }
    if (isset($_POST['Jamsostek'])) {
        echo "+ " . $_POST['Jamsostek'] . "<br>";
        $potongan3 = 150000;
        $potongan = $potongan1+$potongan2+$potongan3;
    }
    echo "Golongan       : ";
    if ($golongan == A1) {
        $gol = 250000;
        $gakot = $gol+$status+$jabatan-$potongan;
        $pajak = $gakot * 2.5/100;
        $gaber = $gakot - $pajak;
        echo "<b>$golongan Rp $gol</b><br> Gaji Kotor : $gakot <br> Gaji bersih : $gaber";
    }
    if ($golongan == A2) {
        $gol = 200000;
        $gakot = $gol+$status+$jabatan-$potongan;
        $pajak = $gakot * 2.5/100;
        $gaber = $gakot - $pajak;
        echo "<b>$golongan Rp $gol</b><br> Gaji Kotor : $gakot <br> Gaji bersih : $gaber";
    }
    if ($golongan == A3) {
        $gol = 150000;
        $gakot = $gol+$status+$jabatan-$potongan;
        $pajak = $gakot * 2.5/100;
        $gaber = $gakot - $pajak;
        echo "<b>$golongan Rp $gol</b><br> Gaji Kotor : $gakot <br> Gaji bersih : $gaber";
    }

}
?>