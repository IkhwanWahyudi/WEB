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
        <input type="text" class="form-control" id="namaDokumen" name="namaDokumen" placeholder="Masukkan nama file baru">
    </div>
    <button type="submit" name="submit" class="btn btn-primary" value="submit">Ubah nama</button>
    </form>
</body>
</html>


<?php
require 'koneksi.php';

$username_ = $_GET['username'];
    
$queryUsername = mysqli_query($conn, "SELECT * FROM akun WHERE username='$username_'");

while ($row1 = mysqli_fetch_assoc($queryUsername)) {
    $user[] = $row1;
}

$username = $user[0];
$name = $username['username'];

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$hasil = mysqli_query($conn, "SELECT * FROM dokumen WHERE id = '$id'");
$row = mysqli_fetch_array($hasil);
$nama_lama = $row['namaDokumen'];
$format = $row['tipeDokumen'];

if (isset($_POST['submit'])){
    $namaDokumen = $_POST['namaDokumen'];
    $namabaru = $namaDokumen.".".$format;

    $query =
            "UPDATE dokumen SET
                namaDokumen='$namabaru'
                WHERE id = '$id'"; 

            if(rename("uploads/".$nama_lama, "uploads/".$namabaru)){
                $result=mysqli_query($conn,$query);
                echo" 
                    <script> 
                    alert('Updating data has DONE');
                    document.location.href = 'page-files.php?username=$name';
                    </script>
                ";
            } 
            else {
                echo " 
                    <script> 
                    alert('FAILED Updating Data!');
                    </script>
                ";
            }
}
?>