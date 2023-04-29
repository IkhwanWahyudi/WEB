<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "simpledrive";


$conn = mysqli_connect($server, $username, $password, $db_name);

if(!$conn){
    die("GAGAL TERHUBUNG".mysqli_connect_error());
};

function queryDocument($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $feedback = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $feedback[] = $row;
    }

    return $feedback;
}

function cariDocument($keyword) {
    $query = "SELECT * FROM dokumen WHERE namaDokumen LIKE '%$keyword%'
    OR tipeDokumen LIKE '%$keyword%' OR tglUpload LIKE '%$keyword%'";

    return queryDocument($query);
}

?>
