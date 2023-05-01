<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "simpledrive";

$db = mysqli_connect($server, $username, $password, $db_name);

if(!$db){
    die("GAGAL TERHUBUNG".db->connect_error);
};
?>