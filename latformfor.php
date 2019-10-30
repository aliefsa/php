<html>
<head>
<tittle><b>Latihan Form Formulir Gaji Sederhana</b></tittle>
</head>
<body>
<FORM ACTION="proslatformfor.php" METHOD="POST" NAME="input"><br>
<table>
<tr><td>Nama</td><td><input type="text" name="nama" checked><br></td></tr>
<tr><td>NIP</td><td><input type="number" name="nip" checked><br></td></tr>
<tr><td>Jenis Kelamin</td><td><input type="radio" name="jk" value="Laki-laki">Laki-laki
<input type="radio" name="jk" value="Perempuan">Perempuan</<input></td>
<tr><td>Alamat</td><td><textarea name="alamat" cols="20" rows="5" checked></textarea><br></td></tr>
<tr><td>Status</td><td><select name="status">
<option value=""></option>
<option value="Menikah">Menikah</option>
<option value="Belum Menikah">Belum Menikah</option>
</select></td></tr>
<tr><td>Jabatan</td><td><select name="jabatan">
<option value=""></option>
<option value="HRD">HRD</option>
<option value="Manager">Manager</option>
<option value="Staff">Staff</option>
<option value="Karyawan">Karyawan</option>
</select></td></tr>
<tr><td>Potongan</td>
<td><input type="checkbox" name="BPJS" value="BPJS">BPJS
<input type="checkbox" name="Koperasi" value="Koperasi">Koperasi
<input type="checkbox" name="" value="Jamsostek">Jamsostek<br></td></tr>
<tr><td>Golongan</td><td><select name="golongan">
<option value=""></option>
<option value="A1">A1</option>
<option value="A2">A2</option>
<option value="A3">A3</option>
</select></td></tr>
<tr><td><input type="submit" name="Masukan" value="Masukan"></td></tr>
</table>
</FORM>
</body>
</html>