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
                /* padding: 2px; */
                grid-template-columns: 1fr 1fr 1fr 1fr 1fr ;
                grid-template-rows: 1fr 1fr;
                margin-top: 5%;
            }
            .li img {
                grid-row-start: span 2;
                margin-top:8% ;
                margin-left: 8%;
            }
            .span1{
                /* grid-row-start: span 2; */
                grid-column-end: span 3;
                padding-left: 4%;
                margin-top:4% ;
            }
            .admin_function{
                grid-row-end: span 2;
                grid-column-start: 5;
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
                    <a href="./connexion.php">Se Deconnecter</a>
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
                        <div class="button-div"><a href="fiche.php"><button>Ajouter  <img src="image/plus.png"></button></a></div>
                        <li class="li">
                            <img src="image/avatar.png">
                            <span class="span1">
                            <b>Steve Snowden</b><br>
                            <i>Promotion 2</i>
                            </span>
                            <span class="admin_function">
                                <div class="div1"><img src="image/modify.png"></div>
                                <div class="div2"><img src="image/delete.png"></div>
                            </span>
                        </li>

                        <li class="li">
                            <img src="image/avatar.png">
                            <span class="span1">
                            <b>Steve Snowden</b><br>
                            <i>Promotion 2</i>
                            </span>
                            <span class="admin_function">
                                <div class="div1"><img src="image/modify.png"></div>
                                <div class="div2"><img src="image/delete.png"></div>
                            </span>
                        </li>
                        <li class="li">
                            <img src="image/avatar.png">
                            <span class="span1">
                            <b>Steve Snowden</b><br>
                            <i>Promotion 2</i>
                            </span>
                            <span class="admin_function">
                                <div class="div1"><img src="image/modify.png"></div>
                                <div class="div2"><img src="image/delete.png"></div>
                            </span>
                        </li>
                        <li class="li">
                            <img src="image/avatar.png">
                            <span class="span1">
                            <b>Steve Snowden</b><br>
                            <i>Promotion 2</i>
                            </span>
                            <span class="admin_function">
                                <div class="div1"><img src="image/modify.png"></div>
                                <div class="div2"><img src="image/delete.png"></div>
                            </span>
                        </li>
                        <li class="li">
                            <img src="image/avatar.png">
                            <span class="span1">
                            <b>Steve Snowden</b><br>
                            <i>Promotion 2</i>
                            </span>
                            <span class="admin_function">
                                <div class="div1"><img src="image/modify.png"></div>
                                <div class="div2"><img src="image/delete.png"></div>
                            </span>
                        </li>
                        <li class="li">
                            <img src="image/avatar.png">
                            <span class="span1">
                            <b>Steve Snowden</b><br>
                            <i>Promotion 2</i>
                            </span>
                            <span class="admin_function">
                                <div class="div1"><img src="image/modify.png"></div>
                                <div class="div2"><img src="image/delete.png"></div>
                            </span>
                        </li>
                        <li class="li">
                            <img src="image/avatar.png">
                            <span class="span1">
                            <b>Steve Snowden</b><br>
                            <i>Promotion 2</i>
                            </span>
                            <span class="admin_function">
                                <div class="div1"><img src="image/modify.png"></div>
                                <div class="div2"><img src="image/delete.png"></div>
                            </span>
                        </li>
                        <li class="li">
                            <img src="image/avatar.png">
                            <span class="span1">
                            <b>Steve Snowden</b><br>
                            <i>Promotion 2</i>
                            </span>
                            <span class="admin_function">
                                <div class="div1"><img src="image/modify.png"></div>
                                <div class="div2"><img src="image/delete.png"></div>
                            </span>
                        </li>
                        <li class="li">
                            <img src="image/avatar.png">
                            <span class="span1">
                            <b>Steve Snowden</b><br>
                            <i>Promotion 2</i>
                            </span>
                            <span class="admin_function">
                                <div class="div1"><img src="image/modify.png"></div>
                                <div class="div2"><img src="image/delete.png"></div>
                            </span>
                        </li>
                        <li class="li">
                            <img src="image/avatar.png">
                            <span class="span1">
                            <b>Steve Snowden</b><br>
                            <i>Promotion 2</i>
                            </span>
                            <span class="admin_function">
                                <div class="div1"><img src="image/modify.png"></div>
                                <div class="div2"><img src="image/delete.png"></div>
                            </span>
                        </li>
                        <li class="li">
                            <img src="image/avatar.png">
                            <span class="span1">
                            <b>Steve Snowden</b><br>
                            <i>Promotion 2</i>
                            </span>
                            <span class="admin_function">
                                <div class="div1"><img src="image/modify.png"></div>
                                <div class="div2"><img src="image/delete.png"></div>
                            </span>
                        </li>

                    </ul>
        </main>
        <footer>
            <br><br><br>
            Copyright &copy; 2023
            <br><br><br>
        </footer>
    </body>
</html>