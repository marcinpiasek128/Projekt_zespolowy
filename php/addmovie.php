<?php
require("connect.php");
$working=true;

if($conn->connect_errno!=0) 
{
    echo "Error: ".$conn->connect_errno;
}
else 
{
    if(isset($_POST['but_submit'])) 
    {
        @$title=$_POST['txt_title'];
        @$type=$_POST['txt_type'];
        @$directors=$_POST['txt_directors'];
        @$writers=$_POST['txt_writers'];
        @$production=$_POST['txt_production'];
        @$year=$_POST['txt_year'];
        @$description=$_POST['txt_description'];
        @$time=$_POST['txt_time'];
        @$trailer=$_POST['txt_trailer'];

        $res = $conn->query("SELECT ID_Movie FROM $movies WHERE Title='$title' AND Years='$year'");

        $amount_of_movies = $res->num_rows;

        if($amount_of_movies > 0)
        {
            $working = false;
        }
        
        if($working == true) 
        {
            if(!empty($_FILES["image"]["name"])) { 
                $fileName = basename($_FILES["image"]["name"]); 
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
                $allowTypes = array('jpg'); 
        
                if(in_array($fileType, $allowTypes)){ 
                    $image = $_FILES['image']['tmp_name']; 
                    $poster_picture = addslashes(file_get_contents($image)); 
                    $reg="INSERT INTO $movies (Title, Types, Directors, Writers, Production, Years, Poster_picture, Descriptions, WatchTime, Trailer)Values('$title','$type','$directors','$writers','$production','$year','$poster_picture','$description','$time','$trailer')";
                    $result = $conn->query($reg);
                    header("Location:adminpage.php");
                }
            }
            
        }
    }
}
$conn->close();
?>