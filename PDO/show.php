<?php

require('config.php');
$sql=$conn->query("SELECT * FROM `etudiants`");
while ($row=$sql->fetch()) {
    echo $row[0] . "    " . $row[1]. "<br>";
}
$conn=null;
 
?>


<?php
require('config.php');
$sql=$conn->prepare("SELECT * FROM `etudiants`");
$sql->execute();
while ($row=$sql->fetch()) {
    echo $row[0] . "    " . $row[1]. "<br>";
}
$conn=null;

?>