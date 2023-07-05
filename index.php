<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta lang="FR-fr">
        <title>Portail</title>
        <link rel="stylesheet" href="style.css">
        <script defer src="activePage.js"></script>
    </head>
    <body>
        <header>
            <nav>
                <div class="logo"><p>KALANSO</p></div>
                <div class="menu">
                    <a href="./index.php">Accueil</a>
                    <a href="liste.php">Voir liste</a>
                    <a href="./connexion.php">Se connecter</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="right-side">
                <img src="image/main.png">
            </div>
            <div class="left-side">
                <h1>ODK CERTIFICATION</h1>
                <p>
                    Ici vous verrez la liste de toutes les personnes certifie chez ODK.
                    Etes vous un visiteur ou menbres d'ODK cliquez ci dessous
                </p>
                <a href="liste.php"><button>visiteur</button></a>
                <a href="connexion.php"><button class="membre">Membres</button></a>
            </div>
        </main>
        <footer>
            <br><br><br>
            Copyright &copy; 2023
            <br><br><br>
        </footer>
    </body>
</html>