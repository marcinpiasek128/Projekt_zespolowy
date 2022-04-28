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
                echo "Możesz zostać recenzentem";
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
                    echo $row["Rank"];
                echo "</td>";
                echo "<td>";
                    echo "<center><button>";
                        echo "Zaakceptuj";
                    echo "</button></center>";
                echo "</td>";
            echo "</tr>";
        }
    } 
    else {
        echo "Brak Użytkowników";
    }

    
    echo "</table>";
?>