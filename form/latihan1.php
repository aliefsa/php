    <fiedlset>
        <legend><b>Latihan 1</b></legend>
        <form action="" method="get">    
            <table>
                <tr>
                    <td>Masukan Jumlah</td>
                    <td><input type="number" name="jumlah" required></td>
                </tr>
                <tr>
                    <td><button type"submit" name="masukan">Masukan</button></td>
                    <td><button type"reset" name="reset">Reset</button></td>
                </tr>
            </table>
        </form>
            <form action="proslatihan1.php" method="post">
            <?php
            if (isset($_GET['masukan'])) {
                $jumlah = $_GET['jumlah'];
                for ($a = 0; $a < $jumlah; $a++) { ?> 
                    <label for="">Nama</label>      
                    <input type="text" name="nama[]" required>
                    <label for="">NIK</label>
                    <input type="text" name="nik[]" required>
                    <label for="">Alamat</label>
                    <input type="text" name="alamat[]" required>
                    <label for="">Umur</label>
                    <input type="text" name="umur[]" required>
                    <br><br>
                <?php 
            } ?>
                <input type="submit" name="masukan" value="Masukan">
                <input type="submit" name="reset" value="Reset">
        <?php 
    } ?>
        </form>
    </fiedlset>