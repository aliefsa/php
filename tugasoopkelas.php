<?php

class Formstrukturkelas
{
    public $kepsek, $wakasek, $kurikulum, $wali, $km, $wk;

    public function __construct($kepsek, $wakasek, $kurikulum, $wali, $km, $wk)
    {
        $this->kepsek = $kepsek;
        $this->wakasek = $wakasek;
        $this->kurikulum = $kurikulum;
        $this->wali = $wali;
        $this->km = $km;
        $this->wk = $wk;
    }
    public function kelas()
    {
        return "Kepala Sekolah : " . $this->kepsek . "<br>" .
            "Wakil Kepala   : " . $this->wakasek . "<br>" .
            "Kurikulum      : " . $this->kurikulum . "<br>" .
            "Wali Kelas     : " . $this->wali . "<br>" .
            "Ketua Murid    : " . $this->km . "<br>" .
            "Wakil Ketua    : " . $this->wk . "<br>";
    }
}
if (isset($_POST['masukan'])) {
    $kepsek = $_POST['kepsek'];
    $wakasek = $_POST['wakasek'];
    $kurikulum = $_POST['kurikulum'];
    $wali = $_POST['wali'];
    $km = $_POST['km'];
    $wk = $_POST['wk'];
}

$aliefsa = new Formstrukturkelas($kepsek, $wakasek, $kurikulum, $wali, $km, $wk);
echo $aliefsa->kelas();
?>