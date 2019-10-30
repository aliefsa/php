<?php

class Gaji
{
    public $nama, $nip, $alamat, $jumker, $ppn = 0.25;

    public function __construct($nama, $nip, $alamat, $jumker)
    {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->alamat = $alamat;
        $this->jumker = $jumker;
    }
    public function data_diri()
    {
        return "Nama : $this->nama <br>" .
            "NIP : $this->nip <br>" .
            "Alamat : $this->alamat <br>" .
            "Jumlah Hari Kerja : $this->jumker <br>";
    }
    public function gaji_kotor()
    {
        $gakot = $this->jumker * 75000;
        return gaji_kotor;
    }
    public function gaji_bersih()
    {
        $gaber = $this->gaji_kotor() - ($this->gaji_kotor() * $this->ppn);
        return gaji_bersih;
    }
}