<?php
session_start();
require("connect.php");
if($conn->connect_errno!=0) {
    echo "Error: ".$conn->connect_errno;
}
else {
    if(isset($_POST['but_submit']))
    {
        $Iduser = $_SESSION['ID_User'];
        $Idmovie = $_POST['postid'];
        $comment = $_POST['txt_comment'];
        $result = $conn->query("SELECT * FROM $rating WHERE ID_Movie=".$Idmovie." and ID_User=".$Iduser);
        $ile = $result->num_rows;
        
        if($ile == 0)
        {
            $insertquery = "INSERT INTO $rating (ID_User, ID_Movie, Comment) values ('$Iduser','$Idmovie','$comment')";
            mysqli_query($conn,$insertquery);
            header("Location: movie.php?q=$Idmovie");
        }
        else
        {
            $updatequery = "UPDATE $rating SET Comment=".$comment." WHERE ID_User=".$Iduser." AND ID_Movie=".$Idmovie;
            mysqli_query($conn,$updatequery);   
            header("Location: movie.php?q=$Idmovie");
        }
    }
    
}
?>