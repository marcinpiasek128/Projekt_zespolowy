<?php
    require("connect.php");

    $x = $_SESSION['ID_User'];
    $query = "SELECT Picture FROM data WHERE ID_User='$x'";
    $result = $conn->query($query);

    while($row = $result->fetch_array())
    {
        @$avatar = $row['Picture'];
    }
    echo '<img class="avatar" src="data:image/jpg;charset=utf8;base64,'.base64_encode($avatar).'" />';

    $xusername = $_SESSION['Username'];       
    $sql = "SELECT * FROM data WHERE Username='$xusername'";
    $result = $conn->query($sql);

    echo "<table class='table'>";
        echo "<tr>";
            echo "<th>";
                echo "Obejrzanych";
            echo "</th>";
            echo "<th>";
                echo "Porzuconych";
            echo "</th>";
            echo "<th>";
                echo "Minut";
            echo "</th>";
            echo "<th>";
                echo "Recenzji";
            echo "</th>";
            echo "<th>";
                echo "Rola";
            echo "</th>";
            echo "<th>";
                echo "Zaproponuj nowy film";
            echo "</th>";
            echo "<th>";
                echo "Zostań recenzentem";
            echo "</th>";
        echo "</tr>";
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $sqlobejrzanych = "SELECT COUNT(*) as obejrzanych FROM $rating WHERE ID_User='$x' AND Status>=1";
            $resultobejrzanych = $conn->query($sqlobejrzanych);
            $wynikobejrzanych = $resultobejrzanych->fetch_assoc();
            $obejrzanych=$wynikobejrzanych["obejrzanych"];
            $sqlporzuconych = "SELECT COUNT(*) as porzuconych FROM $rating WHERE ID_User='$x' AND Status=0";
            $resultporzuconych = $conn->query($sqlporzuconych);
            $wynikporzuconych = $resultporzuconych->fetch_assoc();
            $porzuconych=$wynikporzuconych["porzuconych"];
            echo "<tr>";
                echo "<td>";
                   echo $obejrzanych;
                echo "</td>";
                echo "<td>";
                    echo $porzuconych;
                echo "</td>";
                echo "<td>";
                    echo $row["Hours"];
                echo "</td>";
                echo "<td>";
                $req = "SELECT COUNT(*) as liczbarecenzji FROM rating WHERE ID_User='$row[ID_User]' AND Comment!=''";
                $res = $conn->query($req);
                $row2 = $res->fetch_array();
                $recenzja=$row2['liczbarecenzji'];
                    echo $recenzja;
                echo "</td>";
                echo "<td>";
                    echo $row["rank_role"];
                echo "</td>";
                echo "<td>";
                    $sql = "SELECT * FROM data WHERE Username='$xusername'";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_array()){
                        $uid = $row['ID_User'];
                        $accept_rank = $row['agreed'];
                        $role=$row['rank_role'];
                    }
                    if($role == "Recenzent"){
                        echo "<form method='post' action='movierequest-recenzent.php' enctype='multipart/form-data'>";
                        echo "<input type='submit' value='Dodaj!' name='but_submit' />";
                        echo "</form>";
                    }
                    else{
                        echo "<form method='post' action='movierequest.php' enctype='multipart/form-data'>";
                        echo "<input type='submit' value='Dodaj!' name='but_submit' />";
                        echo "</form>";
                    }
                echo "</td>";
                echo "<td>";
                    if ($accept_rank == '0')
                    {
                        echo "<form action='suggest_accepted.php' method='POST'>";
                            echo "<input value='$uid' name='suggest_rank_accepted' hidden/>";
                            echo "<input type='submit' value='Zgódź się'>";
                        echo "</form>";
                    }
                    else if ($accept_rank == '1')
                    {
                        echo "Już jesteś recenzentem";
                    }
                    else
                    {
                        echo "Nie możesz jeszcze zostać recenzentem";
                    }
                echo "</td>";
            echo "</tr>";
        }
    } 
    else {
        echo "Brak Użytkowników";
    }

    
    echo "</table>";
    if(isset($_SESSION['e_txt_request_added']))
        {
            echo '<div class="error">'.$_SESSION['e_txt_request_added'].'</div>';
            unset($_SESSION['e_txt_request_added']);
        }
?>
