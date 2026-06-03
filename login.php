<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="post">
    <label for="username">Username: </label>
    <input type="text" name="username" required><br><br>

    <label for="password"> Password: </label>
    <input type="password" name="password" required><br><br>

    <input type="hidden" name="token" value="abc123">
    <input type="submit" name="login" value="Login">
</form>

<?php
session_start();
require_once "conn.php";

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1)
    {
        $_SESSION['username'] = $username;
        header("Location: profile.php");
        exit();
    }
    else
    {
        $error = "Invalid username or password";
    }
}
?>
</body>
</html>