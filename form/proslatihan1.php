<?php

class Keluarga
{
    public function __construct($nama, $nik, $alamat, $umur)
    {
        $this->nama = $nama;
        $this->nik = $nik;
        $this->alamat = $alamat;
        $this->umur = $umur;
    }
    public function data_diri()
    {
        foreach ($this->nama as $key => $data) {
            echo "Nama : " . $this->nama[$key] .
                "NIK : " . $this->nik[$key] .
                "Alamat : " . $this->alamat[$key] .
                "Umur : " . $this->umur[$key];
        }
    }
}
if (isset($_POST['masukan'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
}
$keluarga = new Keluarga($nama, $nik, $alamat, $umur);
echo $keluarga->data_diri();
?>