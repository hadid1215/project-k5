<?php
// Fungsi untuk membuat koneksi ke database
function koneksiDatabase()
{
    $host = "localhost";
    $username = "root";
    $password = ""; // Ensure the password is correct
    $database = "project";
    
    // Membuat koneksi
    $koneksi = mysqli_connect($host, $username, $password, $database);

    // Memeriksa koneksi
    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }

    return $koneksi;
}
?>
