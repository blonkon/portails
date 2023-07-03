<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="FR-fr">
        <title>Portail</title>
        <link rel="stylesheet" href="style.css">
        <script defer src="activePage.js"></script>
        <style>
            .left-side h1{
                color: white;
                font-size: 30px;
            }
            .liste{
                height: 500px;
                width: 70%;
                border-radius: 10px;
                border: 1px solid rgba(255, 255, 255, 0.50);
                background: rgba(223, 222, 222, 0.19);
                backdrop-filter: blur(15px);
                padding: 10px;
                overflow:auto;
            }
            .li{
                list-style: none;
                border-radius: 10px;
                background: rgba(0, 0, 0, 0.39);
                height: 15%;
                display: grid;
                /* padding: 2px; */
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
                margin-top: 5%;
            }
            .li:hover{
                background-color: white;
                color: black;
            }
            .li img {
                margin-left:15%;
                margin-top:15% 
            }
            .span1{
                margin-top:2%;
                line-height: 25px;
                grid-column-start: 3;
                grid-column-end: span 3;
            }
            .infos{
                cursor: pointer;
            }
            .admin_function{
                grid-column-start: 6;
                display: grid;
                grid-template-columns: 1fr 1fr;
                border-width: 0px;
                margin:0px ;
                padding: 0px;
            }
            .admin_function div{
                padding-top: 40%;
            }
            .div1{
                margin:0px ;
                padding: 0px;
                background-color: #F38712;
            }
            .div1 img,.div2 img{
                padding-left: 4%;
                padding-right: 4%;
            }
            .div2{
                margin:0px ;
                padding: 0px;
                background-color: #524C4C;
                border-radius: 0 10px 10px 0;
            }
            .button-div{
                display: grid;
                grid-template-columns: 1fr 1fr 1fr 1fr;
            }
            .button-div a{
                grid-column-start: 4;
                
            }
            button{
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
        </style>
    </head>
    <body>
        <header>
            <nav>
                <div class="logo"><p>KALANSO</p></div>
                <div class="menu">
                    <a href="./index.php">Accueil</a>
                    <a href="./liste.php">Voir liste</a>
                    <a href="./connexion.php">Se connecter</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="right-side">
                <img src="image/main.png">
            </div>
            <div class="left-side">
                <h1>Liste des personnes certifie</h1>
                    <ul  class="liste">
                    <?php 
                        $page = 1;
                        include_once("databaseliste.php");
                    ?>
                    </ul>
        </main>
        <footer>
            <br><br><br>
            Copyright &copy; 2023
            <br><br><br>
        </footer>
    </body>
</html>