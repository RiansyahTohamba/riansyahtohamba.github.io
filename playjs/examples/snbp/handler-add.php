<?php

$data = json_decode($_POST['data'], true);

foreach($data as $row){

    $nama = $row['nama'];
    $prestasi = $row['prestasi'];
    $portfolio = $row['portfolio'];
    $rapor = $row['rapor'];
    $mapel1 = $row['mapel1'];
    $mapel2 = $row['mapel2'];
    $nilai = $row['nilai_akhir'];

    // contoh insert
    /*
    INSERT INTO hasil_snbp
    (nama, prestasi, portfolio, rapor, mapel1, mapel2, nilai_akhir)
    VALUES (...)
    */

}

echo "OK";