<?php
    
define('DB_HOST','localhost');
define('DB_NAME','website');
define('DB_USER','root');
define('DB_PASS','');

$dbUsername = "root";
$dbPassword = "";
try
{
    $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
}

catch(PDOException $e)
{
  echo'ERROR:'.$e->getMessage();  
}

?>