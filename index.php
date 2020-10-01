<?php 
    require("header.php"); 
    
    require_once("config/database.php");

    $pdo = new PDO("mysql:dbname=" . DB_BASE . ";host=" . DB_HOST . ";", DB_USER, DB_PASS);

    $query = $pdo->prepare("SELECT * FROM testimonials");
    $query->execute();
    $testimonals = $query->fetchAll(PDO::FETCH_OBJ);
?>

<div id="home_top">

    <div id="home_topL" class="bg_color_contrast home_top_prez">
        <div class="home_top_id">
            <img class="round_pic" style="width: 150%;" src="./images/main/maTronche.png"/>
        </div>
        <div class="home_bottom_prez">
            <p>
            Après deux ans de formation à l'ESD, j'ai décroché une alternance chez Urbanhub, une entreprise de services logistiques qui n'en est qu'au début de son développement.
            <br/>
            J'ai été recruté pour être en charge du projet digital d'Urbanhub. 
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
            Urbanhub est une entreprise qui évolue dans le secteur de la logistique, plus particulièrement dans la logistique urbaine à Paris.<br/>Les services principaux sont : réception, stockage, préparation et livraison de marchandises.  
            </p>
        </div>
        <a class="button bg_color_contrast" href="./entreprise.php">
            En savoir plus
        </a>
    </div>
</div>

<div id="testimonials" class="bg_color_main_light">
    <div class="cards_testimonial">

        <?php foreach($testimonals as $testi): ?>
        <div class="testimonial<?= $testi->id ?> card_testimonial bg_color_contrast">
            <div class="testi_left">
                <img src="<?= $testi->profil_pic ?>"/>
                <h3>
                    <?= utf8_encode($testi->name) ?>,
                    <br/>
                    <span id="role"><?= utf8_encode($testi->post) ?></span>
                </h3>
            </div>
            <div class="testi_right">
                <p><?= utf8_encode($testi->testimonial) ?></p>
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
        <p>J'ai effectué mon année d'alternance dans les bureaux de l'entrepôt d'Ivry, au pied du periphérique parisien (l'isolation des fenêtres était de bonne facture heureusement).</p>
        </br>
        <p>
            Le bâtiment venant d'être acheté quelques semaines avant mon arrivé en Septembre, nous nous sommes installé progressivement et avons découvert
            certaines surprises de temps en temps (je pense particulièrement au disfonctionnement du chauffage découvert au mois de Novembre).
        </p>
        <p>
            Blagues à part, les locaux étaient super (avec une terrasse pas piqué des hannetons pour les pauses), j'ai adoré mon cadre de travail.
        </p>
    </div>
</div>

<div id="thanks">
    <h2>Remerciements</h2>
    <p>J’ai eu la chance d’avoir une alternance où chacune de mes actions pouvaient avoir un réel impact sur le business de l’entreprise, je remercie donc Bernard Ochs, le directeur général d’Urbanhub, pour la confiance qu’il m’a accordé lors de cette année. </p>
        
    <p>Je remercie également beaucoup mon tuteur, Lucas Martinez, qui m’a accompagné durant toutes mes missions et apporter énormément de part son expérience, je suis fier de tout le travail que nous avons accompli et des résultats que nous avons obtenus.</p>
        
    <p>Je tiens aussi à remercier tout le reste de l’équipe avec qui j’ai passé de très bons moments et une super année d’alternance. </p>
</div>

<script src="./script/home.js"></script>
<script src="./script/bureau_bg.js"></script>
<?php require("footer.php"); ?>