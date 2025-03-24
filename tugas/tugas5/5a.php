<?php
// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Vicka Aulia Shafira Nurwina",
        "nrp" => "243040067",
        "email" => "vickaas29@gmail.com ",
        "jurusan" => "Teknik Informatika",
        "gambar" => "vicka.jpg"
    ],

    [
        "nama" => "Try Noer Arreva",
        "nrp" => "243040073",
        "email" => "reva121427@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "areva.jpg"
    ],

    [
        "nama" => "Salwa Alya",
        "nrp" => "243040081",
        "email" => "salwaalya008@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "salwa.jpg"
    ],

    [
        "nama" => "Nazala Qisti",
        "nrp" => "243040084",
        "email" => "nazalaqist@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "nana.jpg"
    ],

    [
        "nama" => "Arneu Raysa",
        "nrp" => "243040089",
        "email" => "raysarneu@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "arneu.jpg"
    ],

    [
        "nama" => "Almira Alifia Suparya Putri",
        "nrp" => "243040097",
        "email" => "almirap430@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "almira.jpg"
    ],

    [
        "nama" => "Lee Jeno",
        "nrp" => "243040098",
        "email" => "leejen_o_423@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "jeno.jpeg"
    ],

    [
        "nama" => "Na Jaemin",
        "nrp" => "243040099",
        "email" => "na.jaemin0813@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "jaemin.jpeg"
    ],

    [
        "nama" => "Hwang Renjun",
        "nrp" => "243040100",
        "email" => "yellow_3to3@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "renjun.jpeg"
    ],

    [
        "nama" => "Lee Haechan",
        "nrp" => "243040101",
        "email" => "haechanahceah@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "haechan.jpeg"
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>
                <img src="img/<?= $m["gambar"]; ?>" alt="">
            </li>
            <li>Nama: <?= $m["nama"]; ?></li>
            <li>NIM: <?= $m["nrp"]; ?></li>
            <li>Email: <?= $m["email"]; ?></li>
            <li>Jurusan: <?= $m["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>