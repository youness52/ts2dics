<table border>
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
    </tr>
<?php
require('config.php');
$sql = "SELECT * FROM `etudiants`";
$result=mysqli_query($db,$sql) or die("Erreur query");
while ($row=mysqli_fetch_array($result)) {
    ?>
   
   <tr>
        <td><?php echo $row[0] ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
    </tr>

   <?php
}
mysqli_close($db);

?>
</table>