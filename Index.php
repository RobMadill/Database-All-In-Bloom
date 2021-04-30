<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home | All in Bloom</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/Index.css"/>
    </head>
    <body>
        <h1 class='header'>Welcome <?php echo $_SESSION['userName']; ?>! | All in Bloom</h1>
        <h3>
            <?php
            require_once './header.php';
            ?>
        </h3>
        <div class='container'>
            <p style="font-size: 18px">All in Bloom is a small floral business that allows members to view or add flowers to our database!</p>
            <?php
            if (!isset($_SESSION['userName'])) {
                echo "<p style='font-size: 18px'>If you haven't already, please either <a href='login.php'>login</a> or
                <a href='register.php'>register</a> today and view or add to our inventory!</p>";
            } else {
                echo "<p style='font-size: 18px'>I hope you're finding everything you need! before you leave, please <a href='logout.php'>logout</a>!";
            }
            ?>           
        </div>
    </body>
</html>