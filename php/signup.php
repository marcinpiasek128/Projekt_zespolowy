<?php
require("signup-script.php");
?>
<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <title>Moviehub</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css" />
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
            <form method="post">
                <div id="div_login">
                    <h1>Rejestracja</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Nazwa użytkownika" />
                    </div>
                    <div>
                        <input type="text" class="textbox" id="txt_email" name="txt_email" placeholder="E-mail" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Hasło" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_confirmpwd" name="txt_confirmpwd" placeholder="Powtórz hasło" />
                    </div>
                    <div>
                        <input type="submit" value="Zarejestruj" name="but_submit" id="but_submit" />
                    </div>
                    <div>
                        <a href="login.php" class="sign">Powrót do Logowania</a>
                    </div>
                    <div>
                        <?php
                            if(isset($_SESSION['e_txt_uname']))
                            {
                                echo '<div class="error">'.$_SESSION['e_txt_uname'].'</div>';
                                unset($_SESSION['e_txt_uname']);
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['e_txt_email']))
                            {
                                echo '<div class="error">'.$_SESSION['e_txt_email'].'</div>';
                                unset($_SESSION['e_txt_email']);
                            }
                        ?>
                        <?php
                            if(isset($_SESSION['e_txt_pwd']))
                            {
                                echo '<div class="error">'.$_SESSION['e_txt_pwd'].'</div>';
                                unset($_SESSION['e_txt_pwd']);
                            }
                        ?>
                    </div>
                </div>
            </form>
        </div>
        <div id="footer">
            2022&copy;Marcin Piasek, Dawid Piątek &amp; Dawid Jabłoński. Wszelkie prawa zastrzeżone.
        </div>
    </div>
</body>

</html>
