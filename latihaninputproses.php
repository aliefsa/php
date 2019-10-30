<html>
<head><title>Latihan Input Proses</title></head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
Nama : <input type="text" nama="nama">
<br><br>
Kelas : <input type="text" nama="kelas">
<br><br>
Alamat : <input type="text" nama="alamat">
<br><br>
Hobi : <input type="text" nama="hobi">
<br><br>>
<input type="submit" nama="Input" value="Input" required>
</FORM>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
echo "Nama  : <b>$nama</b>";
$kelas = $_POST['kelas'];
echo "Kelas  : <b>$kelas</b>";
$alamat = $_POST['alamat'];
echo "Alamat  : <b>$alamat</b>";
$nama = $_POST['hobi'];
echo "Hobi  : <b>$hobi</b>";
}
?>