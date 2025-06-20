<?php 
    session_start();
    if (!isset($_SESSION["error"])){
        $_SESSION["error"] = "";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="login">
        <div style="justify-content: center;text-align:center;">
            <a href="../view/index.php"><img src="../view/img/Rent-a-dream-logo-only.png" width="150rem" alt=""></a>
        </div>
        <div style="display:flex;text-align: center;justify-content:center;">
            <!-- From Uiverse.io by Smit-Prajapati -->
            <div class="container">
                <div class="heading">Register</div>
                <form method="POST" class="form" action="../controller/usercontroller.php">
                    <input required class="input" type="email" name="email" id="email" placeholder="E-mail">
                    <input required class="input" type="name" name="name" id="name" placeholder="Nombre">
                    <input required class="input" type="text" name="dni" id="dni" placeholder="DNI">
                    <input required class="input" type="password" name="password" id="password" placeholder="Password">
                    <input class="input" type="number" name="phone_number" id="phone_number" placeholder="Phone Number" minlength="11" maxlength="11">
                    <div class="radio-inputs">
                        <label class="radio">
                            <input required type="radio" name="rol" value="user" checked="">
                            <span class="name">User</span>
                        </label>
                        <label class="radio">
                            <input required type="radio" name="rol" value="admin">
                            <span class="name">Admin</span>
                        </label>
                    </div>
                    <span class="forgot-password"><a href="login.html" style="text-shadow: none">You alredy have an account?</a></span>
                    <input class="login-button" type="submit" name="register" value="register">
                </form>
                <h2><?php if($_SESSION["error"] != ""){
                    echo "Error: ". $_SESSION["error"];
                } ?></h2>
            </div>
        </div>

    </div>
    <div></div>

</body>
</html>

