<?php
require("connect.php");
if (isset($_POST["suggest_rank"]))
    {
        $agree_id = $_POST['suggest_rank'];
        $sql = "UPDATE data SET agreed='0' WHERE ID_User = '$agree_id'";
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