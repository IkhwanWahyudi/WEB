<!--DITA-->
<?php
require 'koneksi.php';

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
            document.location.href = 'page-files.php';
            </script>
        ";
    }
}

?>
