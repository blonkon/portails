<?php
require_once("ajout.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="FR-fr">
        <title>Portail</title>
        <link rel="stylesheet" href="style.css">
        <script defer src="activePage.js"></script>
        <style>
            form{
                display: grid;
                width: 80%;
                background-color: black;
                border-radius: 10px;
                border: 2px solid #F38712;
                padding-bottom: 5%;
                padding-top: 2%;
                grid-template-columns: 1fr 1fr 1fr 1fr;
            }
            .left-side h1{
                color: white;
                margin-left: 30%;
                font-size: 30px;
            }
            input{
                margin-bottom: 5%;
                margin-left: 5%;
                height: 30px;
                border-radius: 10px;
                background: white;
                border-style: none;
            }
          
            .long:focus{
                background-color: #f3861200;
                color: #FFF;
                
            }
            .court:focus{
                background-color: #f3861200;
                color: #FFF;
            }
            .photo{
                height: 50px;
                width: 60%;
                float: right;
                margin-left: 10%;
                margin-right: 10%;
                margin-top: 2%;
                text-align: center;
                grid-column-start: 4;
                border-radius: 10px;
                cursor: pointer;
            }
            .photo img{
                height: 80px;
                width: 80px;
                border-radius: 10px;

            }
            .long{
                grid-column-start: 1;
                grid-column-end: span 2 ;
                width: 80%;
            }
            .court{
                grid-column-start: 3;
                grid-column-end: span 1;
                width: 80%;
            }
           
            input[type=submit]{
                grid-column-start: 1;
                border-radius: 10px;
                background: #F38712;
                width: 60%;
                color: #FFF;
                font-size: 15px;
                font-family: 'Hind Madurai';
                font-style: normal;
                font-weight: 600;
                line-height: normal;
                margin-left:10% ;
            }
            input[name=prenom]{
                margin-top: 5%;
            }
            .photo1{
                display: none;
            }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <div class="logo"><p>KALANSO</p></div>
                <div class="menu">
                    <a href="./index.php">Accueil</a>
                    <a href="./liste.php">Voir liste</a>
                    <a href="./connexion.php">Se Deconnecter</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="right-side">
                <img src="image/main.png">
            </div>
            <div class="left-side">
                <h1>Inscription</h1>
                <form method="post" enctype="multipart/form-data" action="fiche.php">

                    <input type="text" name="prenom" class="long" placeholder="Prenom">

                    <label  for="picture" class="photo"><img src="image/profile.png" id="image1"></label>
                    <input type="file" class="photo1" id="picture" accept="image/*" >

                    <input type="text" name="nom" class="long" placeholder="Nom">
                    <!-- <input type="text" name="matricule" class="court" placeholder="Matricule"> -->
  
                    <input type="date" name="naissance" class="long" placeholder="Date de naissance">
                    <input type="number" name="age" class="court" placeholder="Age">

                    <input type="number" name="certification" class="long" placeholder="Annee de certification">
                    <input type="number" name="promotion" class="court" placeholder="Promotion">

                    <input type="email" name="email" class="long" placeholder="Email">
                    <input type="number" name="numero" class="court" placeholder="Numero">

                    <br><input type="submit" value="Enregistrer">
                </form>
            </div>
        </main>
        <footer>
            <br><br><br>
            Copyright &copy; 2023
            <br><br><br>
        </footer>
        <script>
            let profile_standard = document.getElementById("image1");
            let profile = document.getElementById("picture");

            profile.onchange = function(){
                profile_standard.src = URL.createObjectURL(profile.files[0]);
            }

        </script>
    </body>
</html>