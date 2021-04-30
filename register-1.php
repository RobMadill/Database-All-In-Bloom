<?php
ob_start();
session_start();
require_once './connection.php';

$userName = $_REQUEST['userName'];
$password = $_REQUEST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);

$query = "SELECT `userName` FROM `flowerUsers` WHERE userName='$userName'";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) > 0) {
    header('location:register.php?result=userExists');
    ob_end_flush();
    die();
} 
else {
    $query = "INSERT INTO `flowerUsers` (`userName`, `password`) VALUES ('".$userName."','".$hash."')";
    $result = mysqli_query($link, $query);
    if ($result == 1) {
        header('location:register.php?result=success');
        ob_end_flush();
        die();
    } else {
        header('location:register.php?result=fail');
        ob_end_flush();
        die();
    }
}
?>