<?php
$db=mysqli_connect('localhost','root','') or die("Erreur de la connexion");
mysqli_select_db($db,"miage");
echo ("La connexion est bien ....");

?>

