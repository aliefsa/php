<?php
session_start();
if ($_SESSION['akseslogin']) {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Session 2</title>
</head>
<body>
    <nav>
        <a href="hal1ses.php">Halaman 1</a>|
        <a href="hal2ses.php">Halaman 2</a>|
        <a href="hal3ses.php">Halaman 3</a>|
        <a href="logoutsession.php">Logout</a>|
    </nav>
    <h3>Hitung Luas Segitiga</h3>

    <P>Masukan ukuran alas dan tingi segitiga</P>
    <form action="" method="post">
        Alas : <input type="text" name="alas" required><br><br>
        Tinggi : <input type="text" name="tinggi" required><br><br>
        <input type="submit" name="submit" value="Hitung"><br><br>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $luas_segitiga = 1 / 2 * $alas * $tinggi;

        echo "Luas Segitiga dengan alas : $alas,dan tinggi : $tinggi<br>";
        echo "Yaitu : <b>$luas_segitiga</b>";
    }
    ?>
</body>
</html>

<?php

} else {
    echo "<script> alert('Silahkan Login Terlebih Dahulu');"
        . "window.location.href='loginsession.php'</script>";
}

?>