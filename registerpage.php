<?php
include "config/dbconnection.php";
include "scripts/functions.php";

if(isset($_POST['register']))
{
//echo "Hi";
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['pwd'];
//$retypepassword=$_POST['retypepwd'];

$option = ['cost' => 12];
$hashed_password = password_hash($password, PASSWORD_BCRYPT, $option);

$query = "INSERT INTO users (uName,uUsername,uPassword) VALUES (?,?,?)";
$stmt= $conn->prepare($query);
$stmt->bindParam(1,$name);
$stmt->bindParam(2,$username);
$stmt->bindParam(3,$hashed_password);
if($stmt->execute())
{
    echo '<div class="alert alert-success">
  <strong>Thank you for signing up!</strong>
    </div>';
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Movie Review Website">
    <meta name="keywords" content="movies, review">
    <meta name="Author" content="Riley Truax">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&display=swap" rel="stylesheet">
    <style>
        h2{
            font-family: 'Fredoka', sans-serif;
            font-weight: 700;
        }
        p{
            font-family: 'Fredoka', sans-serif;
            font-size: large;
            font-weight: 500;
        }
        .header{
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .text {
            text-align: center;
        }
        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 750px;
        }
        .input {
            width: 250px;
            margin-top: 5px;
        }
        .loginButton{
            background-color: #71c77c;
            border: none;
            border-radius: 3px;
            margin-top: 10px;
            width: 250px;
            font-weight: lighter;
        }
        .registerButton{
            background-color: #F87357;
            border: none;
            border-radius: 3px;
            width: 250px;
            font-weight: lighter;
        }
        .register{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="contatiner">
        <header>
            <nav>
                <a href="homepage.php">Homepage</a>
            </nav>
            <br>
            <div class="header">
                <h2>Welcome To The Movie Reviewer!</h2>
            </div>
        </header>
        <br>
        <main>
            <div class="text">
                <p>Thank you for visiting our site. We are currently working on the content for this page, so please check back another time.</p>
                <p>Thank you and have a great day!!</p>
            </div>
            <div class="form">

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

                    <input class="form-control" type="text" name="name" placeholder="Name">
                    <div style="padding-top: 3%;">
                        <input class="form-control" type="text" name="username" placeholder="Username">
                    </div>
                    <div style="padding-top: 3%;">
                        <input class="form-control" type="password" name="pwd" placeholder="Password">
                    </div>
                    <div style="padding-top: 3%;">
                        <input class="form-control" type="password" name="retypepwd" placeholder="Retype password">
                    </div>
                    <button class="loginButton" type="submit" name="register">REGISTER</button>
                </form>
            </div>
            <div class="register">
                <button onclick="location.href='loginpage.php';" class="registerButton" type="submit" name="back-to-login">Back To Login</button>
            </div>
        </main>
        <footer>

        </footer>
    </div>
</body>
</html>