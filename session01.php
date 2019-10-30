<?php

/****************************************************
Nama file : session01.php
Halaman ini merupakan halaman contoh penciptaan session.
Perintah session_start() harus ditaruh di perintah pertama
tanpa spasi di depannya. Perintah session_start() harus ada
pada setiap halaman yang berhubungan dengan session
 *****************************************************/
session_start();
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
//periksa login
    if ($user == "Aliefsa" && $pass = "454") {
//menciptakan session
        $_SESSION['login'] = $user;
//menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session02.php'>di sini
        (session02.php)</a>
        untuk menuju ke halaman pemeriksaan session";
    } else {
        die("username atau password anda salah,
    silahkan kembali login <a href=session01.php> Login</a>");
    }
} elseif ($_SESSION['login']) {
    echo "<script>";
    echo "alert('Anda Sudah Login');window.location.href='session02.php'";
    echo "</script>";
} else {
    ?>
    <html>
        <head>
            <title>Login here...</title>
        </head>
        <body>
            <form action="" method="post">
                <h2>Login Here...</h2>
                Username : <input type="text" name="user"><br><br>
                Password : <input type="password" name="pass"><br><br>
                <input type="submit" name="Login" value="Log In"><br><br>
            </form>
        </body>
    </html>
<?php

} ?>