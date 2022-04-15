<?php

function emptyInput($name, $username, $password, $retypepassword)
{
    $answer = false;
    if(empty($name) || empty($username) || empty($password) || empty($retypepassword))
    {
        $answer = true;
    }
    else
    {
        $answer = false;
    }
    
    return $answer;
}

function invalidName($name)
{
    $answer = false;
    if(!preg_match("/^[a-zA-Z' ]*$/",$name))
    {
        echo "Only letters and white space allowed.";
        $answer = true;
    }

    return $answer;
}

function invalidUsername($username)
{
    $answer = false;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
        echo "Only letters and numbers allowed.";
        $answer = true;
    }

    return $answer;
}

function invalidPassword($password)
{
    $answer = false;
    if($password < 8)
    {
        echo "Password must be at least 8 characters long.";
        $answer = true;
    }

    return $answer;
}

function pwdMatch($password, $retypepassword)
{
    $answer = false;
    if($retypepassword != $password)
    {
        echo "Passwords do not match!";
        $answer = true;
    }

    return $answer;
}

/*
function registerUser($conn, $name, $username, $password)
{
    $sql = "INSERT INTO users (userId, userName, userUsername, userPassword) VALUES ();";
    $stmt = mysqli_stmt_init($conn);

    $answer = false
    $stmt();
    $name
    $username
    $password
}
*/
