<?php

function emptyInput($name, $username, $password, $retypepassword)
{
    $result = false;
    if(empty($name) || empty($username) || empty($password) || empty($retypepassword))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    
    return $result;
}

function invalidName($name)
{
    $result = false;
    if(!preg_match("/^[a-zA-Z' ]*$/",$name))
    {
        echo "Only letters and white space allowed.";
        $result = true;
    }

    return $result;
}

function invalidUsername($username)
{
    $result = false;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
        echo "Only letters and numbers allowed.";
        $result = true;
    }

    return $result;
}

function invalidPassword($password)
{
    $result = false;
    if($password < 8)
    {
        echo "Password must be at least 8 characters long.";
        $result = true;
    }

    return $result;
}

function pwdMatch($password, $retypepassword)
{
    $result = false;
    if($retypepassword !== $password)
    {
        echo "Passwords do not match!";
        $result = true;
    }

    return $result;
}
