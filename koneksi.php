<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dbcrud";

$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
    die("Koneksi Eror : ".mysqli_connect_error);
}
?>