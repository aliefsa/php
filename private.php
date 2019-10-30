<?php

class Komputer
{
    private $jenis_komputer = "Intel Core 17-4790 3.6Ghz";
    public function tampilkan_processor()
    {
        return $this->jenis_processor;
    }
}

class Laptop extends Komputer
{
    public function tampilkan_processor()
    {
        return $this->jenis_processor;
    }
}

// buat objek dari class laptop (instanslasi)
$komputer_baru = new Komputer();
$laptop_baru = new Laptop();

echo $komputer_baru->tampilkan_processor();
echo $laptop_baru->tampilkan_processor();
?>