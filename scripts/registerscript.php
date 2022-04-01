<?php

if(isset($_POST["submit"])) 
{
    $name = ($_POST)["name"];
    $username = ($_POST)["username"];
    $password = ($_POST)["pwd"];
    $retypepassword = ($_POST)["retypepwd"];

    require_once "config/dbconnection.php";
    require_once "functions.php";

    if(emptyInput($name, $username, $password, $retypepassword) !== false)
    {
        header("location: ../registerpage.php?error=emptyvalue");
        exit();
    }

    if(invalidName($name) !== false)
    {
        header("location: ../registerpage.php?error=emptyvalue");
        exit();
    }

    if(invalidUsername($username) !== false)
    {
        header("location: ../registerpage.php?error=emptyvalue");
        exit();
    }

    if(invalidPassword($password) !== false)
    {
        header("location: ../registerpage.php?error=emptyvalue");
        exit();
    }

    if(pwdMatch($password, $retypepassword) !== false)
    {
        header("location: ../registerpage.php?error=emptyvalue");
        exit();
    }

    /*
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {

    }
    */
}
else
{
    header("location: ../registerpage.php");
}