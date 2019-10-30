<?php

class laptop
{

    // buat protected property
    protected $pemilik;

    // buat protected method
    protected function hidupkan_laptop()
    {
        return "Hidupkan Laptop";
    }
}

// buat objek dari class laptop (instanslasi)
$laptop_alief = new laptop();

// set protected property akan menghasilkan error
$laptop_alief->hidupkan_laptop();

// tampilkan methhod
echo $laptop_alief->hidupkan_laptop(); // "Hidupkan Laptop"
?>