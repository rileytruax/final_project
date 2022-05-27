<?php
session_start();
include('config/dbconnection.php');
if (strlen($_SESSION['userlogin']) == 0) {
    header('location:loginpage.php');
} else {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Movie Review Website">
    <meta name="keywords" content="movies, review">
    <meta name="Author" content="Riley Truax">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300&display=swap" rel="stylesheet">
    <title>About</title>
    <style>
        h1{
            font-family: 'Fredoka', sans-serif;
            font-weight: 700;
        }
        .title{
            text-align: center;
        }
        .column{
            height: 300px;
            width: 32%;
            border-style: solid;
            background-color: lightcoral;
        }
        h5{
            text-align: center;
            font-family: 'Fredoka', sans-serif;
            font-weight: bold;
        }
        .background{
            width: 350px;
            height: 500px;
            background-color: black;
            border: none;
            position: relative;
        }
        .picture-container{
            display: flex;
            justify-content: space-around;
            position: absolute;

        }
        .picture{
            position: relative;
            width: 300px;
            height: auto;
            margin: 25px 0px 0px 25px;
        }
        p{
            font-family: 'Fredoka', sans-serif;
        }
    </style>
</head>
<!-- img is 434 x 640 -->
<body>
    <header>
        <div class="headerIcon">
            <div class="icon">
                <button type="submit" class="btn"><img src="img/popcorn-icon.png" width="77.5" height="114.2857" title="popcorn icons"></button>
                <div class="content">
                    <a href="homepage.php">HOME</a>
                    <a href="listpage.php">LIST</a>
                    <a href="reviewpage.php">REVIEWS</a>
                    <a href="aboutauthor.php">ABOUT</a>
                    <a href="logout.php">LOGOUT</a>
                </div>
            </div>
        </div>
        <div class="title">
            <h1>About Me</h1>
        </div>
    </header>
    <br/>
    <br/>
    <main class="container">
        <div class="picture-container">
            <div class="background">
                <img class="picture" src="img/about-me.jpg" width="300" height="auto">
            </div>
        </div>
        <div style="padding-left:35%;">
            <p>My name is Riley Truax. I am currently enrolled at Dunwoody, in the Web Programming & Database Development program. 
                For this project, I decided to create a movie reviewing website that allows a user to create an account, login securely, 
                write reviews and make lists.</p>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
<?php } ?>