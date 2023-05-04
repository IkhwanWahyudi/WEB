<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>
				alert('Lakukan login terlebih dahulu di halaman awal user untuk bisa mengakses website ini');
				window.location = 'index.php';
				</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Berhasil Masuk</h1>
</body>

</html>