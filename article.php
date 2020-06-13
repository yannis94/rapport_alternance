<?php 
    require("header.php"); 
    session_start();
    $id = $_SESSION["article_ID"];
    //call DB, select and show missions
    require_once("config/database.php");

    $pdo = new PDO("mysql:dbname=" . DB_BASE . ";host=" . DB_HOST . ";", DB_USER, DB_PASS);

    $query = $pdo->prepare("SELECT id, title, content FROM missions WHERE id = $id");
    $query->execute();
    $missions = $query->fetch(PDO::FETCH_OBJ);
?>

<h1><?= $missions->title ?></h1>

<div id="main_div_article">
    <?= $missions->content ?>
</div>



<script src="missions.js"></script>
<?php require("footer.php"); ?>