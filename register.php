<!DOCTYPE html>
<html>
    <head>
        <title>Register | All in Bloom</title>
        <meta charset="UTF-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/register.css"/>
    </head>
    <body>
        <h1 class='header'>Register | All in Bloom</h1>
        <h3>
            <?php
            require_once './header.php';
            ?>
        </h3>
        <div class="container">
            <form action="register-1.php" method="post">
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
                        <td colspan="2"><input type="submit" value="Register"></td>
                    </tr>
                </table>
            </form>
        </div>
        <br>
        <?php
        $result = $_REQUEST['result'];
        if (isset($result)) {
            if ($result == "success") {
                echo "<h3>New user was registered</h3>";
            } else if ($result == "fail") {
                echo "<h3>Error occured: New user wasn't registered</h3>";
            } else if ($result == "userExists") {
                echo "<h3>User was not register. User already exists</h3>";
            }
        }
        ?>
    </div>
</body>
</html>
