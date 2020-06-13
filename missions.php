<?php 
    require("header.php"); 
    require_once("config/database.php");

    $pdo = new PDO("mysql:dbname=" . DB_BASE . ";host=" . DB_HOST . ";", DB_USER, DB_PASS);

    $query = $pdo->prepare("SELECT * FROM missions");
    $query->execute();
    $missions = $query->fetchAll(PDO::FETCH_OBJ);
?>

<h1>Mes missions</h1>

<div id="missions">
    <?php foreach ($missions as $mission) : ?>
    <div class="mission">
        <img src="<?= $mission->img_path ?>" class="cover"/>
        <h3><?= $mission->title ?></h3>
    </div>
    <?php endforeach; ?>
</div>

<?php require("footer.php"); ?>