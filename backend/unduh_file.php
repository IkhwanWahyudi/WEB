<?php
// Koneksi ke database
require 'koneksi.php';

// Mendapatkan id file dari URL
$id = $_GET['id'];

// Query untuk mengambil data file dari database
$query = "SELECT * FROM dokumen WHERE id = $id";
$result = mysqli_query($conn, $query);

// Mengecek apakah id file ditemukan
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $filename = $row['namaDokumen'];
    $PisahNamaFile = explode("-$- ", $filename);
    $namafile = $PisahNamaFile[1]; // mengambil elemen kedua dari array
    $filepath = "uploads/$filename";

    // Mengirimkan file untuk diunduh
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($namafile) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));
    ob_clean();
    flush();
    readfile($filepath);
    exit;
} else {
    // Menampilkan pesan error jika id file tidak ditemukan
    echo 'File tidak ditemukan';
}

?>