<?php 
    require("header.php"); 
    session_start();
    //call DB, select and show missions
    require_once("config/database.php");

    $pdo = new PDO("mysql:dbname=" . DB_BASE . ";host=" . DB_HOST . ";", DB_USER, DB_PASS);

    $query = $pdo->prepare("SELECT id, title, img_path FROM missions");
    $query->execute();
    $missions = $query->fetchAll(PDO::FETCH_OBJ);
?>

<h1>Mes missions</h1>

<div id="missions">
    
    <?php foreach ($missions as $mission) : ?>
    <div class="mission">
        <img src="<?= $mission->img_path ?>" class="cover"/>
        <h3><?= $mission->title ?></h3>

        <!-- 
            afficher en js le contenu de l'article
            recup du contenu avec $mission->content
            if click > apparition contenu déjaà chargé à l'avance
        -->
        <form method="post">
            <button name="button<?= $mission->id ?>" class="button">
                Voir mission
                <?php
                    $buttonId = $mission->id;
                    if (isset($_POST["button$mission->id"])) {
                        $_SESSION["article_ID"] = $buttonId;
                        header("Location: ./article.php");
                        exit;
                    }
                ?>
            </button> 
        </form>
    </div>
    <?php endforeach; ?>
</div>


<script src="missions.js"></script>
<?php require("footer.php"); ?>