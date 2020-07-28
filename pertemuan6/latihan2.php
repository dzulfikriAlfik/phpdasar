<?php

// $mahasiswa = [
//     ["Dzulfikri", "14.14.1.0110", "alfik@gmail.com", "Teknik Informatika"],
//     ["Yulia", "14.14.1.0098", "yuli@gmail.com", "Teknik Mesin"]
// ];

// Array Associative
$mahasiswa = [
    [
        "nama" => "Dzulfikri",
        "npm" => "14.14.1.0110",
        "email" => "alfik@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sandhika.jpeg"
    ],
    [
        "nama" => "Yuli",
        "npm" => "14.14.1.0098",
        "email" => "yuli@gmail.com",
        "jurusan" => "Teknik Mesin",
        "gambar" => "doddy.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>