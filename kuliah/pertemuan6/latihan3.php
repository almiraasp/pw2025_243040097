<?php
// Array Bersarang / Nested Array
$mahasiswa = ['Almira', '243040097', 'almirap430@gmail.com', 'Teknik Informatika'];
$mahasiswa = ['Mufti', '6705194008', 'garmuft@gmail.com', 'Teknik Telekomunikasi'];

$mahasiswa = [
    ['Almira', '243040097', 'almirap430@gmail.com', 'Teknik Informatika'],
    ['Mufti', '243040098', 'garmuft@gmail.com', 'Teknik Telekomunikasi']
];
//echo $mahasiswa[1][2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Bersarang</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m[0]; ?></li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>