<?php
    
$host = "localhost";
$dbName = "website";
$dbUsername = "root";
$dbPassword = "";

try
{
    $conn = new PDO("mysql:host={$host};dbName={$dbName}",$dbUsername,$dbPassword);
}

catch(PDOException $e)
{
    echo "Connection error :".$e->getMessage();
}

?>