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
                grid-template-columns: 1fr 1fr 1fr 1fr;
            }
            .left-side{
                grid-column-start: 3;
                grid-column-end: span 2;
                margin-top: 0;
            }
            .left-side h1{
                color: white;
                font-size: 30px;
                margin-left: 30%;

            }
            .left-side{
                margin-top: 20%;
            }
            .box{
                width: 80%;
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
                color: black;
                background-color: white;
                border: 1px solid #F38712;
                padding: 3%;
                border-radius: 20px;
            }
            .value{
                grid-column-start: 3;
                grid-column-end: span 3;
                font-size: 100px;
                letter-spacing: 1px;
            }
            .items{
                font-weight: bold;
            }             
            button{
                cursor: pointer;
                text-align: center;
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
                font-size: 20px;
                letter-spacing: normal;
                font-family:'Montserrat';
            }
            .value > p{
                font-size: 20px;
                letter-spacing: normal;
                font-family:'Montserrat';

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
                    <a href="./deconnexion.php">Deconnecter</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="right-side">
                <img src="image/main.png">
            </div>
            <div class="left-side">
                <h1>Information</h1>
                    <div  class="box">
                    <!-- Affichage de la liste  -->
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
                        <p class="value1">12332KD</p>
                        <p class="value2">Ibrahim</p>
                        <p class="value3">Diakite</p>
                        <p class="value4">24</p>
                        <p class="value5">2/22/2002</p>
                        <p class="value6">77890965</p>
                        <p class="value7">Diakkkgz@gmail.com</p>
                        <p class="value8">Promotion 3</p>
                        <p class="value9">02/12/2023</p>
                    </div><br><br>
                    <div class="button-div"><a href="fiche.php"><button>Modifier</button></a></div>
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
    </body>
</html>