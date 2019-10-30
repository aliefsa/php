<html>
<head>
    <tittle>Form Array</tittle>
</head>             
<body>
    <h3>Form Array</h3>
    <fieldset>
        <legend><h1><b>Form Array</b></h1></legend>
        <form action="" method="GET" name="input">
            <label for="">Masukan Jumlah </label> 
            <input type="number" min="1" name="jumlah" required><br>
            <input type="submit" name="submit" value="Simpan"><hr>
        </form>

        <form action="prosformarr.php" method="post">
            <?php
            if (isset($_GET['submit'])) {
                $jml_form = $_GET['jumlah'];
                for ($a = 0; $a < $jml_form; $a++) { ?> 
                    <label for="Nama"></label>                  
                    <input type="text" name="nama[]" required>
                    <label for="Kelas"></label>
                    <input type="text" name="kelas[]" required>
                    <br><br>
                <?php 
            } ?>
                <input type="submit" name="sbm" value="Simpan">
                <input type="submit" name="reset" value="Reset">
            }
        </form>
        <?php 
    } ?>
    </fieldset>
</body>
</html>
