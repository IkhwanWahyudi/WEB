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
    (username = '$name') AND 
    (tipeDokumen LIKE '%$keyword%' OR namaDokumen LIKE '%$keyword%')";

    return query($query);
}

?>
