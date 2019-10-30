<?php
  $a = array('Ahmad',19,true,3.19);
  
  //menapilkan array satu-satu
  echo "Arrsay menggunakan echo <br>";
  echo $a[0] .  "<br>";
  echo $a[3] .  "<br>";
  echo "<br>";
  
  echo "Array menggunakan Looping For <br>";
  for ($i=0; $i < count($a) ; $i++) { 
      echo "Array - " . $a[$i] . "<br>";
  }
  echo "<br>";

  echo "Arrsay menggunakan Foreach <br>";
  foreach ($a as $data) {
    echo "Array - " . $data . "<br>";
  }
