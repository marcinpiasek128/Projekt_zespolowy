<!DOCTYPE html>
<html lang="PL-pl">

<head>
    <title>Moviehub</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="scripts/jquery.js"></script>
    <script src="scripts/reload.js"></script>
</head>

<body>
    <div id="all">
        <div id="header">
            <div id="logo">
                <a href="#" data-target="php/home" class="logolink">
                    <img src="pictures/logo.png" alt="bloody hand" />
                    <span class="logotekst1">MOVIEHUB</span>
                </a>
            </div>
        </div>
        <div id="navigation">
            <ol>
                <li><a href="#" data-target="php/home">Strona Główna</a></li>
                <li><a href="#" data-target="php/ranking">Ranking</a></li>
                <li>
                    <input type="text" placeholder="Wpisz aby wyszukać film" id="search">
                </li>
                <li><a href="#" data-target="php/login">Logowanie</a></li>
            </ol>
        </div>
        <div id="content">
        </div>
        <div id="footer">
            2021&copy;Marcin Piasek, Dawid Piątek &amp; Dawid Jabłoński. Wszelkie prawa zastrzeżone.
        </div>
    </div>
</body>

</html>
