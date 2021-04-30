<?php
session_start();
if (!isset($_SESSION['userName'])) {
    header('location:login.php?result=login-to-access');
    ob_end_flush();
    die();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Inventory | All in Bloom</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/view-flower.css"/>
    </head>
    <body>
        <h1 class='header'>Current Inventory | All in Bloom</h1>
        <h3>
            <?php
            require_once './header.php';
            ?>
        </h3>
        <table style='margin-top: 50px;' class='center' id="table">
            <tr>
                <th>Type:</th>
                <th>Price:</th>                                
            </tr>
        </table>
        <?php
        require_once './connection.php';
        $query = "SELECT * FROM `flowerStore`";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <table class='center'  id="table">
                    <tr>
                        <td><?php echo $row['productName']; ?></td>
                        <td><?php echo $row['productPrice']; ?></td>                       
                    </tr>
                </table>
                <?php
            }
        }
        ?>
    </body>
</html>