<?php
session_start();
require 'koneksi.php';

if (isset($_POST['register'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $pw = isset($_POST['pw']) ? $_POST['pw'] : '';
    $konfirpassword = isset($_POST['konfirpassword']) ? $_POST['konfirpassword'] : '';

    // cek username udah digunakan atau belum
    $sql = "SELECT * FROM akun WHERE username='$username'";
    $user = $conn->query($sql);

    if (mysqli_num_rows($user) > 0) {
        echo "<script>
                alert('username telah digunakan, silahkan gunakan username lain')
            </script>";
    } else {
        // cek konfirmasi password
        if ($pw == $konfirpassword) {

            $pw_hash = password_hash($pw, PASSWORD_DEFAULT);

            $query = "INSERT INTO akun (email, username, pw) VALUES ('$email', '$username', '$pw_hash')";
            $result = $conn->query($query);

            if ($result) {
                echo "<script>
                alert('Registrasi Berhasil')
                document.location.href = 'registrasi.php';
                </script>";
            } else {
                echo "<script>
                alert('Registrasi Gagal')
            </script>";
            }
        } else {
            echo "<script>
                alert('konfirmasi password salah!')
            </script>";
        }
    }
}
?>

<!-- DINA ROMBAK -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v3">
    <title>Register User</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <h1>REGISTRASI</h1>
            <form action="registrasi.php" method="post" >
                <div class="input-container">
                    <input type="text" name="username" placeholder="Nama" class="input-field">
                    <input type="text" name="email" placeholder="Email" class="input-field">
                    <input type="password" name="pw" placeholder="Password" class="input-field">
                    <input type="password" name="konfirpassword" placeholder="Konfirmasi Password" class="input-field">
                    <button type="submit" name="register" class="btn">Daftar</button>
                </div>
            </form>
            <p>Sudah punya akun? <a href="index.php" class="link">Login</a></p>
        </div>
    </div>
</body>

</html>
