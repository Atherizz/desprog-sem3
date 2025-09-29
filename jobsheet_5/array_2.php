<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        table {
            border-collapse: collapse;
            width: 350px;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #888;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #fafafa;
        }
    </style>
</head>
<body>
<?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
?>
<table>
    <tr>
        <th>Nama</th>
        <td><?= $Dosen['nama'] ?></td>
    </tr>
    <tr>
        <th>Domisili</th>
        <td><?= $Dosen['domisili'] ?></td>
    </tr>
    <tr>
        <th>Jenis Kelamin</th>
        <td><?= $Dosen['jenis_kelamin'] ?></td>
    </tr>
</table>
</body>
</html>