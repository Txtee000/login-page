<?php 
    session_start();
    if(!isset($_SESSION["username"])){ //ถ้าไม่มี session  username
        $_SESSION["msg"] = "You must log in first";
        header("location: login.php"); //ย้ายไปหน้า login
    }
    if (isset($_GET['logout'])){ //ถ้ากด logout
        session_destroy();
        unset($_SESSION["username"]);
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href=" style.css">

    <title>Homepage</title>
</head>
<body>
    <div class="header">
        <h2>Homepage</h2>
    </div>

    <div class="content">
        <!-- notification msg -->
        <?php if (isset($_SESSION["success"])) : ?>
            <div class="success">
                <h3>
                    <?php
                        echo $_SESSION["success"];
                        unset($_SESSION["success"]);
                    ?>
                </h3>

            </div>
        <?php endif?>



        <!-- login user info -->
        <?php if (isset($_SESSION["username"])) : ?>
            <p>Welcome <strong><?php echo $_SESSION["username"]; ?></strong> </p>
            <p><a href="index.php?logout= '1' " style= "color:red;">Logout</a></p>
        <?php endif ?>
    </div>
</body>
</html>