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
    <script src="../script/searchphp.js"></script>
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
                <li><a href="ranking.php">Ranking</a></li>
                <li>
                    <input onkeyup="showMovie(this.value)" type="text" placeholder="Wpisz aby wyszukać film" id="search">
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
                            <li><a href="."settings.php".">Ustawienia</a></li>
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
            <div id="user">
                <h1>
                    <?php
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                            echo "Witaj ".$_SESSION['Username'];
                        }
                        else {
                            echo "Nie powinno cię tu być, wróć tu gdy się zalogujesz";
                        }           
                    ?>
                </h1>
            </div>

            <div>

            <?php
                include("userdetails.php");
            ?>

            </div>
                        <br><br><br><br><br>
            <div id="rated">
                <h2>Filmy, które oceniłeś:</h2>
                <?php
                $user=$_SESSION['ID_User'];
                $query = "SELECT movies.ID_Movie,Title,Poster_picture FROM movies JOIN rating ON movies.ID_Movie=rating.ID_Movie WHERE rating.ID_User=".$user." ORDER BY Rate DESC";
                $result = $conn->query($query);
                while($row = $result->fetch_array())
                {                 
                    $movieid = $row['ID_Movie'];
                    $title = $row['Title'];
                    $Poster_picture = $row['Poster_picture'];
                    
                    $query = "SELECT Rate as averageRating FROM rating WHERE ID_Movie='$movieid' AND ID_User=".$user;
                    
                    $avgresult = mysqli_query($conn,$query) or die(mysqli_error($conn));
                    $fetchAverage = mysqli_fetch_array($avgresult);
                    $averageRating = $fetchAverage['averageRating'];
                    
                ?>
            <div class="movie">
                <div class="title">
                    <?php
                        echo $title;
                    ?>
                </div>
                <div class="row">
                    <div class="leftcolumn" style="width:8%">
                    <?php echo '<img src="data:image/jpg;charset=utf8;base64,'.base64_encode($Poster_picture).'" />'; ?>
                    </div>
                    <div class="rightcolumn" style="width:88%">
                       <div class="info">&nbsp;</div>
                       <div class="rating">
                            <h1>Wystawiona ocena: <?php echo $averageRating; ?>/10</h1>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        </div>
        <div id="footer">
            2022&copy;Marcin Piasek, Dawid Piątek &amp; Dawid Jabłoński. Wszelkie prawa zastrzeżone.
        </div>
    </div>
</body>

</html>
