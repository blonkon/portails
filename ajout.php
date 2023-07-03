<?php include_once("database.php");
$sql = "select * from `personne`"; 
$requete = $db->query($sql);
$user = $requete->fetch();
var_dump($user);
?>
