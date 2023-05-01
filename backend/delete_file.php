<!--DITA-->
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

    $selectSql = "SELECT * FROM dokumen where id = ".$id;
	$rsSelect = mysqli_query($conn,$selectSql);
	$getRow = mysqli_fetch_assoc($rsSelect);
		
	$filename = $getRow['namaDokumen'];
    $filepath = "uploads/".$filename;
    
    if(unlink($filepath)){
        $result = mysqli_query($conn,"DELETE FROM dokumen WHERE id ='$id'");
        echo " 
            <script> 
            alert('You Deleted Data');
            document.location.href = 'page-files.php?username=$name';
            </script>
        ";
    }
}

?>
