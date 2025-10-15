<?php
// Pastikan file ini hanya menerima metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validasi sederhana di sisi server
    if (empty($nama) || empty($email) || empty($password)) {
        echo "Semua field harus diisi!";
        exit;
    }

    // Validasi format email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Format email tidak valid!";
        exit;
    }

    // Validasi panjang password
    if (strlen($password) < 8) {
        echo "Password harus minimal 8 karakter!";
        exit;
    }

    // Jika semua validasi lolos
    echo "<strong>Data berhasil dikirim!</strong><br>";
    echo "Nama: " . htmlspecialchars($nama) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . str_repeat('*', strlen($password)); // tidak tampilkan password asli
} else {
    echo "Metode pengiriman tidak diizinkan!";
}
?>
