<!-- pour ajouter les information d'un eleemnt dans la base de donnne -->
<?php 
//connexion a la database
require_once("database.php");

//images parti
$upload = 0;
if (!empty($_FILES)) {
    $nomfichier = $_FILES["photo"]["name"];
    $tmpfichier = $_FILES["photo"]["tmp_name"];
    $taille = $_FILES['photo']['size'];

    $type = explode(".",$nomfichier)[1];

    $correct = array("png", 'jpg',"svg");
    //generation d'un nom unique pour notre photo
    $newname = md5(uniqid());
    $dossier = "/files/$newname.$type";

    if (in_array(strtolower($type),$correct) && ($taille >1024*1024)) {
        if (move_uploaded_file($tmpfichier, $dossier)) {
            chmod($doc, 0644);
            $upload = 1;}
    }
    }

//recuperation des donnee
if(
    isset($_POST)&&     !empty($_POST["prenom"])    
                        &&!empty($_POST["nom"])      
                        &&!empty($_POST["age"])      
                        &&!empty($_POST["naissance"])      
                        &&!empty($_POST["promotion"])
                        &&!empty($_POST["certification"])
                        &&!empty($_POST["email"])
                        &&!empty($_POST["numero"]
                        &&!$upload==1)
){


//requete 
$sql = "INSERT INTO apprenant(nom,prenom,age,naissance,email,tel,promotion,certification,images) 
VALUES
(:nom,  :prenom,    :age,   :naissance,    :email, :tel,   :promotion,    :certification,:images)"; 

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
$images=$newname.$type;

// Injection de parametre
$requete->bindParam(":nom",$nom,PDO::PARAM_STR);
$requete->bindParam(":prenom",$prenom,PDO::PARAM_STR);
$requete->bindParam(":age",$age,PDO::PARAM_INT);
$requete->bindParam(":naissance",$naissance,PDO::PARAM_STR);
$requete->bindParam(":email",$email,PDO::PARAM_STR);
$requete->bindParam(":tel",$tel,PDO::PARAM_INT);
$requete->bindParam(":promotion",$promotion,PDO::PARAM_INT);
$requete->bindParam(":certification",$certification,PDO::PARAM_STR);
$requete->bindParam(":images",$images,PDO::PARAM_STR);

//on execute les requetes pour ajouter
 $requete->execute();

 $status=1;
}
else{
    $status=0;
}

?>
