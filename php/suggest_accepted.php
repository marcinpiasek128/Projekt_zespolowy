<?php
require("connect.php");
if (isset($_POST["suggest_rank_accepted"]))
    {
        $agreed_id = $_POST['suggest_rank_accepted'];
        $sql = "UPDATE data SET agreed='1', rank_role='Recenzent' WHERE ID_User = '$agreed_id'";
        mysqli_query($conn,$sql);

        if ($conn->query($sql) === TRUE) {
            header("Location: userpage.php");
        } 
        else 
        {
              
        }
    }
    else
    {
        
    }
?>