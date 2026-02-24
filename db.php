<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "webmusic";

// Connection create
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}
?>