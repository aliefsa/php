<?php
//ADA CARA LAMA SKUY MAAP
$arrNilai = array ("Ajeng" => 90,"Mamat" => 70,"Ucup" => 87,"Aang" => 95,"Syahrul" => 75);
$kkm = [85,75,65];
$grade = [A,B,C];
echo "Data Nilai Siswa <br><hr>";
foreach ($arrNilai as $nama => $nilai) {
    if ($nilai > $kkm[0]) {
        echo "Nama : $nama, "." Nilai = $nilai "."Gradenya $grade[0] <br><hr>";
    }
    elseif ($nilai > $kkm[1]) {
        echo "Nama : $nama, "." Nilai = $nilai "."Gradenya $grade[1] <br><hr>";
    }
    elseif ($nilai > $kkm[2]) {
        echo "Nama : $nama, "." Nilai = $nilai "."Gradenya $grade[2] <br><hr>";
    }
}
?>