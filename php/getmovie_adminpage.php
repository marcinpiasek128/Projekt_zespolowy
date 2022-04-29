<?php
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
        
        echo '<div class="movie">';
        echo '<div class="title">';      
        echo $Title;  
        echo '</div>';
        echo '<div class="row">';
        echo '<div class="leftcolumn">';
        echo '<img src="data:image/jpg;charset=utf8;base64,'.base64_encode($Poster_picture).'" />';
        echo '<br />'; 
        echo '<a href="'.$Trailer.'" class="logolink">';
        echo '<img src="../pictures/yt.png" alt="Youtube logo" style="width: 100px;" />';
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
            echo '<form method="post" action="acceptrequest_adminpage.php">';
                echo "<input value='$row[ID_Movie]' name='req_acc' hidden/>";
                echo "<input type='submit' value='Zatwierdź' id='ocen'>";
            echo '</form>';
            echo '<br>';
            echo '<form method="post" action="denyrequest_adminpage.php">';
                echo "<input value='$row[ID_Movie]' name='req_deny' hidden/>";
                echo "<input type='submit' value='Nie zatwierdzaj' id='ocen'>";
            echo '</form>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="description">';
        echo $Description;
        echo '</div>';
        echo '</div>';
    }
?>