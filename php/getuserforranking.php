<?php
require("connect.php");
$query = "SELECT * FROM data";
$result = $conn->query($query);
while($row = $result->fetch_array())
{
    
    $user=$row['Username']
    echo $user;
}
?>