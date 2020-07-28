<?php
require_once __DIR__ . '/vendor/autoload.php';
require 'functions.php';

// timezone GMT+7
$zonawaktu = +7;

$waktu = time() + 3600 * ($zonawaktu + date('I'));
$waktu = gmdate('d-M-Y H:i', $waktu);

$mahasiswa = query("SELECT * FROM mahasiswa");
$mpdf = new \Mpdf\Mpdf();

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>

    <h1>Daftar Mahasiswa</h1>
    <p>Dicetak pada : ' . $waktu . ' </p>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Npm</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>';
$i = 1;
foreach ($mahasiswa as $row) {
    $html .= '
    <tr>
        <td class="center">' . $i++ . '</td>
        <td class="center"><img src="img/' . $row["gambar"] . '" width="50"></img></td>
        <td>' . $row["npm"] . '</td>
        <td>' . $row["nama"] . '</td>
        <td>' . $row["email"] . '</td>
        <td>' . $row["jurusan"] . '</td>
    </tr>';
}

$html .= '</table>
    
</body>
</html>';

$mpdf->WriteHTML($html);
// isi dari $destination bisa disingkat menggunakan "I" untuk preview dan "D" untuk download tanpa preview
// $destination = \Mpdf\Output\Destination::INLINE;
$mpdf->Output('Daftar-Mahasiswa.pdf', "I");
