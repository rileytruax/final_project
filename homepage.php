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
                    <a href="aboutauthor.php">ABOUT</a>
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
                        <th>Top Box-Office Movies Of All Time - Worldwide</th>
                    </tr>
                    <tr>
                        <td>Avatar</td>
                        <td>2009</td>
                    </tr>
                    <tr>
                        <td>Avengers: Endgame</td>
                        <td>2019</td>
                    </tr>
                    <tr>
                        <td>Titanic</td>
                        <td>1997</td>
                    </tr>
                    <tr>
                        <td>Star Wars: Episode VII - The Force Awakens</td>
                        <td>2015</td>
                    </tr>
                    <tr>
                        <td>Avengers: Infinity War</td>
                        <td>2018</td>
                    </tr>
                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th>Top IMDb Movies by Rating</th>
                    </tr>
                    <tr>
                        <td>The Shawshank Redemption</td>
                        <td>1994</td>
                    </tr>
                    <tr>
                        <td>The Godfather</td>
                        <td>1972</td>
                    </tr>
                    <tr>
                        <td>The Dark Knight</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <td>The Godfather: Part II</td>
                        <td>1974</td>
                    </tr>
                    <tr>
                        <td>12 Angry Men</td>
                        <td>1957</td>
                    </tr>
                </table>
            </div>
            <div class="column">
                <table>
                    <tr>
                        <th>My Top Picks</th>
                    </tr>
                    <tr>
                        <td>Ferris Bueller's Day Off</td>
                        <td>1986</td>
                    </tr>
                    <tr>
                        <td>The Princess Bride</td>
                        <td>1987</td>
                    </tr>
                    <tr>
                        <td>Spider-Man 2</td>
                        <td>2004</td>
                    </tr>
                    <tr>
                        <td>The Dark Knight</td>
                        <td>2008</td>
                    </tr>
                    <tr>
                        <td>Interstellar</td>
                        <td>2014</td>
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