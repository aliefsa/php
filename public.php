<?php

class laptop
{

    public $pemilik;
    // buat pemilik method
    public function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
}

// buat objek dari class laptop (instanslasi)
$laptop_alief = new laptop();

// set property
$laptop_alief->pemilik; // Alief

// tampilkan property
echo $laptop_alief->pemilik; // Alief

// tampilkan method
echo "<b>", $laptop_alief->hidupkan_laptop(); // "Hidupkan Laptop"

?>