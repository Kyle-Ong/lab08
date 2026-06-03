<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>

<h2>User Profile</h2>

<p>
    <strong>Username:</strong>
    <?php echo $user['username']; ?>
</p>

<p>
    <strong>Email:</strong>
    <?php echo $user['email']; ?>
</p>

<hr>

<h3>Edit Profile</h3>

<form action="update_profile.php" method="post">

    Email:
    <input
        type="email"
        name="email"
        value="<?php echo $user['email']; ?>"
        required
    >

    <br><br>

    <input type="submit" value="Update Email">

</form>


<?php
session_start();
require_once "conn.php";

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}

$username = $_SESSION['username'];

$sql = "SELECT * FROM user WHERE username='$username'";
$result = mysqli_query($conn, $sql);

$user = mysqli_fetch_assoc($result);
?>

</body>
</html>