<?php
require("connect.php");
if (isset($_POST["cancel_rank"]))
    {
        $cancel_id = $_POST['cancel_rank'];
        $sql = "UPDATE data SET rank_role='Użytkownik', agreed=NULL WHERE ID_User = '$cancel_id'";
        mysqli_query($conn,$sql);

        if ($conn->query($sql) === TRUE) {
            header("Location: adminpage.php");
        } 
        else 
        {
              
        }
    }
    else
    {

    }
?>