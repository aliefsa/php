<html>
<head><tittle>Latihan Input 6789</tittle></head>
<body>
<FORM ACTION="Proseslatihan.php" METHOD="POST" NAME="input">
<table>
<center><h1><b>Tugas</b></h1></center>
<tr><td>Nama</td><td><input type="text" name="nama" checked><br><br></td></tr>
<tr><td>NIS</td><td><input type="text" name="nis" checked><br><br></td></tr>
<tr><td>Alamat</td><td><textarea name="alamat" cols="20" rows="5" checked></textarea><br><br></td></tr>
<tr><td>Jenis Kelamin</td><td><input type="radio" name="jk" value="Laki-laki" checked>Laki-laki
<input type="radio" name="jk" value="Perempuan" checked>Perempuan</<input></td>
<tr><td>Agama</td><td><select name="agama">
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Hindu">Hindu</option>
<option value="Budha">Budha</option>
</select></td></tr>
<tr><td>Asal Sekolah</td><td><input type="text" name="sekolah" checked><br><br></td></tr>
<tr><td>Nama Orang Tua/Wali</td><td><input type="text" name="wali"><br><br></td></tr>
<tr><td>Mata Pelajaran Yang disukai</td>
<td><input type="checkbox" name="mapel1" value="Mtk" checked>Mtk
<input type="checkbox" name="mapel2" value="IPA" checked>IPA
<input type="checkbox" name="mapel3" value="IPS" checked>IPS
<input type="checkbox" name="mapel4" value="PAI" checked>PAI
<input type="checkbox" name="mapel5" value="B.indo" checked>B.Indo<br><br></td></tr>
<tr><td>Total Nilai Ijasah SMK</td><td><input type="text" name="nilai" checked><br><br></td></tr>
<tr><td>Email</td><td><input type="text" name="email" checked><br><br></td></tr>
<tr><td><input type="submit" name="Pilih" value="Pilih"></td></tr>
</table>
</FORM>
</body>
</html>
