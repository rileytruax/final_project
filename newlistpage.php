<?php
include "config/dbconnection.php";

if(isset($_POST['addlist'])){

    try{

        $query = "INSERT INTO lists SET listName=:listName, genre=:genre, listOfMovies=:listOfMovies";

        $stmt = $conn->prepare($query);

        $listName = $_POST['listName'];
        $genre = $_POST['genre'];
        $listOfMovies = $_POST['listOfMovies'];

        $stmt->bindParam(':listName', $listName);
        $stmt->bindParam(':genre', $genre);
        $stmt->bindParam(':listOfMovies', $listOfMovies);

        if($stmt->execute()){
            echo "<div class='alert alert-success'>List Created!</div>";
        }
        else{
            echo "<div class='alert alert-warning'>Unable to create list. Please try again.</div>";
        }
    }
    catch(PDOException $e){
        echo'ERROR:'.$e->getMessage();
    }
}
session_start();
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
    <title>Create List</title>
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
        .form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 500px;
        }
        h5{
            text-align: center;
            font-family: 'Fredoka', sans-serif;
            font-weight: bold;
        }
        p{
            
        }
        .addlist{
            background-color: #52b8f2;
            width: 120px;
            border-radius: 3px;
            font-weight: lighter;
            border: none;
            margin-bottom: 10px;
        }
        .backButton{
            background-color: #F87357;
            border: none;
            border-radius: 3px;
            width: 250px;
            font-weight: lighter;
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
            <h1>Your Lists</h1>
        </div>
    </header>
    <br/>
    <br/>
    <main class="container">
        <div class="form">
            <form method="POST">
                <input class="form-control" name="listName" placeholder="List Name" required>
                <div style="padding-top: 3%;">
                    <input class="form-control" name="genre" placeholder="Genre" required>
                </div>
                <div style="padding-top: 3%;">
                    <textarea rows="5" cols="40" name="listOfMovies"></textarea>
                </div>
                <br>
                <button class="addlist" type="submit" name="addlist">ADD</button>
                <button onclick="location.href='listpage.php';" class="backButton" type="submit" name="back-to-lists">Back To Lists</button>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
<?php } ?>