<?php

ob_start();
session_start();
require_once './connection.php';

$userName = $_REQUEST['userName'];
$password = $_REQUEST['password'];

$query = "SELECT * FROM `flowerUsers` WHERE userName = '$userName'";
$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hash = $row['password'];
    if (password_verify($password, $hash)) {
        $_SESSION['userName'] = $userName;
        header('location:view-flowers.php?result=loginsuccessful');
        ob_end_flush();
        die();
    } else {
        header('location:login.php?result=loginfail');
        ob_end_flush();
        die();
    }
} else {
    header('location:login.php?result=fail');
    ob_end_flush();
    die();
}
?>