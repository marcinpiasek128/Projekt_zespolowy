<?php
require("connect.php");
if($conn->connect_errno!=0) {
    echo "Error: ".$conn->connect_errno;
}
else {
    if(isset($_POST['ocen']))
    {
        $Iduser = $_SESSION['ID_User'];
        $Idmovie = $_POST['postid'];
        $rate = $_POST['movieRating'];
        $result = $conn->query("SELECT * FROM $rating WHERE ID_Movie='$Idmovie' and ID_User='$Iduser'");
        $ile = $result->num_rows;
        
        if($ile == 0)
        {
            $insertquery = "INSERT INTO $rating (ID_User, ID_Movie, Rate) values ('$Iduser','$Idmovie','$rate')";
            mysqli_query($conn,$insertquery);
            $select = "SELECT WatchTime FROM $movies WHERE ID_Movie='$Idmovie'";
            $resselect = $conn->query($select);
            $resquery = $resselect->fetch_array();
            $test = "UPDATE $data SET Hours=Hours+'$resquery[0]' WHERE data.ID_User='$Iduser'";
            mysqli_query($conn,$test);
        }
        else
        {
        $updatequery = "UPDATE $rating SET Rate='$rate' WHERE ID_User='$Iduser' AND ID_Movie='$Idmovie'";
        mysqli_query($conn,$updatequery);   
        }
        
        $query = "SELECT ROUND(AVG(Rate),1) as averageRating FROM $rating WHERE ID_Movie='$Idmovie'";
        $result = mysqli_query($conn,$query) or die(mysqli_error());
        $fetchAverage = mysqli_fetch_array($result);
        $averageRating = $fetchAverage['averageRating'];
    }
}
?>