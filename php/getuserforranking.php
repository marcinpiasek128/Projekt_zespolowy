<?php
require("connect.php");
$query = "SELECT * FROM data";
$result = $conn->query($query);
while($row = $result->fetch_array())
{
    $userid=$row['ID_User'];
    $user=$row['Username'];
    $hours=$row["Hours"];
    $picture=$row["Picture"];
    $req = "SELECT COUNT(*) as liczbarecenzji FROM rating WHERE ID_User='$userid' AND Comment!=''";
    $res = $conn->query($req);
    $row2 = $res->fetch_array();
    $recenzja=$row2['liczbarecenzji'];
    echo '<div class="movie">';
    echo '<div class="title">';
    echo $user;
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="leftcolumn" style=" min-height:200px;width:200px;">';
    echo '<img class="avatar" src="data:image/jpg;charset=utf8;base64,'.base64_encode($picture).'" />';
    echo '</div>';
    echo '<div class="rightcolumn" style="width:50%;">';
    echo '<div class="info">&nbsp;</div>';
    echo '<h1>Ilość Recenzi: '.$recenzja.'</h1>';
    echo '<h1>Ilość obejrzanych minut: '.$hours.'</h1>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
?>