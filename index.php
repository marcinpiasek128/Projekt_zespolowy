<?php
session_start();
require("php/connect.php")
?>
<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <title>Moviehub</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/movie.css" />
    <script src="script/searchindex.js"></script>

</head>

<body>
    <div id="all">
        <div id="header">
            <div id="logo">
                <a href="index.php" class="logolink">
                    <img src="pictures/logo.png" alt="bloody hand" />
                    <span class="logotekst1">MOVIEHUB</span>
                </a>
            </div>
        </div>
        <div id="navigation">
            <ol>
                <li><a href="index.php">Strona Główna</a></li>
                <li><a href="php/ranking.php">Ranking</a></li>
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
                                    echo "php/adminpage.php";
                                }
                                else
                                {
                                    echo "php/userpage.php";
                                }
                            ?><?php echo">Profil</a></li>
                            <li><a href="."php/settings.php".">Ustawienia</a></li>
                            <li><a href="."php/logout.php".">Wyloguj</a></li>
                            </ul></li>";
                }
                else
                {
                    echo "<li><a href="."php/login.php".">Logowanie</a></li>";
                }
                ?>
            </ol>
        </div>
        <div id="content">
            <?php require_once('php/randommovie.php') ?>
        </div>
        <div id="footer">
            2022&copy;Marcin Piasek, Dawid Piątek &amp; Dawid Jabłoński. Wszelkie prawa zastrzeżone.
        </div>
    </div>
</body>

</html>
