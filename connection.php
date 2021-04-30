<?php

$host = 'localhost';
$userName = 'madillro_madillro';
$password = '$$$123WebProg#123';
$dbname = 'madillro_mydatabase';
$link = mysqli_connect('localhost', 'madillro_madillro', '$$$123WebProg#123', 'madillro_mydatabase');

if (empty($link)) {
    die("connection failed " . mysqli_connect_error());
}
?>