<?php
  
  $X = 100;
  $Y = 50;
  $Z = ($X == $Y)  xor  ($X > $Y);

  echo "($X == $Y)  xor  ($X > $Y) :";
  if ($Z == true) {
          echo "Hello PHP";
        }
  echo "<br>";
  
  echo "<br>";
  echo "($X == $Y)  xor  ($X > $Y) : ";
  if ($Z == false) {
          echo "Maaf Kondisinya tidak sesuai";
      }

?>