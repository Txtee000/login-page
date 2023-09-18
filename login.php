<?php 
    session_start();
    include("sever.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" style.css">
    <title>Login page</title>
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>
     

    <form action="login_db.php" method="post">
        <?php if (isset($_SESSION["error"])) : ?>
            <div class="error">
                <h3>
                    <?php
                        echo $_SESSION["error"];
                        unset($_SESSION["error"]);
                    ?>
                </h3>
            </div>
        <?php endif?>

        <div class="input-group">
            <lable for = "username">Username</lable>
            <input type="text" name="username" required>
        </div>
        <div class="input-group">
            <lable for = "password_1">Password</lable>
            <input type="password" name="password" required>
        </div>

        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <p>Not yet a member? <a href="register.php">Sign up</a></p>


    </form>
</body>
</html>