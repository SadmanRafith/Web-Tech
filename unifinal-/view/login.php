<?php 
include '../Control/login_control.php'; // Handle login logic here
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="form-container">
        <h2>Client Login</h2>
        <form action="" method="POST">
            <fieldset class="fieldset-blue">
                <legend>Login Information</legend>
                <table>
                    <tr>
                        <td><label for="username">Username:</label></td>
                        <td>
                            <input type="text" id="username" name="username" placeholder="Enter your username">
                           
                        </td>
                    </tr>
                    <tr>
                        <td><label for="password">Password:</label></td>
                        <td>
                            <input type="password" id="password" name="password" placeholder="Enter your password">
                           
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="button-container">
                            <input type="submit" name ="submit" value="Login" class="form-button">
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </div>
</body>
</html>
