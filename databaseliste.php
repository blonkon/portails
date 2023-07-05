<?php
    session_start();
    if (!isset($_SESSION["admin"])) {
        header("location: index.php");
        exit;
    }
    // connexion a la database
    require_once("database.php");

    //requete sql
    $sql="Select nom,prenom,promotion from apprenant order by prenom asc";

    //execute la requete
    $requete = $db->query($sql);

    //recuperer les donnees 
    $apprenants = $requete->fetchAll();

?>

<?php foreach($apprenants as $apprenant):  ?>
    <a href="" class="infos">
        <li class="li">
            <img src="image/avatar.png">
            <span class="span1">
                <b><?= strip_tags($apprenant["prenom"])."   ".strip_tags($apprenant["nom"]) ?></b>
            <br>
                <i>Promotion <?= strip_tags($apprenant["promotion"]) ?></i>
            </span>
            <!-- pour ajouter la partie ajouter et supprimer au cas ou on est sur la page admin -->
                <?php if($page==1): ?>
                    <span class="admin_function">
                        <div class="div1"><img src="image/modify.png"></div>
                        <div class="div2"><img src="image/delete.png"></div>
                    </span>
                <?php endif?>
        </li>
    </a> 
<?php endforeach ?>