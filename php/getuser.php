<?php
    require("connect.php");

    $x = $_SESSION['Username'];       
    $sql = "SELECT * FROM data WHERE Username!='$x' ORDER BY ID_User ASC";
    $result = $conn->query($sql);

    echo "<table class='table'>";
        echo "<tr>";
            echo "<th>";
                echo "ID";
            echo "</th>";
            echo "<th>";
                echo "Nazwa";
            echo "</th>";
            echo "<th>";
                echo "Email";
            echo "</th>";
            echo "<th>";
                echo "Recenzje";
            echo "</th>";
            echo "<th>";
                echo "Minuty";
            echo "</th>";
            echo "<th>";
                echo "Rola";
            echo "</th>";
            echo "<th>";
                echo "Zaproponuj rangę recenzenta";
            echo "</th>";
            echo "<th>";
                echo "Zablokuj konto";
            echo "</th>";
            echo "<th>";
                echo "Odblokuj konto";
            echo "</th>";
        echo "</tr>";
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
                echo "<td>";
                    echo $row["ID_User"];
                echo "</td>";
                echo "<td>";
                    echo $row["Username"];
                echo "</td>";
                echo "<td>";
                    echo $row["Email"];
                echo "</td>";
                echo "<td>";
                
                $req = "SELECT COUNT(*) as liczbarecenzji FROM rating WHERE ID_User='$row[ID_User]' AND Comment!=''";
                $res = $conn->query($req);
                $row2 = $res->fetch_array();
                $recenzja=$row2['liczbarecenzji'];
                echo $recenzja;
                
                echo "</td>";
                echo "<td>";
                    echo $row["Hours"];
                echo "</td>";
                echo "<td>";
                    echo $row["Rank"];
                echo "</td>";
                echo "<td>";
                    echo "<button>";
                        echo "Zaproponuj recenzenta";
                    echo "</button>";
                echo "</td>";
                echo "<td>";
                    echo "<form action='ban.php' method='POST'>";
                        echo "<input type='submit' value='Zablokuj $row[Username]' name='block'>";
                    echo "</form>";
                echo "</td>";
                echo "<td>";
                echo "<form action='unban.php' method='POST'>";
                    echo "<input type='submit' value='Odblokuj $row[Username]' name='unblock'>";
                echo "</form>";
                echo "</td>";
            echo "</tr>";
        }
    } 
    else {
        echo "Brak Użytkowników";
    }

    
    echo "</table>";
?>