<!-- DINA ROMBAK -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v3">
    <title>Login user</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <h1>LOGIN</h1>
            <form action="add_file.php" method="post">
                <div class="input-container">
                    <input type="text" name="username" placeholder="Username" class="input-field">
                    <input type="password" name="pw" placeholder="Password" class="input-field">
                    <button type="submit" name="login" class="btn">Login</button>
                </div>
            </form>
            <p>Belum punya akun? <a href="registrasi.php" class="link">Daftar</a></p>
        </div>
    </div>
</body>

</html>

<?php
session_start();
require 'functions.php';

if(isset($_POST['login'])){
    if(isset($_POST['username']) && isset($_POST['pw'])) {
        $username = $_POST['username'];
        $pw = $_POST['pw'];

        $sql = "SELECT * FROM akun WHERE username='$username' OR email='$username'";
        $result = $db->query($sql);

        //cek akun ada atau tidak
        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);
            $username = $row['username'];
            $id = $row['id_akun'];

            //cek passwordnya valid
            if(password_verify($pw, $row['pw'])){

                $_SESSION['login'] = $username;
                $_SESSION['id'] = $id;

                echo "<script>
                        alert('Selamat Datang $username');
                        window.location.href = 'add_file.php';
                        </script>";
                exit;
            }else{
                echo "<script>
                        alert('Username dan Password salah');
                        </script>";
            }
        } else{
            echo "<script>
                        alert('Buat akun terlebih dahulu');
                        </script>";
        }
    } else {
        echo "<script>
                alert('Harap isi username dan password');
                </script>";
    }
}
?> 
