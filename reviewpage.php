<?php
include "config/dbconnection.php";

try{
    $query="SELECT movieName,movieReview FROM movies";

    $stmt=$conn->prepare($query);

    $stmt->execute();

    $row=$stmt->fetch(PDO::FETCH_ASSOC);

    $movieName=$row['movieName'];
    $movieReview=$row['movieReview'];
}
catch(PDOException $e){
    echo'ERROR:'.$e->getMessage();
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
        .flex-container{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        h5{
            text-align: center;
            font-family: 'Fredoka', sans-serif;
            font-weight: bold;
        }
        p{
            
        }
        .newreview{
            background-color: #52b8f2;
            width: 120px;
            border-radius: 3px;
            font-weight: lighter;
            border: none;
            margin-bottom: 10px;
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
            <h1>Reviews</h1>
        </div>
    </header>
    <br/>
    <br/>
    <main class="container">
        <button onclick="location.href='newreview.php';" class="newreview" type="submit" name="createreview">CREATE REVIEW</button>
        <table class="table table-hover table-responsive table-bordered">
            <tr>
                <th>Movie Title</th>
                <td><?php echo $movieName; ?></td>
            </tr>
            <tr>
                <th>User Review</th>
                <td><?php echo $movieReview; ?></td>
            </tr>
        </table>
    </main>
    <footer>

    </footer>
</body>
</html>
<?php } ?>