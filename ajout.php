<?php 
//connexion a la database
require_once("database.php");

//recuperation des donnee
if(
    isset($_POST)&&     !empty($_POST["prenom"])    
                        &&!empty($_POST["nom"])      
                        &&!empty($_POST["age"])      
                        &&!empty($_POST["naissance"])      
                        &&!empty($_POST["promotion"])
                        &&!empty($_POST["certification"])
                        &&!empty($_POST["email"])
                        &&!empty($_POST["numero"])
){

//requete 
$sql = "INSERT INTO apprenant(nom,prenom,age,naissance,email,tel,promotion,certification) 
VALUES
(:nom,  :prenom,    :age,   :naissance,    :email, :tel,   :promotion,    :certification)"; 

//preparons la requete
$requete = $db->prepare($sql);

//place a la definition des variable
$prenom = htmlspecialchars($_POST["prenom"]);
$nom = htmlspecialchars($_POST["nom"]);      
$age = htmlspecialchars($_POST["age"]);      
$naissance = htmlspecialchars($_POST["naissance"]);    
$promotion = htmlspecialchars($_POST["promotion"]);
$certification = htmlspecialchars($_POST["certification"]);
$email = htmlspecialchars($_POST["email"]);
$tel = htmlspecialchars($_POST["numero"]);

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
//Status ici indique si l'ajout a ete effectuer
 $status=1;
}
else{
    $status=0;
}

?>
