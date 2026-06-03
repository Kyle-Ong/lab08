<?php

require_once("settings.php");

$conn = mysqli_connect($host, $user, $pwd, $Profile);

if(!$conn)
{
    die("Database connection failed: " . mysqli_connect_error());
}

?>