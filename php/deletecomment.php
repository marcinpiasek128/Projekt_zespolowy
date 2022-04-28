<?php
    require("connect.php");
    if(isset($_POST['deletecomment'])){
        $movieid=$_POST['movieid'];
        $userid=$_POST['userid'];
        $updatequery = "UPDATE $rating SET Comment='' WHERE ID_User='$userid' AND ID_Movie='$movieid'";
        mysqli_query($conn,$updatequery);  
        echo '<script>location.replace("movie.php?q='.$movieid.'");</script>';
    } 
?>