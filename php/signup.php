<?php
require("signup-script.php");
?>
<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <title>Moviehub</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <style>
        #div_login {
            width: 290px;
            height: 270px;
            margin: 0 auto;
        }

        #div_login h1 {
            margin-top: 0px;
            font-weight: normal;
            padding: 10px;
            text-align: center;
            color: white;
            font-family: 'Josefin Sans', sans-serif;
        }

        #div_login div {
            clear: both;
            margin-top: 10px;
            padding: 5px;
        }

        #div_login .textbox {
            width: 96%;
            padding: 7px;
        }

        #div_login input[type=submit] {
            padding: 6px;
            width: 102.5%;
            background-color: #e52d27;
            border: 0px;
            color: white;
            font-size: 20px;
        }

        #div_login textarea {
            width: 96%;
            padding: 7px;
        }

        a.sign {
            padding: 6px;
            font-size: 20px;
            width: 100px;
            color: white;
            text-decoration: none;
            background-color: #e52d27;
            text-align: center;
        }

        .sign:hover {
            background-color: #f63e38;
        }

        input[type=password] {
            display: block;
            height: 38px;
            border: none;
            width: 280px;
            text-align: center;
        }

    </style>
</head>

<body>
    <div id="all">
        <div id="header">
            <div id="logo">
                <a href="#" class="logolink">
                    <img src="pictures/logo.png" alt="bloody hand" />
                    <span class="logotekst1">MOVIEHUB</span>
                </a>
            </div>
        </div>
        <div id="navigation">
            <ol>
                <li><a href="#">Strona Główna</a></li>
                <li><a href="#">Ranking</a></li>
                <li>
                    <input type="text" placeholder="Wpisz aby wyszukać film" id="search">
                </li>
                <li><a href="#">Logowanie</a></li>
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
                        <a href="#" data-target="php/login" class="sign">Powrót do Logowania</a>
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
            2021&copy;Marcin Piasek, Dawid Piątek &amp; Dawid Jabłoński. Wszelkie prawa zastrzeżone.
        </div>
    </div>
</body>

</html>
