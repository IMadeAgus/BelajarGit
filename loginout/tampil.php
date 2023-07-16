<?php
include 'koneksi_tampil.php';
// Koneksi ke database (ganti dengan detail koneksi yang sesuai)

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);  
}

// Query untuk mengambil data
$sql = "SELECT * FROM register";
$result = $conn->query($sql);

// Periksa apakah ada data yang ditemukan
if ($result->num_rows > 0) {
    // Menampilkan data per baris
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"]. "<br>";
        echo "Email: " . $row["email"]. "<br>";
        echo "Password: " . $row["password"]. "<br>";
        echo "<br>";
    }
} else {
    echo "Tidak ada data yang ditemukan";
}

// Menutup koneksi ke database
$conn->close();
?>