<?php if(!isset($_SESSION)) 
       { 
           session_start(); 
       }
    if (!isset($_SESSION["admin"])) {
        header("location: index.php");
        exit;
    }   ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="FR-fr">
        <title>Portail</title>
        <link rel="stylesheet" href="style.css">
        <script defer src="activePage.js"></script>
        <style>
            main{
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            }
            .left-side{
                grid-column-start: 3;
                grid-column-end: span 3;
                margin-top: 0;
            }
            .left-side h1{
                color: white;
                font-size: 30px;
                margin-left: 34%;

            }
            .left-side{
                margin-top: 20%;
            }
            .box{
                width: 85%;
                color: black;
                background-color: white;
                border: 1px solid #F38712;
                padding: 4%;
                border-radius: 20px;
            }
            .box-content{
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr ;
            }
            .value{
                grid-column-start: 5;
                grid-column-end: span 4;
                font-size: 100px;
                letter-spacing: 1px;
            }
            .items{
                grid-column-start: 2;
                font-weight: bold;
            }
            .button-div{
                width: 100%;
            }          
            .button-div a{
               margin-left: 44%;
            }
            button{
                cursor: pointer;
                width: auto;
                padding: 5px;
                height: 30px;
                border-radius: 10px;
                background: #F38712;
                color: #FFF;
                font-size: 15px;
                font-family: 'Hind Madurai';
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                margin: 0px;
            }
            .infos{
                cursor: pointer;
            }
            .items > p{
                font-size: 15px;
                letter-spacing: normal;
                font-family:'Montserrat';
                padding-bottom: 15px;
            }
            .value > p{
                font-size: 15px;
                letter-spacing: normal;
                font-family:'Montserrat';
                padding-bottom: 15px;
            }
            .profile{
                width: 100%;
                margin-bottom: 30px;
            }
            .profile img{
                border: 1px solid #F38712;
                border-radius: 50%;
                margin-left: 40%;
                width: 100px;
                cursor: pointer;
                height: 100px;
            }
            #container{
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background-color: rgba(20, 20, 20, 0.9);
                text-align: center;
                display: none;
            }
            #fullscreen{
                padding: 2%;
                max-width: 98%;
                max-height: 98%;
                cursor: pointer;
            }

        </style>
    </head>
    <body>
        <header>
            <nav>
                   <!-- menu pour admin  -->

                   <?php
                    // session_start();
                    $id = $_POST['id'];
                     // connexion a la database
                    require_once("database.php");
                    //requete sql
                    $sql="Select * from apprenant where id=:id";

                    $requete = $db->prepare($sql);

                    //place a la definition des variable
                    $prenom = htmlspecialchars($id);
                    $requete->bindParam(":id",$id,PDO::PARAM_INT);

                    //on execute les requetes pour ajouter
                    $requete->execute();


                    //recuperer les donnees 
                    $apprenants = $requete->fetchAll();
                    // var_dump($apprenants);


                    if (isset($_SESSION["admin"])){
                       echo "<div class=\"logo\"><p>KALANSO</p></div>
                        <div class=\"menu\">
                            <a href=\"./index.php\">Accueil</a>
                            <a href=\"./admin.php\">Voir liste</a>
                            <a href=\"./deconnexion.php\">Deconnecter</a>
                        </div>";   
                    }
                    else {
                        echo "
                        <div class=\"logo\"><p>KALANSO</p></div>
                        <div class=\"menu\">
                            <a href=\"./index.php\">Accueil</a>
                            <a href=\"liste.php\">Voir liste</a>
                            <a href=\"./connexion.php\">Se connecter</a>
                        </div>";
                    }
                ?>
            </nav>
        </header>
        <main>
            <div class="right-side">
                <img src="image/main.png">
            </div>
            <div class="left-side" style="margin-top: 6%;">
                <h1>Information</h1>
                    <div  class="box">
                        <div class="profile">
                        <?php foreach($apprenants as $apprenant):  ?>
                            
                            <!-- <div> -->

                                <img src=<?= "files/".$apprenant["images"]?> onclick="plein(this.src)">
                            <!-- </div> -->
                        </div>
                    <div class="box-content">
                        <div class="items">
                            <p class="items1">Matricule</p>
                            <p class="items2">Prenom</p>
                            <p class="items3">Nom</p>
                            <p class="items4">Age</p>
                            <p class="items5">Naissance</p>
                            <p class="items6">Numero</p>
                            <p class="items7">Email</p>
                            <p class="items8">Promotion</p>
                            <p class="items9">Certification</p>
                        </div>
                
                        <div class="value">
                            <p class="value1">Indisponible</p>
                            <p class="value2"><?= strip_tags($apprenant["prenom"]) ?></p>
                            <p class="value3"><?= strip_tags($apprenant["nom"]) ?></p>
                            <p class="value4"><?= strip_tags($apprenant["age"]) ?></p>
                            <p class="value5"><?= strip_tags($apprenant["naissance"]) ?></p>
                            <p class="value6"><?= strip_tags($apprenant["tel"]) ?></p>
                            <p class="value7"><?= strip_tags($apprenant["email"]) ?></p>
                            <p class="value8">Promotion <?= strip_tags($apprenant["promotion"]) ?></p>
                            <p class="value9"><?= strip_tags($apprenant["certification"]) ?></p>
                        </div>
                    </div>
                    <?php endforeach ?>
                    <div class="button-div"><a href="#"><button>Modifier</button></a></div>
                        <!--        Plein ecran gestion              -->
                        <div id="container" >
                            <img id="fullscreen" onclick="fermer()">
                        </div>
                        <?php 
                        $page = 2;
                        // include_once("databaseliste.php");
                        ?>

        </div>
        </main>
        <footer>
            <br><br><br>
            Copyright &copy; 2023
            <br><br><br>
        </footer>
        <script>
            function plein(lien){
                document.getElementById("fullscreen").src = lien;
                document.getElementById("container").style.display = "block";
            }
            function fermer(){
                document.getElementById("container").style.display = "none";
            }
        </script>
    </body>
</html>