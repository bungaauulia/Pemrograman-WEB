<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="array_2.css">
        <title></title>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'];
            ?>
        <h3>Data Dosen</h3>
        <table>
            <tr>
                <th>Nama</th>
                <td><?= $Dosen['nama']; ?></td>
            </tr>
            <tr>
                <th>Domisili</th>
                <td><?= $Dosen['domisili']; ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?= $Dosen['jenis_kelamin']; ?></td>
            </tr>
        </table>
    </body>
</html>