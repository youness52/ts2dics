<?php

require('config.php');
$sql=$conn->prepare("INSERT INTO `etudiants` (`id`, `fname`, `lname`, `email`, `tele`) 
VALUES (NULL, '1245', 'karim', 'email@gmail.com', '065654565646')");
$sql->execute();
echo "Etudiant est bien enregistrer ?";
$sql=null;
$conn=null;

?>