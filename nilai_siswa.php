<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <title>Form Nilai Mahasiswa STT Terpadu Nurul Fikri</title>
</head>
<body>
    <!-- header -->
    <header class='header'>
        <h3 class='head'>Data Nilai Mahasiswa Sekolah Tinggi Teknologi Terpadu Nurul Fikri</h3>
    </header>
    <!-- content -->

    <?php

        $abs1 = ['id'=>1, 'nama'=>'Dinda Zahra', 'matkul'=>'Basis Data I', 'uts'=>90, 'uas'=>80, 'tugas'=>90];
        $abs2 = ['id'=>2, 'nama'=>'Zafran Muhammad', 'matkul'=>'UI/UX', 'uts'=>88, 'uas'=>82, 'tugas'=>92];
        $abs3 = ['id'=>3, 'nama'=>'Sarah Anita', 'matkul'=>'Statistik', 'uts'=>80, 'uas'=>87, 'tugas'=>92];
        $abs4 = ['id'=>4, 'nama'=>'Mela Amelia', 'matkul'=>'Jaringan Komputer', 'uts'=>89, 'uas'=>86, 'tugas'=>80];
        $abs5 = ['id'=>5, 'nama'=>'Doni Alamsyah', 'matkul'=>'UI/UX', 'uts'=>89, 'uas'=>90, 'tugas'=>95];
        $abs6 = ['id'=>6, 'nama'=>'Reza Saputra', 'matkul'=>'Pemrograman Web', 'uts'=>79, 'uas'=>88, 'tugas'=>90];
        $abs7 = ['id '=>7, 'nama'=>'Dodit Triansyah', 'matkul'=>'Jaringan Komputer', 'uts'=>77, 'uas'=>87, 'tugas'=>90];

        
        $abs8 = ['id' =>8, 'nama'=>$_POST['nama'], 'matkul'=>$_POST['matkul'], 'uts'=>$_POST['uts'], 'uas'=>$_POST['uas'], 'tugas'=>$_POST['tugas']];

        $abs_nilai = [$abs1,$abs2,$abs3,$abs4,$abs5,$abs6,$abs7,$abs8];


    ?>
    
    <table border="1" width="100%" class='table'>
    <thead>
        <tr>
            <th>No</th><th>Nama Lengkap</th><th>Mata Kuliah</th><th>Nilai UTS</th>
            <th>Nilai UAS</th><th>Nilai Tugas / Pratikum</th><th>Total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;
        foreach($abs_nilai as $ns){
        echo '<tr><td>'.$nomor.'</td>';
        echo '<td>'.$ns['nama'].'</td>';
        echo '<td>'.$ns['matkul'].'</td>';
        echo '<td>'.$ns['uts'].'</td>';
        echo '<td>'.$ns['uas'].'</td>';
        echo '<td>'.$ns['tugas'].'</td>';
        $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
        echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
        echo '<tr/>';
        $nomor++;
        }
        ?>
    </tbody>
    </table>


</body>
</html>
<?php

    
?>