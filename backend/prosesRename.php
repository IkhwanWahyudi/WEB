<?php 
  // Koneksi ke database
  $conn = mysqli_connect('localhost', 'username', 'password', 'simpledrive');

  // Menerima data dari form
  $id = $_POST['id'];
  $new_filename = $_POST['new_filename'];

  // Query untuk mengupdate nama file di database
  $query = "UPDATE dokumen SET namaDokumen = '$new_filename' WHERE id = $id";
  $result = mysqli_query($conn, $query);

  if ($result) {
    // Jika update berhasil, redirect ke halaman dashboard
    header('Location: page-files.php');
  } else {
    // Jika update gagal, tampilkan pesan error
    echo "Gagal mengubah nama file";
  }
?>
