<?php

  $a = 15000;
  $b = 2000;
  $c = 6;
  $d = 5;

  echo "$c x $d = " . ($c*$d) . "<br>";
  echo ($c*$d) . " x $a = " . (($c*$d)*$a) . "<br>";
  echo "$c x $b = " . ($c*$b) . "<br>";
  echo (($c*$d)*$a) . " + " . ($c*$b) . " = " . ((($c*$d)*$a)+($c*$b));

?>
