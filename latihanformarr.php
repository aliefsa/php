<html>
<head>
    <tittle>Latihan Form Array</tittle>
</head>
<body>
    <h3>Form Array</h3>
    <fieldset>
        <legend align="center"><h1><b>Form Array</b></h1></legend>
        <form action="" method="GET" name="input">
            <label for="">Masukan Jumlah </label> 
            <input type="number" min="1" name="jumlah" required><br>
            <input type="submit" name="submit" value="Masukan"><hr>
        </form>

        <form action="proslatformarr.php" method="post">
            <?php
            if (isset($_GET['submit'])) {
                $jml_form = $_GET['jumlah'];
                for ($a=0; $a < $jml_form; $a++) { ?> 
                    <label for="Bilangan">Bilangan</label>      
                    <input type="text" name="bilangan[]" required>
                    <label for="Pangkat">Pangkat</label>
                    <input type="text" name="pangkat[]" required>
                    <br><br>
                <?php } ?>
                <input type="submit" name="sbm" value="Simpan">
                <input type="submit" name="reset" value="Reset">
            
        </form>
        <?php } ?>
    </fieldset>
</body>
</html>