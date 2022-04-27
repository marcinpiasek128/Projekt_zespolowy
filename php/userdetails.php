<?php
    require("connect.php");

    echo "<img src='../pictures/logo.png' class='avatar'>";

    $x = $_SESSION['Username'];       
    $sql = "SELECT * FROM data WHERE Username='$x'";
    $result = $conn->query($sql);

    echo "<table class='table'>";
        echo "<tr>";
            echo "<th>";
                echo "Liczba godzin";
            echo "</th>";
            echo "<th>";
                echo "Aktualna rola";
            echo "</th>";
            echo "<th>";
                echo "Możesz zostać recenzentem";
            echo "</th>";
        echo "</tr>";
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
                echo "<td>";
                    echo $row["Hours"];
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