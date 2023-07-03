<?php 
//connexion a la database
require_once("database.php");

//requete 
$sql = "INSERT INTO `apprenant(nom,prenom,age,naissance,email,tel,promotion,certification)` 
VALUES
(:nom,  :prenom,    :age,   :naissance,    :email, :tel,   :promotion,    :certification)"; 

//preparons la requete
$requete = $db->prepare($sql);

// Injection de parametre
$requete->bindParam(":nom",$nom,PDO::PARAM_STR);
$requete->bindParam(":prenom",$prenom,PDO::PARAM_STR);
$requete->bindParam(":age",$age,PDO::PARAM_INT);
$requete->bindParam(":naissance",$naissance,PDO::PARAM_STR);
$requete->bindParam(":email",$email,PDO::PARAM_STR);
$requete->bindParam(":tel",$tel,PDO::PARAM_INT);
$requete->bindParam(":promotion",$promotion,PDO::PARAM_INT);
$requete->bindParam(":certification",$certification,PDO::PARAM_STR);

//on execute les requetes pour ajouter
 $requete->execute();

?>
