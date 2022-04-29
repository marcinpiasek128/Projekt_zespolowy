<?php
if(!isset($_POST['send'])) {
$query = "SELECT * FROM movies WHERE is_accepted != '0'";
$result = $conn->query($query);
include('getmovie.php');}
if(isset($_POST['send'])) {
    if($_POST['gatunek'] == '0') {
        $query = "SELECT * FROM movies WHERE is_accepted != '0'";
        $result = $conn->query($query);
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE AND is_accepted != '0'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE is_accepted != '0' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {

            $query = "SELECT movies.*, COUNT(rating.ID_Movie) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";

            $result = $conn->query($query);
            include("getmovie.php");
        }
    }
    if($_POST['gatunek'] == '1') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Horror' AND is_accepted != '0'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Horror' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Horror' AND is_accepted != '0' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {

            $query = "SELECT movies.*, COUNT(rating.ID_Movie) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Horror' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";

            $result = $conn->query($query);
            include("getmovie.php");
        }
    }
    
    if($_POST['gatunek'] == '2') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Komedia' AND is_accepted != '0'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Komedia' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Komedia' AND is_accepted != '0' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {

            $query = "SELECT movies.*, COUNT(rating.ID_Movie) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Komedia' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";

            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '3') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Dramat' AND is_accepted != '0'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Dramat' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Dramat' AND is_accepted != '0' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {

            $query = "SELECT movies.*, COUNT(rating.ID_Movie) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Dramat' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";

            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '4') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Sci-Fi' AND is_accepted != '0'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Sci-Fi' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Sci-Fi' AND is_accepted != '0' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {

            $query = "SELECT movies.*, COUNT(rating.ID_Movie) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Sci-Fi' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";

            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '5') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Fantasy' AND is_accepted != '0'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Fantasy' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Fantasy' AND is_accepted != '0' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {

            $query = "SELECT movies.*, COUNT(rating.ID_Movie) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Fantasy' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";

            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '6') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Anime' AND is_accepted != '0'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Anime' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Anime' AND is_accepted != '0' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {

            $query = "SELECT movies.*, COUNT(rating.ID_Movie) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Anime' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";

            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '7') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Akcja' AND is_accepted != '0'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Akcja' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Akcja' AND is_accepted != '0' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {

            $query = "SELECT movies.*, COUNT(rating.ID_Movie) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Akcja' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";

            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '8') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Przygodowy' AND is_accepted != '0'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Przygodowy' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Przygodowy' AND is_accepted != '0' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {

            $query = "SELECT movies.*, COUNT(rating.ID_Movie) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Przygodowy' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";

            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '9') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Wojenny' AND is_accepted != '0'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Wojenny' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Wojenny' AND is_accepted != '0' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {

            $query = "SELECT movies.*, COUNT(rating.ID_Movie) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Wojenny' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";

            $result = $conn->query($query);
            include("getmovie.php");
        }
    }

    if($_POST['gatunek'] == '10') {
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Historyczny' AND is_accepted != '0'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT movies.*,AVG(Rate) as averageRating FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Historyczny' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `averageRating` DESC";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Historyczny' AND is_accepted != '0' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {

            $query = "SELECT movies.*, COUNT(rating.ID_Movie) as numberRatings FROM movies LEFT JOIN rating on movies.ID_Movie = rating.ID_Movie WHERE movies.Types='Historyczny' AND is_accepted != '0' GROUP BY movies.ID_Movie ORDER BY `numberRatings` DESC";

            $result = $conn->query($query);
            include("getmovie.php");
        }
    }
}
?>