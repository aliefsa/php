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
    <h3>Hitung Luas Lingkaran</h3>

    <P>Masukan ukuran jari-jari Lingkaran</P>
    <form action="" method="post">
        Jari-jari   : <input type="text" name="jari" required><br><br>
        <input type="submit" name="submit" value="Hitung"><br><br>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $jari = $_POST['jari'];
        $phi = 3.14;
        $luas_lingkaran = $phi * $jari * $jari;

        echo "Luas Persegi dengan panjang : $jari<br>";
        echo "Yaitu : <b>$luas_lingkaran</b>";
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