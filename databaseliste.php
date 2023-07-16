<?php
// la variable page est de savoir si la requete viens d'une page de mon site et non de l'url sinon on retourne chez l'index  
    if (!isset($page)) {
        if(!isset($_SESSION)) 
       { 
           session_start(); 
       }
    if (!isset($_SESSION["admin"])) {
        header("location: index.php");
        exit;
    }   
    }
    // connexion a la database
    require_once("database.php");

    //requete sql
    $sql="Select nom,prenom,promotion,images,id from apprenant order by prenom asc";

    //execute la requete
    $requete = $db->query($sql);

    //recuperer les donnees 
    $apprenants = $requete->fetchAll();

?>

<?php foreach($apprenants as $apprenant):  ?>
    <a href="#" class="infos">
        <script>
            var id = <?php echo $apprenant["id"]; ?>;
        </script>
        <li class="li">
            <?php
            $nam = $apprenant["images"];
            $source = "files/$nam";
            echo('<img style="width: 32px;height: 32px;border-radius: 5px;" src="'.$source.'">');
            ?>
            <span class="span1">
                <b><?= strip_tags($apprenant["prenom"])."   ".strip_tags($apprenant["nom"]) ?></b>
            <br>
                <i>Promotion <?= strip_tags($apprenant["promotion"]).$apprenant["images"] ?></i>
            </span>

            <!-- pour ajouter la partie ajouter et supprimer au cas ou on est sur la page admin -->
                <?php 

                // //Demarrager de la session
                // session_start();
                
                if($page==1): ?>
                    <span class="admin_function">
                        <div class="div1" onclick="modif()" ><img src="image/modify.png"></div>
                        <div class="div2" ><img src="image/delete.png" onclick="delet()"></div>
                    </span>
                    <script>
                        function modif(){
                            //console.log("iittijijfsj");
                           window.location.href = 'modif.php';
                        }
                        function delet(){
                            alert(id);
                            // Créer une instance de l'objet XMLHttpRequest
                            var xhr = new XMLHttpRequest();

                            // Définir le type de requête et l'URL du script PHP
                            xhr.open("POST", "del.php", false);

                            // Définir l'en-tête de la requête si nécessaire
                            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                            // Préparer les données à envoyer
                            var data = "elementid=" + encodeURIComponent(id);

                            // Envoyer la requête avec les données
                            xhr.send(data);
                            //pour rafraichir la page vu que c'est une requete ajax donc elle s'execute en arriere plan
                            location.reload();
                        }
                    </script>

                <?php endif?>
        </li>
    </a> 
<?php endforeach ?>