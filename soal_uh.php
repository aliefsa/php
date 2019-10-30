<html>
<head>
    <tittle></tittle>
</head>
<body>
    <fieldset>
        <legend align="center"><h1><b>Form Pembelian Buku</b></h1></legend>
        <form action="prossoal_uh.php" method="POST" name="input">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" cols="20" rows="5" required></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="jk" value="Laki-laki" required>Laki-laki
                    <input type="radio" name="jk" value="Perempuan" required>Perempuan</td>
            </tr>
            <tr>
                <td>Tanggal Beli</td>
                <td><input type="date" name="date" value="" required></td>
            </tr>
            <tr>
                <td><label for="jumlah">Masukan Jumlah </label></td>
                <td><input type="number" min="1" name="jumlah" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Masukan"></td>
            </tr>
        </table>
        </form>
    </fieldset> 
</body>
</html>