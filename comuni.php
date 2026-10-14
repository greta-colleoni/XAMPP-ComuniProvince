<!DOCTYPE html>
<html>
    <head>
        <title>Comuni e porovince</title>
    </head>
<body>
<?php
include "conn-local.php";

$sql = "SELECT  `CAP`,  `Nome`,  `Provincia`, `Abitanti`
        FROM `comune_provincia`.`comune` LIMIT 1000;";
$result = $conn->query($sql);
?>

<table>
    <caption>Elenco dei comuni</caption>
    <thead>
        <tr>
            <th>Azioni</th>
            <th>CAP</th>
            <th>Nome</th>
            <th>Provincia</th>
            <th>Abitanti</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {  
                    echo "<tr>\n";
                    echo "<td><a href=\"comune.php?CAP=". $row["CAP"]. "&Nome=". $row["Nome"]."\">Modifica</a>" . $row["CAP"]. "</td>\n";
                    echo "<td>" . $row["CAP"]. "</td>\n";
                    echo "<td>" . $row["Nome"]. "</td>\n";
                    echo "<td>" . $row["Provincia"]. "</td>\n";
                    echo "<td>" . $row["Abitanti"]. "</td>\n";
                    echo "</tr>\n";
                }
            } else {
                echo "Nessun comune";
            }
        ?>
    </tbody>
</table>

<?php
  $conn->close();
?>

<a href="index.php">Torna indietro</a>
</body>
</html>