<?php
session_start();
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
                <a href="index.php" class="logolink">
                    <img src="../pictures/logo.png" alt="bloody hand" />
                    <span class="logotekst1">MOVIEHUB</span>
                </a>
            </div>
        </div>
        <div id="navigation">
            <ol>
                <li><a href="../index.php">Strona Główna</a></li>
                <li><a href="ranking.php">Ranking</a>
                    <ul>
                        <li><a href="ranking.php">Filmy</a>
                        <li><a href="userranking.php">Użytkownicy</a>
                    </ul>
                </li>
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
            <form method="post" action="addmovie.php" enctype="multipart/form-data">
                <div id="div_login">
                    <h1>Witaj w panelu administratora!</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_title" name="txt_title" placeholder="Tytuł" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_type" name="txt_type" placeholder="Typ" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_directors" name="txt_directors" placeholder="Reżyserzy" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_writers" name="txt_writers" placeholder="Scenarzyści" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_production" name="txt_production" placeholder="Produkcja" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_year" name="txt_year" placeholder="Rok" />
                    </div>
                    <div>
                        <input type="file" id="txt_poster_picture" name="image"/>
                    </div>
                    <div>
                        <textarea id="txt_description" name="txt_description" rows="7" cols="38" placeholder="Opis"></textarea>
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_time" name="txt_time" placeholder="Czas Trwania" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_trailer" name="txt_trailer" placeholder="Link do trailera" />
                    </div>
                    <br>
                    <div>
                        <input type="submit" value="Dodaj!" name="but_submit" id="ocen" />
                    </div>
                </div>
            </form>
            <br>
            <div>

            <?php
                include("getuser.php");
            ?>
            
            </div>
        </div>

        

        <div id="footer">
            2022&copy;Marcin Piasek, Dawid Piątek &amp; Dawid Jabłoński. Wszelkie prawa zastrzeżone.
        </div>
    </div>
</body>

</html>
