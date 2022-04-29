<?php
    include("connect.php");
    if($conn->connect_errno!=0) 
    {
        echo "Error: ".$conn->connect_errno;
    }
    else 
    {
        if(isset($_POST['updatestatus'])) 
        {
            $movieid=$_POST['movieid'];
            $userid=$_POST['userid'];
            $timeswatched=$_POST['timeswatched'];
            $select = "SELECT WatchTime FROM $movies WHERE ID_Movie='$movieid'";
            $resselect = $conn->query($select);
            $resquery = $resselect->fetch_array();
            $selectststus = "SELECT Status FROM $rating WHERE ID_Movie='$movieid' AND ID_User='$userid'";
            $resselectstatus = $conn->query($selectststus);
            $resquerystatus = $resselectstatus->fetch_array();
            $aktualnystatuszbazy=$resquerystatus['Status'];
            $ile=$resquery[0]*$aktualnystatuszbazy;
            $removetime = "UPDATE $data SET Hours=Hours-'$ile' WHERE data.ID_User='$userid'";
            mysqli_query($conn,$removetime);
            $iledodac=$resquery[0]*$timeswatched;
            $addtime = "UPDATE $data SET Hours=Hours+'$iledodac' WHERE data.ID_User='$userid'";
            mysqli_query($conn,$addtime);
            $statusupdate = "UPDATE $rating SET Status='$timeswatched' WHERE ID_Movie='$movieid' AND ID_User='$userid'";
            mysqli_query($conn,$statusupdate);
            echo '<script>location.replace("userpage.php");</script>';
        }
    }
?>