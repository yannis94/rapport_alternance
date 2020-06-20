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
    <div id="card<?= $mission->id ?>" class="mission bg_color_main">
        <div class="card_top">
            <img src="<?= $mission->img_path ?>" class="cover"/>
        </div>
        <div class="card-bottom bg_color_main">
            <h3><?= $mission->title ?></h3>
            <form method="post">
                <button name="button<?= $mission->id ?>" class="button bg_color_contrast">
                    Voir mission
                    <?php
                        if (isset($_POST["button$mission->id"])) {
                            $_SESSION["article_ID"] = $mission->id;
                            header("Location: ./article.php");
                            exit;
                        }
                    ?>
                </button> 
            </form>
        </div>
    </div>
    <?php endforeach; ?>
</div>


<script src="./script/missions.js"></script>
<?php require("footer.php"); ?>