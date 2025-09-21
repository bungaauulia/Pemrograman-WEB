<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Huruf A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf D";
}
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari untuk mencapai jarak 500 kilometer";
echo "<br>";

$jumlahLahan = 10;
$tanamanPerLahan = 5;
$buahPertaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerLahan * $buahPertaman);
}

echo "Jumlah buah yang akan dipanen adalah: $jumlahBuah ";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor+= $skor;
}

echo "Total skor ujian adalah $totalSkor";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (lulus) <br>";
}
echo "<br>";

echo "Soal no 4.6";
echo "<br>";
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilai);

$total = 0;
$index = 0;
$jumlah = count($nilai);

foreach ($nilai as $n) {
    if ($index >= 2 && $index < $jumlah - 2) {
        $total += $n;
    }
    $index++;
}

echo "Total nilai setelah mengabaikan 2 tertinggi dan 2 terendah: $total";
echo "<br><br>";

echo "Soal no 4.7";
echo "<br>";

$hargaProduk = 120000;

if ($hargaProduk > 100000) {
    $hargaDiskon = $hargaProduk * 0.8;
} else {
    $hargaDiskon = $hargaProduk;
}

echo "Harga produk yang dibayar: $hargaDiskon";
echo "<br><br>";

echo "Soal no 4.8";
echo "<br>";
$skor = [550, 320];

foreach ($skor as $poin) {
    $hadiah = ($poin > 500) ? "YA" : "TIDAK";
    
    echo "Total skor pemain adalah: $poin<br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah<br><br>";
}


