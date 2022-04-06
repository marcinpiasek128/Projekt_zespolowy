<?php
if(!isset($_POST['send'])) {
$query = "SELECT * FROM movies";
$result = $conn->query($query);
include('getmovie.php');}
if(isset($_POST['send'])) {
    if($_POST['gatunek'] == '0') {
        $query = "SELECT * FROM movies";
        $result = $conn->query($query);
        include('getmovie.php');
    }
    if($_POST['gatunek'] == '1') {
        $query = "SELECT * FROM movies WHERE Types = 'Horror'";
        $result = $conn->query($query);

        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Horror'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT * FROM movies WHERE Types = 'Horror' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Horror' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT * FROM movies WHERE Types = 'Horror' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }
    if($_POST['gatunek'] == '2') {
        $query = "SELECT * FROM movies WHERE Types = 'Komedia'";
        $result = $conn->query($query);
       
        if($_POST['sortuj_po'] == '0') {
            $query = "SELECT * FROM movies WHERE Types = 'Komedia'";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '1') {
            $query = "SELECT * FROM movies WHERE Types = 'Komedia' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '2') {
            $query = "SELECT * FROM movies WHERE Types = 'Komedia' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
        if($_POST['sortuj_po'] == '3') {
            $query = "SELECT * FROM movies WHERE Types = 'Komedia' ORDER By Title";
            $result = $conn->query($query);
            include("getmovie.php");
        }
    }
}
?>