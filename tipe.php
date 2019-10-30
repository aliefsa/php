<?php
  $nim    ="454120603";
  $nama   ='Alief S. Arrasyid';
  $umur   = 23;
  $nilai  = 82.25;
  $status = TRUE;

  echo     "NIM   : ".$nim."<br>";
  echo     "Nama  : $nama<br>";
  print    "Umur  : ".$umur;print "<br>";
  printf  ("Nilai : %.2f<br>",$nilai);
  if ($status) {
      echo "Status : Aktif";
  } 
  else {
      echo "Status : Tidak Aktif";  
  }
?>
  