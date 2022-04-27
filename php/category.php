<?php
if(!isset($_POST['send'])) {
$query = "SELECT * FROM movies";
$result = $conn->query($query);
include('getmovie.php');}
if(isset($_POST['send'])) {
    if($_POST['gatunek'] == '0') {
        $query = "SELECT * FROM movies";
        $result = $conn->query($query);
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT movies.*, COUNT(*) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }
    if($_POST['gatunek'] == '1') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Horror'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Horror' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Horror' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT movies.*, COUNT(*) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Horror'  GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }
    
    if($_POST['gatunek'] == '2') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Komedia'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Komedia' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Komedia' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT movies.*, COUNT(*) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Komedia'  GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '3') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Dramat'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Dramat' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Dramat' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT movies.*, COUNT(*) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Dramat'  GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '4') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Sci-Fi'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Sci-Fi' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Sci-Fi' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT movies.*, COUNT(*) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Sci-Fi'  GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '5') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Fantasy'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Fantasy' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Fantasy' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT movies.*, COUNT(*) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Fantasy'  GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '6') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Anime'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Anime' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Anime' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT movies.*, COUNT(*) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Anime'  GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '7') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Akcja'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Akcja' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Akcja' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT movies.*, COUNT(*) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Akcja'  GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '8') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Przygodowy'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Przygodowy' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Przygodowy' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT movies.*, COUNT(*) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Przygodowy'  GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '9') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Wojenny'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Wojenny' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Wojenny' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT movies.*, COUNT(*) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Wojenny'  GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '10') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Historyczny'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Historyczny' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Historyczny' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT movies.*, COUNT(*) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Historyczny'  GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }
}
?>