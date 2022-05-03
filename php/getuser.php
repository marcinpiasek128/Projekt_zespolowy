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
                    echo $row["rank_role"];
                echo "</td>";
                echo "<td>";
                    if($row["rank_role"] == "Recenzent")
                    {
                    echo "<form action='cancel_rank.php' method='POST'>";
                        echo "<input value='$row[ID_User]' name='cancel_rank' hidden/>";
                        echo "<input type='submit' value='Cofnij rangę'>";
                    echo "</form>";
                    }
                    else
                    {
                        if($row["agreed"] == "0")
                        {
                            echo "Propozycja wysłana";
                        }
                        else if ($row["agreed"] == "")
                        {
                            echo "<form action='suggest.php' method='POST'>";
                                echo "<input value='$row[ID_User]' name='suggest_rank' hidden/>";
                                echo "<input type='submit' value='Zaproponuj rangę'>";
                            echo "</form>";
                        }
                    }
                echo "</td>";
                echo "<td>";
                    echo "<form action='ban.php' method='POST'>";
                        echo "<input value='$row[ID_User]' name='block' hidden/>";
                        echo "<input type='submit' value='Zablokuj $row[Username]'>";
                    echo "</form>";
                echo "</td>";
                echo "<td>";
                echo "<form action='unban.php' method='POST'>";
                    echo "<input value='$row[ID_User]' name='unblock' hidden/>";
                    echo "<input type='submit' value='Odblokuj $row[Username]' >";
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