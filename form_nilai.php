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
<h3>Form Nilai Mahasiswa Sekolah Tinggi Teknologi Terpadu Nurul Fikri</h3>
<hr>
    <form method="POST" action="nilai_siswa.php">
        <table rules="rows" >
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama" placeholder="Masukan Nama"></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td><select name="matkul" id="">
                    <option value="pilih">-------------Pilih-----------------</option>
                    <option value="statistik">Statistik & Probabilitas</option>
                    <option value="Web1">Pemrograman Web 1</option>
                    <option value="Web2">Pemrograman Web 2</option>
                    <option value="Jarkom">Jaringan Komputer</option>
                    <option value="Basdat">Basis Data</option>
                    <option value="PKN">PKN</option>
                    <option value="UI/UX">UI/UX</option>
                    <option value="Inggris">Bahasa Inggris</option>
                    <option value="Indonesia">Bahasa Indonesia</option>
                    <option value="Sistem Operasi">Sistem Operasi</option>
                    <option value="Agama">Pendidikan Agama</option>
                    <option value="Matematika">Matematika Komputer</option>
                </select></td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td><select name="angkatan" id="">
                    <option value="pilih">--Pilih--</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select></td>
            </tr>
            <tr>
                <td>Semester</td>
                <td><select name="semester" id="">
                    <option value="pilih">------Pilih-------</option>
                    <option value="semester1">Semester 1</option>
                    <option value="semester2">Semester 2</option>
                    <option value="semester3">Semester 3</option>
                    <option value="semester4">Semester 4</option>
                    <option value="semester5">Semester 5</option>
                    <option value="semester6">Semester 6</option>
                    <option value="semester7">Semester 7</option>
                    <option value="semester8">Semester 8</option>
                </select></td>
            </tr>
            <tr>
                <td>Nilai Tugas / Pratikum</td>
                <td><input type="number" name="tugas" placeholder="Masukan Nilai Tugas/Pratikum"></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><input type="number" name="uts" placeholder="Masukan Nilai UTS"></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><input type="number" name="uas" placeholder="Masukan Nilai UAS"></td>
            </tr>
        </table>
        <br>
        <button type="submit" value="submit">Save</button>
    </from>
    <?php
    $nama_s = $_POST ['nama'];
    $matkul = $_POST ['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tgs = $_POST['tugas'];
    ?>
</body>
</html>