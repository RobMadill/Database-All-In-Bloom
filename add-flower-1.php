<?php
ob_start();
session_start();
require_once './connection.php';

$flowerName = $_REQUEST['flowerName'];
$flowerPrice = $_REQUEST['flowerPrice'];

$query = "INSERT INTO `flowerStore`(`productName`,`productPrice`) VALUES ('$flowerName','$flowerPrice')";

$result = mysqli_query($link, $query);

if ($result == 1) {
    header("location:add-flower.php?result=success");
    ob_end_flush();
    die();
} else {
    header("location:add-flower.php?result=fail");
    ob_end_flush();
    die();
}
?>