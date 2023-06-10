<?php
$host = 'localhost'; // Ganti dengan host database Anda
$db   = 'siekskul'; // Ganti dengan nama database Anda
$user = 'root'; // Ganti dengan username database Anda
$pass = ''; // Ganti dengan password database Anda

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];
// Query untuk memeriksa username dan password di database
$query = "SELECT * FROM users WHERE email='$username' AND password='$password'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    header("Location:http://localhost/SIEkskul/public/dashboard/index.php");
} else {
    // Jika data tidak ditemukan, user gagal login
    echo "Login gagal!";
}

$conn->close(); 
?>