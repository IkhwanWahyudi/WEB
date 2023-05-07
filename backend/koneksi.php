<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "simpledrive";


$conn = mysqli_connect($server, $username, $password, $db_name);

if(!$conn){
    die("GAGAL TERHUBUNG".mysqli_connect_error());
};

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $feedback = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $feedback[] = $row;
    }
    
    return $feedback;
}

function cariDokumen($keyword, $name) {
    $query = "SELECT * FROM dokumen where 
    (id_akun = '$name') AND 
    (tipeDokumen LIKE '%$keyword%' OR namaDokumen LIKE '%$keyword%' OR tglUpload LIKE '%$keyword%')";

    return query($query);
}

function getUserById($id, $db){
    $sql = "SELECT * FROM akun WHERE id_akun = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    
    $result = $stmt->get_result();
    if($result->num_rows == 1){
        $user = $result->fetch_assoc();
        return $user;
    } else {
        return 0;
    }
}

?>
