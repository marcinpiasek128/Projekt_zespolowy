<?php
require("settings-script.php");
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
                <h2>Dane Osobowe:</h2>
                <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Nazwa użytkownika" />
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Hasło" />
                    </div>
                    <br>
                    <div>
                        <input type="submit" value="Zaloguj" name="but_submit" id="ocen" />
                    </div>
                <hr style="color: #fff">
                
                <?php
                

                ?>
            </form>

            <h2>Zmień Awatar:</h2>

            <?php
                require("connect.php");
                $x = $_SESSION['ID_User'];
                $query = "SELECT Picture FROM data WHERE ID_User='$x'";
                $result = $conn->query($query);

                while($row = $result->fetch_array())
                {
                    @$avatar = $row['Picture'];
                }
                echo '<img class="avatar" id="avatar" src="data:image/jpg;charset=utf8;base64,'.base64_encode($avatar).'" /> <br><br><br><br><br><br><br><br><br>';
            ?>

            <form method="post" action="changeavatar.php" enctype="multipart/form-data">
                <div>
                    <input type="file" id="txt_poster_picture" name="image"/>
                </div>
                <br>
                <div>
                    <input type="submit" value="Zmień avatar!" name="but_submit" id="ocen" />
                </div>
            </form>

        </div>
        <div id="footer">
            2022&copy;Marcin Piasek, Dawid Piątek &amp; Dawid Jabłoński. Wszelkie prawa zastrzeżone.
        </div>
    </div>
</body>

</html>