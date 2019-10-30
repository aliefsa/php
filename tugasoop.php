<?php

class lingkaran
{
    public $jari, $phi = 3.14;


    public function __construct($jari)
    {
        $this->jari = $jari;
    }
    public function luas()
    {
        $luas = $this->phi * $this->jari * $this->jari;
        return $luas;
    }
}

// class segitiga
// {
//     public $alas, $tinggi, $luas = 1 / 2;

//     public function __construct($alas, $tinggi, $luas)
//     {
//         $this->alas = $alas;
//         $this->tinggi = $tinggi;
//         $this->luas = $luas;
//     }
//     public function luas()
//     {
//         $this->$alas * $tinggi / 2;
//         return $luas;
//     }
// }

if (isset($_POST['simpan'])) {
    $a = $_POST['jari'];

    $lingkaran = new lingkaran($a);
    echo "Jari - jari :$lingkaran->jari</br>";
    echo "Luas :" . $lingkaran->luas();
}
?>