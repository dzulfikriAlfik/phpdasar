<?php

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
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&gambar=<?= $mhs["gambar"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>