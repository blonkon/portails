<?php 

    if (isset($_POST["pseudo"]) && isset($_POST["password"])) {
    // connexion a la database
    require_once ("database.php");

    // recuperation des valeur de login
    $pseudo = htmlspecialchars($_POST["pseudo"]);
    $password = htmlspecialchars($_POST["password"]);

    $sql = "select id from admin where pseudo=:pseudo AND mot_de_passe=:password";

    $requete = $db->prepare($sql);

    $requete->bindParam(":pseudo",$pseudo,PDO::PARAM_STR);
    $requete->bindParam(":password",$password,PDO::PARAM_STR);

    $requete->execute();

    $resulte = $requete->fetchAll();
    //  var_dump($resulte);
    // Si les information sont presente dans la base alors
     if(!empty($resulte)) {
        session_start();
        $_SESSION["admin"]=[
            "pseudo"=>$pseudo,
            "password"=>$password
        ];
        header("location: ./admin.php");
        exit;
     }
     else {
        // indique si la connexion a echoue 
        $etat = 0;
        header("location: ./connexion.php");
        exit;
     }
}
else{
    $etat = 1;
    include_once("connexion.php");
}
?>