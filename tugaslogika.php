<?php
  
  $gol = 10;

  if ($gol >= 10) {
        echo "mendali emas dengan total cetal gol : ".$gol;
    }

  elseif($gol >= 8) {
           echo "mendali perak dengan total cetal gol : ".$gol;
        }

  elseif($gol >= 4) {
    echo "mendali perunggu dengan total cetal gol : ".$gol;
        }

  else {
    echo "mendali emas ngambang dengan total cetal gol : ".$gol;
  }

  switch ($gol) {
      case '20':
      echo " dan mendapatkan bonus 100jt";
        break;
      case '9':
      echo " dan mendapatkan bonus 80jt";
        break;
      case '5':
      echo " dan mendapatkan bonus 50jt";
        break;
      default:
      echo " tidak mendapatkan bonus";
        break;
  }
  ?>