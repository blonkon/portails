<?php 

define("DBHOST","localhost:3310");
define("DBUSER","root");
define("DBPASS","");
define("DBNAME","portail");

//dsn de connexion
$dns = "mysql:dbname=".DBNAME.";host=".DBHOST;


//se connecter a la database
try {
    $db = new PDO($dns,DBUSER,DBPASS);

    //Utilisation de l'uft 8 pour pour les transfere
    $db->exec("SET NAMES utf8");

    //definir le fetch par defaut en fetch_assoc
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);


    } catch (PDOException $e) {
    die("Erreur:".$e->getMessage());
    }



?>