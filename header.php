<?php
session_start();
?>
<a href="Index.php">Home</a> |
<a href="add-flower.php">Add to Inventory</a> |
<a href="view-flowers.php">View Inventory</a> |
<?php
if (!isset($_SESSION['userName'])) {
    echo "<a href='register.php'>Register</a> | ";
    echo "<a href='login.php'>Login</a>";
}else{
    echo "<a href='logout.php'>Logout</a>";
}
?>

<hr>
