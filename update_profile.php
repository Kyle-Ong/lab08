<?php
session_start();
require_once "conn.php";

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];
$email = $_POST['email'];

$sql = "UPDATE user
        SET email='$email'
        WHERE username='$username'";

mysqli_query($conn, $sql);

header("Location: profile.php");
exit();
?>