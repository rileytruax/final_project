<?php
    
$host = "localhost";
$dbName = "website";
$dbUsername = "root";
$dbPassword = "";

$conn = mysqli_connect($host, $dbName, $dbUsername, $dbPassword);

if(!$conn)
{
    die("Connection error" . mysqli_connect_error());
}

?>