<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <div class="form-group">
            <label for="new_filename">Nama file baru:</label>
            <input type="text" class="form-control" id="namaDokumen" name="namaDokumen"
                placeholder="Masukkan nama file baru">
        </div>
        <button type="submit" name="submit" class="btn btn-primary" value="submit">Ubah nama</button>
    </form>
</body>

</html>


<?php
session_start();
require 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$user = getUserById($_SESSION['id'], $conn);

$hasil = mysqli_query($conn, "SELECT * FROM dokumen WHERE id = '$id'");
$row = mysqli_fetch_array($hasil);
$nama_lama = $row['namaDokumen'];
$format = $row['tipeDokumen'];

if (isset($_POST['submit'])) {
    $namaDokumen = $_POST['namaDokumen'];
    $unique_prefix = uniqid(); // string acak
    $timestamp = time(); // timestamp saat file diupload
    $id_user = $user['id_akun'];
    $namabaru = $id_user . ' -$- ' . $namaDokumen . "." . $format;

    $query = "UPDATE dokumen SET
                namaDokumen='$namabaru'
                WHERE id = '$id'";

    if (rename("uploads/" . $nama_lama, "uploads/" . $namabaru)) {
        $result = mysqli_query($conn, $query);
        echo " 
                    <script> 
                    alert('Updating data has DONE');
                    document.location.href = 'page-files.php';
                    </script>
                ";
    } else {
        echo " 
                    <script> 
                    alert('FAILED Updating Data!');
                    </script>
                ";
    }
}
?>