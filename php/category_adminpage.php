<?php
if(!isset($_POST['send'])) {
$query = "SELECT * FROM movies WHERE is_accepted = '0'";
$result = $conn->query($query);
include('getmovie_adminpage.php');}
?>