
<?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("location: index.php");
    exit;
}
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
              #container{
                position: absolute;
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                top: 0;
                left: 0;
                background-color: rgba(20, 20, 20, 0.9);
            }
            #popup h1{
                color: black;
                margin: 0;
                padding: 0;
            }
            #popup{
                margin-top: 15%;
                margin-left: 40%;
                padding: 1%;
                width: 300px;
                height: 200px;
                border-radius: 20px;
                color: black;
                background-color: #FFF;
                text-align: center;
                font-size: xx-small;

            }
            #popup p{
                text-align: center;
                padding: 0;
                font-size: medium;
                margin: 0px;
                letter-spacing: normal;
                margin-top: 4%;
            }
            #popup img{
                width: 64px;
                height: 64px;
            }
            #button{
                width: 100%;
                background-color: #F38712;
                border-radius: 5px;
                font-size: 12px;
                color: #FFF;
                font-weight: bold;
                cursor: pointer;
            }
            /* #popup button{
                font-size: 15px;
                background-color: #F38712;
                cursor: pointer;
                width: 45px;
                height: 45px;
            } */
            form{
                display: grid;
                width: 80%;
                background-color: black;
                border-radius: 10px;
                border: 2px solid #F38712;
                padding-bottom: 5%;
                padding-right: 5%;
                padding-top: 2%;
                grid-template-columns: 1fr 1fr 1fr 1fr;
            }
            .left-side h1, .left-side h3{
                color: white;
                margin-left: 30%;
                font-size: 30px;
            }
            input{
                height: 30px;
                border-radius: 10px;
                background: white;
                border-style: none;
                width: 80%;
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
                height: fit-content;
                width: 80%;
                float: right;
                margin-top: 2%;
                text-align: center;
                grid-column-start: 4;
                grid-row-end: span 2;
                border-radius: 10px;
                cursor: pointer;
            }
            .photo img{
                height: 120PX;
                width: 140PX;
                border-radius: 10px;

            }
            .long{
                grid-column-start: 1;
                margin-bottom: 5%;
                margin-left: 5%;
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
                cursor: pointer;
            }
            label[for=prenom]{
                margin-top: 5%;
            }
            input[id=email]{
                margin-bottom: 5%;
            }
            label{
                font-weight:bold;
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
                    <a href="./admin.php">Voir liste</a>
                    <a href="./deconnexion.php">Deconnecter</a>
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
                
                    
                <?php if($status==1):?>
                    <!--   Popup               -->
                    <div id="container" style="font-size: 5px;">
                        <div id="popup">
                            <img src="image/true.svg">
                            <br>
                            <h1>Reussi</h1>
                            <p style="margin-left:25%;margin-top:5%;">Vos donnees ont ete enregistrer</p>
                            <p id="button" style="font-size: 25px;margin-top:5%;" onclick="bien()">ok</p>
                            <script>
                                function bien(){
                                    document.getElementById("container").style.display = "none";
                                }
                            </script>
                        </div>
                        </div>
                        <!--       fin popup           -->
                <?php endif?>

                    <div class="long">
                    <label  for="prenom">Prenom</label><br>
                    <input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
                    </div>

                    <label  for="picture" class="photo"><img src="image/profile.png" id="image1"></label>
                    <input type="file" class="photo1" id="picture" accept="image/*" >

                    <div class="long">
                    <label  for="nom">Nom</label><br>
                    <input type="text" name="nom" id="nom" placeholder="Nom" required>
                    </div>
                    <!-- <input type="text" name="matricule" class="court" placeholder="Matricule"> -->
                    <div class="long">
                    <label  for="naissance">Date de naissance</label><br>
                    <input type="date" name="naissance" id="naissance" required>
                    </div>
                    <div class="court">
                        <label  for="age">Age</label><br>
                        <input type="number" name="age" id="age" placeholder="Age" required>
                    </div>
                    <div class="long" >
                    <label  for="certification">Date de certification</label><br>
                        <input type="date" name="certification" id="certification" required>
                    </div>
                    <div class="court">
                        <label for="promotion">Promotion</label>
                        <input type="number" name="promotion" id="promotion" placeholder="Promotion" required>
                    </div>
                    <div class="long">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="court">
                        <label for="numero">Telephone</label>
                        <input type="number" name="numero" id="numero" placeholder="Numero" required>
                    </div>

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