<?php
session_start();
require("connect.php")
?>
<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <title>Moviehub</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/movie.css" />
</head>

<body>
    <div id="all">
        <div id="header">
            <div id="logo">
                <a href="../index.php" class="logolink">
                    <img src="../pictures/logo.png" alt="bloody hand" />
                    <span class="logotekst1">MOVIEHUB</span>
                </a>
            </div>
        </div>
        <div id="navigation">
            <ol>
                <li><a href="../index.php">Strona Główna</a></li>
                <li><a href="../php/ranking.php">Ranking</a></li>
                <li>
                    <input type="text" placeholder="Wpisz aby wyszukać film" id="search">
                </li>
                <?php
                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                {
                    echo "<li><a href="."#".">".$_SESSION['Username']."</a>
                        <ul>
                            <li><a href="?><?php
                                if($_SESSION['Username']=='admin')
                                {

                                    echo "adminpage.php";

                                  

                                }
                                else
                                {
                                    echo "userpage.php";
                                }
                            ?><?php echo">Profil</a></li>
                            <li><a href="."logout.php".">Wyloguj</a></li>
                            </ul></li>";
                }
                else
                {
                    echo "<li><a href="."login.php".">Logowanie</a></li>";
                }
                ?>
            </ol>
        </div>
        <div id="content">
            <?php
                $query = "SELECT * FROM movies";
                $result = $conn->query($query);
                while($row = $result->fetch_array())
                {
                    $Idmovie = $row['ID_Movie'];
                    $Title = $row['Title'];
                    $Type = $row['Type'];
                    $Directors = $row['Directors'];
                    $Writers = $row['Writers'];
                    $Production  = $row['Production'];
                    $Year = $row['Year'];
                    $Poster_picture = $row['Poster_picture'];
                    $Description = $row['Description'];
                    $Time = $row['Time'];
                    $Trailer = $row['Trailer'];
                    
                    $query = "SELECT ROUND(AVG(Rate),1) as averageRating FROM rating WHERE ID_Movie=".$Idmovie;
                    
                    $avgresult = mysqli_query($conn,$query) or die(mysqli_error($conn));
                    $fetchAverage = mysqli_fetch_array($avgresult);
                    $averageRating = $fetchAverage['averageRating'];
                    
                    $query = "SELECT COUNT(*) as numberRatings FROM rating WHERE ID_Movie=".$Idmovie;
                    $counteresult = $conn->query($query);
                    $fetchnumberRatings = $counteresult->fetch_array();
                    $numberRatings = $fetchnumberRatings['numberRatings'];
                    
                    if($averageRating <= 0)
                    {
                        $averageRatings = "Brak oceny";
                    }
                    if($numberRatings <= 0)
                    {
                        $numberRatings = "Brak oceny";
                    }
                
            ?>
            <div class="movie">
                <div class="title">
                    <?php
                        echo $Title;
                    ?>
                </div>
                <div class="row">
                    <div class="leftcolumn">
                        <img src="../pictures/<?php echo $Poster_picture?>.jpg" alt="movie poster" />
                        <br />
                        
                        <a href="<?php echo $Trailer?>" class="logolink">
                            <img src="../pictures/yt.png" alt="Youtube logo" style="width: 100px;" />
                        </a>
                        
                    </div>
                    <div class="rightcolumn">
                        <div class="info">
                            Gatunek: <?php echo $Type ?>
                            <br /><br />
                            Reżyseria: <?php echo $Directors ?>
                            <br /><br />
                            Scenariusz: <?php echo $Writers ?>
                            <br /><br />
                            Produkcja: <?php echo $Production ?>
                            <br /><br />
                            Premiera: <?php echo $Year ?>
                            <br /><br />
                            Czas Trwania: <?php echo $Time?>minut
                        </div>
                        <div class="rating">
                            <h1>Ocena: <?php echo $averageRating; ?></h1>
                            <h3>Oceniło: <?php echo $numberRatings; ?></h3>
                            <?php
                                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true ){
                            ?>
                            <form method="post">
                                <?php require_once('rating.php')?>
                                <label for="movieRating">Widziałem moja ocena to:</label>
                                <input value="<?php echo $Idmovie?>" name="postid" hidden/>
                                <select id="movieRating" name="movieRating">
                                    <option value="0">0 - Dramat!</option>
                                    <option value="1">1 - Nieporozumienie</option>
                                    <option value="2">2 - Bardzo zły</option>
                                    <option value="3">3 - Słaby</option>
                                    <option value="4">4 - Ujdzie</option>
                                    <option value="5">5 - Średni</option>
                                    <option value="6">6 - Niezły</option>
                                    <option value="7">7 - Dobry</option>
                                    <option value="8">8 - Bardzo Dobry</option>
                                    <option value="9">9 - rewelacyny</option>
                                    <option value="10">10 - Arcydzieło!</option>
                                </select>
                                <input type="submit" name="ocen" id="ocen" value="Oceń!" />
                            </form>
                            <?php
                                }
                            else{
                                echo "Zaloguj się aby ocenić!";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <?php echo $Description;?>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div id="footer">
            2021&copy;Marcin Piasek, Dawid Piątek &amp; Dawid Jabłoński. Wszelkie prawa zastrzeżone.
        </div>
    </div>
</body>

</html>
