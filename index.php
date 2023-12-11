<?php
include("login.php");
if(isset($_SESSION['user'])){
header('location:profile.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log In</title>
</head>
<body>
    <div class="main">
        <h1>login in our store</h1>
        <div class="login">
            <h2>Login Form</h2>
            <form action="" method="post">
<label >Username:</label>
<input type="text" class="name" name="username" placeholder="username"><br>
<label >Password:</label>
<input type="password" name="password" class="password" placeholder="***********"><br>
<input type="submit" value="Log In" name="submit">
<span><?php echo $error;   ?></span>
            </form>
        </div>
    </div>
    <a href="registerForm.php">Sign Up</a>
</body>
</html>