<?php
$servename = "localhost";
$username = "root";
$database = "eventifydb";
$password = "";

$conn = mysqli_connect($servename, $username, $password, $database);
$message = "";
if (!$conn) {
    $message = mysqli_connect_errno();
    return $conn = null;
}else{
    return $conn;
}
