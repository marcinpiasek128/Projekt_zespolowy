<?php
require("connect.php");
    $query = "SELECT COUNT(*) as numberPosts FROM movies";
    $countresult = $conn->query($query);
    $fetchnumberPosts = $countresult->fetch_array();
    $numberPosts = $fetchnumberPosts['numberPosts'];
    $losuj =rand ( 1 , 65 );
    $query = "SELECT * FROM movies WHERE ID_Movie=".$losuj;
    $result = $conn->query($query);
    while($row = $result->fetch_array())
    {
        @$Idmovie = $row['ID_Movie'];
        @$Title = $row['Title'];
        @$Type = $row['Types'];
        @$Directors = $row['Directors'];
        @$Writers = $row['Writers'];
        @$Production  = $row['Production'];
        @$Year = $row['Years'];
        @$Poster_picture = $row['Poster_picture'];
        @$Description = $row['Description'];
        @$Time = $row['WatchTime'];
        @$Trailer = $row['Trailer'];
        $query = "SELECT ROUND(AVG(Rate),1) as averageRating FROM rating WHERE ID_Movie=".$Idmovie;
        $avgresult = mysqli_query($conn,$query) or die(mysqli_error($conn));
        $fetchAverage = mysqli_fetch_array($avgresult);
        $averageRating = $fetchAverage['averageRating'];     
        $query = "SELECT COUNT(*) as numberRatings FROM rating WHERE ID_Movie=".$Idmovie;
        $counteresult = $conn->query($query);
        $fetchnumberRatings = $counteresult->fetch_array();
        $numberRatings = $fetchnumberRatings['numberRatings'];   
        if($averageRating <= 0)
        {
            $averageRatings = "Brak oceny";
        }
        if($numberRatings <= 0)
        {
            $numberRatings = "Brak oceny";
        }        
        echo '<div class="movie">';
        echo '<div class="title">';
        echo '<a href="php/movie.php?q='.$Idmovie.'">';
        echo $Title;  
        echo '</a>';  
        echo '</div>';
        echo '<div class="row">';
        echo '<div class="leftcolumn">';
        echo '<img src="data:image/jpg;charset=utf8;base64,'.base64_encode($Poster_picture).'" />';
        echo '<br />'; 
        echo '<a href="'.$Trailer.'" class="logolink">';
        echo '<img src="pictures/yt.png" alt="Youtube logo" style="width: 100px;" />';
        echo '</a>';            
        echo '</div>';
        echo '<div class="rightcolumn">';
        echo '<div class="info">';
        echo 'Gatunek: '.$Type;
        echo '<br /><br />';
        echo 'Reżyseria: '.$Directors;
        echo '<br /><br />';
        echo 'Scenariusz: '.$Writers;
        echo '<br /><br />';
        echo 'Produkcja: '.$Production;
        echo '<br /><br />';
        echo 'Premiera: '.$Year;
        echo '<br /><br />';
        echo 'Czas Trwania: '.$Time.' minut';
        echo '</div>';
        echo '<div class="rating">';
        echo '<h1>Ocena: '.$averageRating.'</h1>';
        echo '<h3>Oceniło: '.$numberRatings.'</h3>';
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true )
        {
            echo '<form method="post">';
            require_once('rating.php');
            echo '<label for="movieRating">Widziałem moja ocena to:</label>';
            echo '<input value="'.$Idmovie.'" name="postid" hidden/>';
            echo '<select id="movieRating" name="movieRating">';
            echo '<option value="0">0 - Dramat!</option>';
            echo '<option value="1">1 - Nieporozumienie</option>';
            echo '<option value="2">2 - Bardzo zły</option>';
            echo '<option value="3">3 - Słaby</option>';
            echo '<option value="4">4 - Ujdzie</option>';
            echo '<option value="5">5 - Średni</option>';
            echo '<option value="6">6 - Niezły</option>';
            echo '<option value="7">7 - Dobry</option>';
            echo '<option value="8">8 - Bardzo Dobry</option>';
            echo '<option value="9">9 - Rewelacyny</option>';
            echo '<option value="10">10 - Arcydzieło!</option>';
            echo '</select>';
            echo '<input type="submit" name="ocen" id="ocen" value="Oceń!" />';
            echo '</form>';
        }
        else{
            echo "Zaloguj się aby ocenić!";
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="description">';
        echo $Description;
        echo '</div>';
        echo '</div>';
    }
?>