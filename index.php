<?php 
    require("header.php"); 
    
    require_once("config/database.php");

    $pdo = new PDO("mysql:dbname=" . DB_BASE . ";host=" . DB_HOST . ";", DB_USER, DB_PASS);

    $query = $pdo->prepare("SELECT * FROM testimonials");
    $query->execute();
    $testimonals = $query->fetchAll(PDO::FETCH_OBJ);
?>
<div id="home_welcome">
    <h1 id="homeTitle">Rapport d'alternance</h1>
</div>

<div id="home_top">

    <div id="home_topL" class="bg_color_contrast home_top_prez">
        <div class="home_top_id">
            <img class="round_pic" style="width: 150%;" src="./images/main/maTronche.png"/>
        </div>
        <div class="home_bottom_prez">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quia deleniti aut perferendis, quibusdam, sint cum odit doloribus mollitia eveniet excepturi a voluptate possimus voluptates enim veniam porro, ipsa in!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quia deleniti aut perferendis, quibusdam, sint cum odit doloribus mollitia eveniet excepturi a voluptate possimus voluptates enim veniam porro, ipsa in!
            </p>
        </div>
            <a class="button bg_color_second" href="./aboutme.php">
                En savoir plus
            </a>
    </div>

    <div id="home_topR" class="bg_color_second home_top_prez">
        <div class="home_top_id">
            <img class="round_pic" style="width: 70%;" src="./images/main/carré_classique_blanc.png"/>
        </div>
        <div class="home_bottom_prez">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quia deleniti aut perferendis, quibusdam, sint cum odit doloribus mollitia eveniet excepturi a voluptate possimus voluptates enim veniam porro, ipsa in! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quia deleniti aut perferendis, quibusdam, sint cum odit doloribus mollitia eveniet excepturi a voluptate possimus voluptates enim veniam porro, ipsa in!
            </p>
        </div>
        <a class="button bg_color_contrast" href="./aboutme.php">
            En savoir plus
        </a>
    </div>
</div>

<div id="testimonials">
    <div class="cards_testimonial">

        <?php foreach($testimonals as $testi): ?>
        <div class="testimonial<?= $testi->id ?> card_testimonial bg_color_main">
            <div class="testi_left">
                <img src="<?= $testi->profil_pic ?>"/>
                <h3><?= $testi->name ?></h3>
            </div>
            <div class="testi_right">
                <p><?= $testi->testimonial ?></p>
                <h4><?= $testi->post ?></h4>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div id="bullets"></div>
</div>

<div id="workplace" class="bg_color_second">
    <div id="workplace_left"></div>
    <div id="workplace_right">
        <h2>Mon bureau</h2>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione cupiditate odio aliquam voluptates amet beatae explicabo voluptatibus sit nihil, quae impedit placeat neque alias ducimus atque vel ullam culpa inventore.</p>
        </br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda similique, minima libero amet impedit harum saepe, cumque quod, odit necessitatibus id a culpa at magni quidem fugiat perspiciatis dignissimos autem!</p>
    </div>
</div>

<div id="thanks">
    <h2>Remerciements</h2>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione cupiditate odio aliquam voluptates amet beatae explicabo voluptatibus sit nihil, quae impedit placeat neque alias ducimus atque vel ullam culpa inventore.</p>
        </br>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda similique, minima libero amet impedit harum saepe, cumque quod, odit necessitatibus id a culpa at magni quidem fugiat perspiciatis dignissimos autem!</p>
</div>

<script src="./script/home.js"></script>
<?php require("footer.php"); ?>