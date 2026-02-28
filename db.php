<?php

$conn = mysqli_connect("localhost", "root", "", "webmusic");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>