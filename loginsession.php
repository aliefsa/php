<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Session</title>
</head>
<body>
    <nav>
        <a href="hal1ses.php">Halaman 1</a>|
        <a href="hal2ses.php">Halaman 2</a>|
        <a href="hal3ses.php">Halaman 3</a>|
        <a href="logoutsession.php">Logout</a>|
    </nav>
    <form action="" method="post">
        Email <input type="email" name="email" required><br><br>
        Password <input type="password" name="pass" required><br><br>
        <input type="submit" value="Login" name="Akses"><br><br>
    </form>
</body>
</html>

<?php
if (isset($_POST['Akses'])) {
    $a = $_POST['email'];
    $b = $_POST['pass'];
    if ($a == "Admin@gmail.com" && $b == "123456") {
        $_SESSION['akseslogin'] = 'Admin';
        header("location:hal1ses.php");
    } else {
        echo "Login Gagal";
    }
} elseif ($_SESSION['akseslogin']) {
    echo "<script> alert('Anda Sudah Login');"
        . "window.location.href='hal1.php'</script>";
}
?>