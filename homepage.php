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
    <title>Home</title>
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
        table{
            width: 100%;
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
                    <a href="logout.php">LOGOUT</a>
                </div>
            </div>
        </div>
        <div class="title">
            <h1>Home</h1>
        </div>
    </header>
    <br/>
    <br/>
    <main class="container">
        <div class=flex-container>
            <div class="column">
                <table>
                    <tr>
                        <th>Movie Title</th>
                        <th>Year Released</th>
                    </tr>
                    <tr>
                        <td>The Dark Knight</td>
                        <td>2008</td>
                    </tr>
                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th>Movie Title</th>
                        <th>Year Released</th>
                    </tr>
                    <tr>
                        <td>Interstellar</td>
                        <td>2014</td>
                    </tr>
                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th>Movie Title</th>
                        <th>Year Released</th>
                    </tr>
                    <tr>
                        <td>Land Of The Lost</td>
                        <td>2009</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
    <footer>
        
    </footer>
</body>
</html>
<?php } ?>