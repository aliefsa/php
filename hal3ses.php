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
    <h3>Hitung Luas Persegi</h3>

    <P>Masukan ukuran pangjang dan lebar persegi</P>
    <form action="" method="post">
        Alas   : <input type="text" name="panj" required><br><br>
        Tinggi : <input type="text" name="leb" required><br><br>
        <input type="submit" name="submit" value="Hitung"><br><br>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $panj = $_POST['panj'];
        $leb = $_POST['leb'];
        $luas_persegi = $panj * $leb;

        echo "Luas Persegi dengan panjang : $panj,dan lebar : $leb<br>";
        echo "Yaitu : <b>$luas_persegi</b>";
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