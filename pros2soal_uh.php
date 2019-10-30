<html>
<head><tittle></tittle>
</head>
<body>
<fieldset>
<legend><h2>Form Pembayaran</h2></legend>
<?php

if (isset($_POST['sbm'])) {

    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk     = $_POST['jk'];
    $date   = $_POST['date'];
    $judul  = $_POST['judul'];
    $kode   = $_POST['kode'];
    $peng   = $_POST['peng'];
    $jenis  = $_POST['jenis'];
    $harga  = $_POST['harga'];
?>
    <table>
        <tr>
            <td><b>Nama</b></td>
            <td><?php echo ": $nama"; ?></td>
        </tr>
        <tr>
            <td><b>Alamat</b></td>
            <td><?php echo ": $alamat"; ?></td>
        </tr>
        <tr>
            <td><b>Jenis Kelamin</b></td>
            <td><?php echo ": $jk"; ?></td>
        </tr>
        <tr>
            <td><b>Tanggal Pembelian</b></td>
            <td><?php echo ": $date"; ?></td>
            <td>
        </tr>
    </table>
    <hr>
    <?php

    foreach ($judul as $data => $x) {
        echo "<b>Judul</b>      : " . $judul[$data] . "<br>";
        echo "<b>Kode</b>       : " . $kode[$data] . "<br>";
        echo "<b>Pengarang</b>  : " . $peng[$data] . "<br>";
        echo "<b>Jenis</b>      : " . $jenis[$data] . "<br>";
        echo "<b>Harga</b>      : Rp." . $harga[$data] . "<br>";
        echo "<hr>";
    }
    for ($i=0; $i < count($harga); $i++) { 
        $hasil = $harga[$i]+$hasil;
    }
    echo "<b>Total Pembayaran :</b> Rp.$hasil</b>";

    if ($jumlah >= 3) {
        $diskon = $hasil * 5/100;
        echo "<b>Diskon (5%) :</b> $diskon<br>";
        $total =  $hasil - $diskon;
        echo "<b>Total Pembayaran :</b>Rp. $total";
    }
    if ($jumlah >= 5) {
        $diskon2 = $hasil * 10/100;
        $total2  = $hasil - $diskon2;
        echo "<b><br>Diskon (5%) :</b> $diskon2<br>";
        echo "<b>Total Pembayaran :</b>Rp. $total2";
    }
    else {
        $d = 0;
        echo "<b><br>Diskon (0%) :</b> $d<br>";
        echo "<b>Total Pembayaran :</b>Rp. $hasil";
    }
}
?>

</fieldset>
</body>
</html>

