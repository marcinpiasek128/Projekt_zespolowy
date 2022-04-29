<?php
require("connect.php");
if (isset($_POST["req_acc"]))
    {
        $acc_id = $_POST['req_acc'];
        $sql = "UPDATE movies SET is_accepted='1' WHERE ID_Movie = '$acc_id'";
        mysqli_query($conn,$sql);

        if ($conn->query($sql) === TRUE) {
            header("Location: adminpage.php");
        }
    }
    else
    {

    }
?>