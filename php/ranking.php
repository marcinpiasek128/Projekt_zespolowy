<?php
session_start();
require("connect.php");

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
    <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
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
            <div id="sorting_options">
                <form method="post">
                    <label for="gatunek">Gatunek:</label>
                    <select id="gatunek" name="gatunek">
                        <option value="0"></option>
                        <option value="1">Horror</option>
                        <option value="2">Komedia</option>
                        <option value="3">Dramat</option>
                        <option value="4">Sci-Fi</option>
                        <option value="5">Fantasy</option>
                        <option value="6">Anime</option>
                        <option value="7">Akcja</option>
                        <option value="8">Przygodowy</option>
                        <option value="9">Wojenny</option>
                        <option value="10">Historyczny</option>
                    </select>
                    <label for="sortuj_po">Sortuj po:</label>
                    <select id="sortuj_po" name="sortuj_po">
                        <option value="0"></option>
                        <option value="1">Ocena</option>
                        <option value="2">Alfabetycznie</option>
                        <option value="3">Popularność</option>
                    </select>
                    <input type="submit" name="send" value="Zatwierdź">
                </form>
            </div>
            <?php
                require("category.php");
            ?>
        </div>
        <div id="footer">
            2022&copy;Marcin Piasek, Dawid Piątek &amp; Dawid Jabłoński. Wszelkie prawa zastrzeżone.
        </div>
    </div>
</body>

</html>
