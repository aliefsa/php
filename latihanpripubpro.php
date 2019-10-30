<?php

class Ulangan
{
    public $nama_peserta = "Aliefsa";
    private $jawaban = "Nomor 1 A";
    protected $no_peserta = "454120603";

    public function nomer_peserta()
    {
        return $this->no_peserta;
    }

    public function jawab()
    {
        return $this->jawaban;
    }
}

class Peserta extends Ulangan
{
    public function nama()
    {
        return $this->nama_peserta;
    }
}

$ulangan = new Ulangan();
$peserta = new Peserta();
echo "Nama : " . $peserta->nama() . "<br>";
echo "No Peserta : " . $ulangan->nomer_peserta() . "<br>";
echo "Jawaban : " . $ulangan->jawab();