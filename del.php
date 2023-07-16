<?php
// la variable page est de savoir si la requete viens d'une page de mon site et non de l'url sinon on retourne chez l'index  
        if(!isset($_SESSION)) 
       { 
           session_start(); 
       }
    if (!isset($_SESSION["admin"])) {
        header("location: index.php");
        exit;
    }   
    // connexion a la database
    require_once("database.php");
    $id = $_POST["elementid"];
    //requete sql
    $sql = "select images from apprenant where id = $id";
    //execute la requete
    //effacons le fichier sur le serveur
    $requete = $db->query($sql);
    $fichier = $requete->fetch();
    $img = $fichier["images"];
    unlink("files/$img");


    $sql="DELETE FROM `apprenant` WHERE `apprenant`.`id` = $id";

    //execute la requete
    $requete = $db->query($sql);

    // //recuperer les donnees 
    // $apprenants = $requete->fetchAll();
    header("location:liste.php");
?>