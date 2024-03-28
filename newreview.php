<?php
include "config/dbconnection.php";

if(isset($_POST['createreview'])){  

    try{

        $query = "INSERT INTO movies SET movieName=:movieName, movieReview=:movieReview";

        $stmt = $conn->prepare($query);

        $movieName = $_POST['movieName'];
        $movieReview = $_POST['movieReview'];

        $stmt->bindParam(':movieName', $movieName);
        $stmt->bindParam(':movieReview', $movieReview);

        if($stmt->execute()){
            echo "<div class='alert alert-success'>Review was saved!</div>";
        }
        else{
            echo "<div class='alert alert-warning'>Unable to save review. Please try again.</div>";
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
    <title>Reviews</title>
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
        .newreview{
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
            <h1>Write your review here!</h1>
        </div>
    </header>
    <br/>
    <br/>
    <main class="container">
        <div class="form">
            <form method="POST">
                <input class="form-control" name="movieName" placeholder="Movie Name" required>
                <div style="padding-top: 3%;">
                    <textarea rows="5" cols="40" name="movieReview"></textarea>
                </div>
                <br>
                <button class="newreview" type="submit" name="createreview">Create</button>
                <button onclick="location.href='reviewpage.php';" class="backButton" type="submit" name="back-to-reviews">Back To Reviews</button>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
<?php } ?>