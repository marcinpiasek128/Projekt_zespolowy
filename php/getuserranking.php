<?php
require("connect.php");
$query = "SELECT * FROM data";
$result = $conn->query($query);
if(!isset($_POST['send'])) {
$query = "SELECT * FROM data";
$result = $conn->query($query);
include('getuserforranking.php');}
if(isset($_POST['send'])) {
        $query = "SELECT * FROM data";
        $result = $conn->query($query);
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM data";
            $result = $conn->query($query);
            include("getuserforranking.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT * FROM data order by Hours DESC";
            $result = $conn->query($query);
            include("getuserforranking.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT data.*,SUM(CASE WHEN Comment != '' THEN 1 ELSE 0 END) as liczbarecenzji FROM rating right join data on rating.ID_User=data.ID_User GROUP by data.ID_User order by liczbarecenzji DESC;";
            $result = $conn->query($query);
            include("getuserforranking.php");
        }
}
?>