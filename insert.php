<?php
require('config.php');
$sql = "INSERT INTO `etudiants` (`id`, `fname`, `lname`, `email`, `tele`) VALUES (NULL, 'samasi', 'karim', 'email@gmail.com', '065654565646')";
mysqli_query($db,$sql) or die("Erreur query");
echo "Etudiant est bien enregistrer";
mysqli_close($db);

?>