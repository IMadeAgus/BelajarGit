<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbsewamobil';

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika koneksi berhasil, Anda dapat menjalankan query atau operasi lain di sini

?>