<!DOCTYPE html>
<html>
    <head>
        <title>Comuni e porovince</title>
    </head>
<body>
<?php
include "conn-local.php";

$sql = "SELECT  `CAP`,  `Nome`,  `Provincia`, `Abitanti`
        FROM `comune_provincia`.`comune`
        WHERE `CAP` = '" . $_REQUEST['CAP'] . "' AND `Nome` = '" . $_REQUEST['Nome'] . "'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<form>
  <label>CAP</label>
  <?php echo "<input type=\"text\" name=\"CAP\" value=\"" . $row["CAP"] . "\">" ?>
  <br>
  <label>Nome</label>
  <?php echo "<input type=\"text\" name=\"Nome\" value=\"" . $row["Nome"] . "\">" ?>  
  <br>
  <label>Provincia</label>
  <?php echo "<input type=\"text\" name=\"Nome\" value=\"" . $row["Provincia"] . "\">" ?>   
  <br>
  <label>Abitanti</label>
  <?php echo "<input type=\"number\" name=\"Nome\" value=\"" . $row["Abitanti"] . "\">" ?>    
</form>

<?php
  $conn->close();
?>

<a href="index.php">Torna indietro</a>
</body>
</html>