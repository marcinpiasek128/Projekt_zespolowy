<?php
require("connect.php");
if (isset($_POST["req_deny"]))
    {
        $deny_id = $_POST['req_deny'];
        $sql = "DELETE FROM movies WHERE ID_Movie = '$deny_id'";
        mysqli_query($conn,$sql);

        if ($conn->query($sql) === TRUE) {
            header("Location: adminpage.php");
        }
    }
    else
    {
        
    }
?>