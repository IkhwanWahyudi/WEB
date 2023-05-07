<?php
// start session
session_start();

// check if user is logged in
if (!isset($_SESSION['id_akun'])) {
  echo "Maaf, Anda harus login terlebih dahulu.";
  exit;
}

// get user id
$user_id = $_SESSION['id_akun'];

// get user's uploaded files
$sql = "SELECT * FROM dokumen WHERE id_akun = '$user_id'";
$result = $conn->query($sql);
?>

<html>
<head>
  <title>Daftar File yang Diunggah</title>
</head>
<body>
  <h1>Daftar File yang Diunggah</h1>
  <table>
    <tr>
      <th>Nama File</th>
      <th>Tanggal Unggah</th>
    </tr>
    <?php while($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $row['namaDokumen']; ?></td>
      <td><?php echo $row['tglUpload']; ?></td>
    </tr>
    <?php } ?>
  </table>
</body>
</html>
