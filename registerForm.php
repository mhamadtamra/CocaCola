<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <form action="register.php" method="post">
        <h1>welcome to the registration page</h1>
        please input the registration details to create a account<br>
        <table border="2">
            <tr>
                <td>user name:</td>
                <td><input type="text" name="regname"></td>
            </tr>
            <tr>
                <td>email:</td>
                <td><input type="email" name="regemail"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="regpass1"></td>
            </tr>
            <tr>
                <td>re-type password:</td>
                <td><input type="password" name="regpass2"></td>
            </tr>
        </table>
        <input type="submit" value="register me!">
    </form>
</body>

</html>