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
                width: 50%;
                border-radius: 10px;
                border: 1px solid rgba(255, 255, 255, 0.50);
                background: rgba(223, 222, 222, 0.19);
                backdrop-filter: blur(15px);
                padding: 10px;
                overflow:scroll;
            }
            .li{
                list-style: none;
                border-radius: 10px;
                background: rgba(0, 0, 0, 0.39);
                height: 59px;
                display: grid;
                padding: 2px;
                grid-template-columns: 1fr 1fr 1fr;
                grid-template-rows: 1fr 1fr;
                margin-top: 5%;
            }
            .li:hover{
                background-color: white;
                color: black;
            }
            .li img {
                grid-row-start: span 2;
                margin-top:8% ;
                margin-left: 8%;
            }
            .li span{
                grid-row-start: span 2;
                margin-top:8% ;
            }
            .infos{
                cursor: pointer;
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
                        <a href="" class="infos">
                            <li class="li">
                                <img src="image/avatar.png">
                                <span>
                                <b>Steve Snowden</b>
                                <i>Promotion 2</i>
                                </span>
                            </li>
                    </a> 
                    <a href="" class="infos">
                        <li class="li">
                            <img src="image/avatar.png">
                            <span>
                            <b>Steve Snowden</b>
                            <i>Promotion 2</i>
                            </span>
                        </li>
                    </a>
                    <a href="" class="infos">
                        <li class="li">
                            <img src="image/avatar.png">
                            <span>
                            <b>Steve Snowden</b>
                            <i>Promotion 2</i>
                            </span>
                        </li>
                    </a>                    <a href="" class="infos">
                        <li class="li">
                            <img src="image/avatar.png">
                            <span>
                            <b>Steve Snowden</b>
                            <i>Promotion 2</i>
                            </span>
                        </li>
                    </a>                    <a href="" class="infos">
                        <li class="li">
                            <img src="image/avatar.png">
                            <span>
                            <b>Steve Snowden</b>
                            <i>Promotion 2</i>
                            </span>
                        </li>
                    </a>                    <a href="" class="infos">
                        <li class="li">
                            <img src="image/avatar.png">
                            <span>
                            <b>Steve Snowden</b>
                            <i>Promotion 2</i>
                            </span>
                        </li>
                    </a>                    <a href="" class="infos">
                        <li class="li">
                            <img src="image/avatar.png">
                            <span>
                            <b>Steve Snowden</b>
                            <i>Promotion 2</i>
                            </span>
                        </li>
                    </a>
                    </ul>
        </main>
        <footer>
            <br><br><br>
            Copyright &copy; 2023
            <br><br><br>
        </footer>
    </body>
</html>