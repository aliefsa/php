<?php

// Membuat Function
function cetak_ganjil1()
{
    for ($i=0; $i < 100; $i++) { 
        if ($i%2 == 1) {
            echo "$i<hr>";
        }
    }
}

// Pemanggilan Function
cetak_ganjil1();

?>