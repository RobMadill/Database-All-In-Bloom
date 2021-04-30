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
        <title>Add Flowers | All in Bloom</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/add-flower.css"/>
    </head>
    <body>
        <h1 class="header">Add to Inventory | All in Bloom</h1>
        <h3><?php
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
            } else {
                echo "<h3>No flowers have been added to inventory yet!</h3>";
            }
            ?>
            <br><br>
            <form action="add-flower-1.php" method="get">
                <table>
                    <tr>
                        <td>Flower Name:</td>
                        <td><input type="text" name="flowerName" required autofocus></td>
                    </tr>
                    <tr>
                        <td>Flower Price</td>
                        <td><input type="text" name="flowerPrice" required></td>
                    </tr>
                </table>
                <br><br>
                <input class='submitCenter' type="submit" value="Add to Inventory">
            </form>
            <br><br>
        <?php
        $result = $_REQUEST['result'];
        if (isset($result)) {
            if ($result == "success") {
                ?>                
                <h3><?php echo "Flower was added to inventory!" ?></h3>
                <?php
            } else if ($result == "fail") {
                ?>
                <h3><?php echo "Error occured: Flower wasn't added." ?></h3>                
                <?php
            }
        }
        ?>
    </body>
</html>