<?php
$a = 5;
$b = 10;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Nilai a = {$a} <br>";
echo "Nilai b = {$b} <br><br>";

echo "Hasil Tambah (a + b) = {$hasilTambah} <br>";
echo "Hasil Kurang (a - b) = {$hasilKurang} <br>";
echo "Hasil Kali (a * b) = {$hasilKali} <br>";
echo "Hasil Bagi (a / b) = {$hasilBagi} <br>";
echo "Sisa Bagi (a % b) = {$sisaBagi} <br>";
echo "Pangkat (a ** b) = {$pangkat} <br>";
 
$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br>";

echo "Apakah a == b ? : "; var_dump($hasilSama); echo "<br>";
echo "Apakah a != b ? : "; var_dump($hasilTidakSama); echo "<br>";
echo "Apakah a < b ? : "; var_dump($hasilLebihKecil); echo "<br>";
echo "Apakah a > b ? : "; var_dump($hasilLebihBesar); echo "<br>";
echo "Apakah a <= b ? : "; var_dump($hasilLebihKecilSama); echo "<br>";
echo "Apakah a >= b ? : "; var_dump($hasilLebihBesarSama); echo "<br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil AND (a && b) : "; var_dump($hasilAnd); echo "<br>";
echo "Hasil OR (a || b) : "; var_dump($hasilOr); echo "<br>";
echo "Hasil NOT (!a) : "; var_dump($hasilNotA); echo "<br>";
echo "Hasil NOT (!b) : "; var_dump($hasilNotB); echo "<br>";
echo "<br>";

$a += $b;
echo "a += b, nilai a = {$a} <br>";
echo "<br>";
$a -= $b;
echo "a -= b, nilai a = {$a} <br>";
echo "<br>";
$a *= $b;
echo "a *= b, nilai a = {$a} <br>";
echo "<br>";
$a /= $b;
echo "a /= b, nilai a = {$a} <br>";
echo "<br>";
$a %= $b;
echo "a %= b, nilai a = {$a} <br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik (a === b) : "; var_dump($hasilIdentik); echo "<br>";
echo "Hasil Tidak Identik (a !== b) : "; var_dump($hasilTidakIdentik); echo "<br>";
echo "<br>";

//Soal no 3.6 menghitung berapa persen kursi yang masih kosong

$totalKursi = 45;
$kursiTerpakai = 28;
$sisaKursi = $totalKursi - $kursiTerpakai;

$sisaKursiPersen = ($sisaKursi / $totalKursi) * 100;

echo "Total kursi : " . $totalKursi . "<br>";
echo "Kursi terisi : " . $kursiTerpakai . "<br>";
echo "Kursi kosong : " . $sisaKursi . "<br>";
echo "Persentase kursi kosong : " . $sisaKursiPersen . "%<br>";
?>


