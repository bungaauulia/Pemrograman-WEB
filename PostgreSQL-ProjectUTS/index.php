<?php
$host = 'localhost';
$port = '5432';
$dbname = 'tokobunga';
$user = 'postgres';
$pass = '2005';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die('Koneksi gagal: ' . pg_last_error());
}

pg_set_client_encoding($conn, 'UTF8');

$sql = 'SELECT
            "id_produk"   AS "ID",
            "nama_produk" AS "Nama",
            "harga"       AS "Harga"
        FROM "produk"
        ORDER BY "id_produk";';

$result = pg_query($conn, $sql);
if (!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Produk | By Bun Florist</title>
<link rel="stylesheet" href="indexStyle.css">
</head>
<body>

<h1>Daftar Produk By Bun Florist</h1>

<table>
    <tr>
        <th>No</th>
        <th>ID Produk</th>
        <th>Gambar</th>
        <th>Nama Produk</th>
        <th>Harga</th>
    </tr>

     <?php 
    $no = 1;
    $gambarIndex = 1;
    while ($row = pg_fetch_assoc($result)): 
        $imagePath = "product/flower" . $gambarIndex . ".png";
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= htmlspecialchars($row["ID"]); ?></td>
        <td><img src="<?= $imagePath; ?>" alt="<?= htmlspecialchars($row["Nama"]); ?>"></td>
        <td><?= htmlspecialchars($row["Nama"]); ?></td>
        <td>Rp <?= number_format($row["Harga"], 0, ',', '.'); ?></td>
    </tr>
    <?php 
        $gambarIndex++; 
    endwhile; 
    ?>

</body>
</html>
