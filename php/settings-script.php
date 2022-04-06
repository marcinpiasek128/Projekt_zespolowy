<?php

session_start();

require("connect.php");
session_start();

if($conn->connect_errno!=0) {
    echo "Error: ".$conn->connect_errno;
}
else {
    if(isset($_POST['but_submit']))
    {
        $login = $_POST['txt_uname'];
        $haslo = $_POST['txt_pwd'];
        $Iduser = $_SESSION['ID_User'];


    }
}
$conn->close();
?>