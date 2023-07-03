<?php 

define("DBHOST","localhost:3310");
define("DBUSER","root");
define("DBPASS","");
define("DBNAME","test2");

//dsn de connexion
$dns = "mysql:dbname=".DBNAME.";host=".DBHOST;

//se connecter a la database
try {
    $db = new PDO($dns,DBUSER,DBPASS);
    echo "Connecter avec succes";
} catch (PDOException $e) {
die("Erreur:".$e->getMessage());
}

?>