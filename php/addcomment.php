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

        $filter = $comment;
        $filter = implode(" ", $_POST);
        $keywords = array('ptrek','nazista','komunista','mitoman','knur');

        $working = true;

        foreach ($keywords as $keys){
            if (strpos($filter, $keys)){
                $working = false;
                header("Location: comment.php?q=$Idmovie");
                $_SESSION['e_txt_wulg']="Twój komentarz zawiera nieodpowiednie słowo: $keys";
            }
        }

        $result = $conn->query("SELECT * FROM $rating WHERE ID_Movie=".$Idmovie." and ID_User=".$Iduser);
        $ile = $result->num_rows;
        
        if($working == true && $ile == 0)
        {
            $insertquery = "INSERT INTO $rating (ID_User, ID_Movie, Comment) values ('$Iduser','$Idmovie','$comment')";
            mysqli_query($conn,$insertquery);
            header("Location: movie.php?q=$Idmovie");
            $_SESSION['e_txt_comm_insert_update']="Twój komentarz został dodany pomyślnie!";
        }
        else if ($working == true)
        {
            $updatequery = "UPDATE $rating SET Comment='$comment' WHERE ID_User='$Iduser' AND ID_Movie='$Idmovie'";
            mysqli_query($conn,$updatequery); 
            header("Location: movie.php?q=$Idmovie");  
            $_SESSION['e_txt_comm_insert_update']="Twój komentarz został zmieniony pomyślnie!";
        }
    }
}
?>