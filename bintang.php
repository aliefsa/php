<html>
<heaed><tittle>Form Bintang</tittle></heaed>
<body>
<FORM ACTION="" METHOD="POST">
<center><h1><b>FORM BINTANG 1 2 3 </b></h1></center><br>
 <b>Masukan Bilangan : </b><input type="number" name="bil" checked><br><br>
 <input type="submit" name="muncul" value="MUNCULKAN"><br>
 </FORM>
 </body>
 </html>

 <?php

if (isset($_POST['muncul'])) {
      $bil = $_POST['bil'];
      for ($i=1; $i <= $bil; $i++) {
         echo "<b>*</b>";
     }
     echo "<br>Total Bintang $bil";
     echo "<br><hr>";
 }

 ?>
 <?php

 // Bintang Segitiga Siku-Siku
 

 if (isset($_POST['muncul'])) {
     $bil = $_POST['bil'];
     for ($a=0; $a <= $bil; $a++) {
         for ($b=0; $b < $a; $b++) {
             echo "<b>*</b>";
        }
         echo "<br>";
    }
    echo "<br>Total Bintang $bil";
    echo "<br><hr>";
}
 ?>

<?php

// Bintang Piramid

if (isset($_POST['muncul'])) {
    $bil = $_POST['bil'];
    for ($a=1; $a <= $bil; $a++) {
        for ($b=1; $b <= $bil - $a; $b++) {
            echo "&nbsp;&nbsp;";
        }
        for ($b=1; $b <= $a; $b++) { 
            echo "<b>*</b>&nbsp;&nbsp;";
        }
        echo "<br>";
   }
   echo "Total Bintang $bil";
   echo "<br><hr>";
}

?>

<?php

// Bintang Piramid Terbalik

if (isset($_POST['muncul'])) {
    $bil = $_POST['bil'];
    for ($a=1; $a <= $bil; $a++) {
        for ($b=1; $b <=  $a; $b++) {
            echo "&nbsp;&nbsp;";
        }
        for ($b=1; $b <= $bil - $a; $b++) { 
            echo "<b>*</b>&nbsp;&nbsp;";
        }
        echo "<br>";
    }
       echo "Total Bintang $bil";
       echo "<br><hr>";
}

?>

<?php

// Bintang Diamond/Ketupat

if (isset($_POST['muncul'])) {
    $bil = $_POST['bil'];
    for ($a=1; $a <= $bil; $a++) {
        for ($b=1; $b <= $bil - $a; $b++) {
            echo "&nbsp;&nbsp;";
        }
        for ($b=1; $b <= $a; $b++) { 
            echo "<b>*</b>&nbsp;&nbsp;";
        }
        echo "<br>";
   }
   for ($a=1; $a <= $bil; $a++) {
       for ($b=1; $b <=  $a; $b++) {
           echo "&nbsp;&nbsp;";
        }
        for ($b=1; $b <= $bil - $a; $b++) {
            echo "<b>*</b>&nbsp;&nbsp;";
        }
        echo "<br>";
    }
    echo "Total Bintang $bil";
    echo "<br><hr>";
}

?>