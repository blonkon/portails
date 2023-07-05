<?php  
    require_once("verification.php");
    // var_dump($etat);
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
            input{
                color: #FFF;
            }
            form{
                width: 50%;
                /* height: 329px;  */
                background: rgba(223, 222, 222, 0.19);
                backdrop-filter: blur(15px);
                border-radius: 10px;
                border: 2px solid #F38712;
                padding-bottom: 5%;
                padding-top: 5%;
            }
            .left-side h1{
                color: white;
                font-size: 30px;
            }
            input{
                width: 60%;
                margin-bottom: 5%;
                margin-left: 20%;
                height: 30px;
                border-radius: 10px;
                background: #4B4949;
                border-style: none;
            }
            label{
                margin-left: 20%;
                color: #FFF;
                font-size: 15px;
                font-family: 'Hind Madurai';
                font-style: normal;
                font-weight: 600;
                line-height: normal;
            }
            input[type=submit]{
                border-radius: 10px;
                background: #F38712;
                width: 25%;
                color: #FFF;
                font-size: 15px;
                font-family: 'Hind Madurai';
                font-style: normal;
                font-weight: 600;
                line-height: normal;
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
                <h1>Connexion</h1>
                <form method="post" action="./connexion.php">
                    <label class="first" for="p">Pseudo</label><br>
                    <input type="text" name="pseudo" id="p" required><br>
                    <label for="m">Mot de passe</label><br>
                    <input type="password" name="password" id="m" required><br>
                    <input type="submit" value="Connecter">
                </form>
            </div>
        </main>
        <footer>
            <br><br><br>
            Copyright &copy; 2023
            <br><br><br> 
        </footer>
    </body>
</html>