<!DOCTYPE html>
<html>
    <head>
        <title>Login | All in Bloom</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/login.css"/>
    </head>
    <body>
        <h1 class='header'>Login | All in Bloom</h1>
        <h3>
            <?php
            require_once './header.php';
            ?>
        </h3>
        <div class="container">
            <form action="login-1.php" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="userName" required autofocus></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>
        </div>
        <br>
        <?php
        if (isset($_REQUEST['result'])) {
            if ($_REQUEST['result'] == "loginfail") {
                ?>
                <h3><?php echo "ERROR: Login attempted failed; Please check both username & password or register <a href='register.php'>here</a>" ?></h3>
                <?php
            }else if($_REQUEST['result'] == "fail"){
                echo "<h3>username isn't registered</h3>";
            }
        }
        ?>
    </body>
</html>
