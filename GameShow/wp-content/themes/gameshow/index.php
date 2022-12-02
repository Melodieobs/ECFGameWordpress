<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package GameShow
 */

?>
<?php
/* Template Name: Page accueil */
get_header('gameShow');
?>
<main id="primary" class="site-main">
    <section class="mainSection" id="compet">
        <h2 class="videoGames"><?= get_field('titrePrincipal'); ?> <span class="titleRed"><?= get_field('titrePrincipalRouge') ?> </span></h2>
        <article class="containsImageText">
            <img src="<?= get_field('jeuxMarioKart')['url']; ?>" alt="<?= get_field('jeuxMarioKart')['description']; ?>">
            <div>
                <h3 id="titleEvent1"><?= get_field('titreEvenement1'); ?> <span class="titleRed"><?= get_field('texteRouge1') ?></span> <span><?= get_field('suiteTitre1') ?></span> </h3>
                <p><?= get_field('ParagrapheEvenement1'); ?></p>
            </div>
        </article>

        <article class="containsImageText">
            <div>
                <h3 id="titleEvent2"><?= get_field('titreEvenement2'); ?> <span class="titleRed"><?= get_field('texteRouge2') ?></span> <span><?= get_field('suiteTitre2') ?></span></h3>
                <p><?= get_field('ParagrapheEvenement2'); ?></p>
            </div>
            <img src="<?= get_field('jeuxCartePokemon')['url']; ?>" alt="<?= get_field('jeuxCartePokemon')['description']; ?>">
        </article>
    </section>

    
    <?php

$influenceurs =  array(
    'post_type' => 'Influenceur',
    'post_status' => 'publish',
    'order' => 'ASC',
);

$loop = new WP_Query($influenceurs);
$loop = $loop->posts;
?>
    <section class="Influenceurs" id="celebrite">
        <h2><?= get_field('articleInfluenceurs'); ?></h2>
    <div class="containsInfluenceurs">
        <div class=" owl-carousel owl-theme ">
        <?php
        foreach ($loop as $single) {
        ?>
                    <div class="item">
                <div class="influenceur" id="<?= get_fields($single)["nomInfluenceur"]; ?>">
                        <img src="<?= get_fields($single)["imageInfluenceur"]['url']; ?>" alt="<?= get_fields($single)["imageInfluenceur"]['description']; ?>">
                        <h3><?= get_fields($single)["nomInfluenceur"]; ?></h3>
                        <p><?= get_fields($single)["resumeInfluenceur"]; ?></p>
                        </div>
                        </div>
                        <?php
        }
        ?>
        </div>

      <!--   <div class="owl-carousel" ></div> -->
    </div>
    </section>

    <section class="competition" id="cosplay">
            <div>
                <h3 id="titleCompetition"><?= get_field('titreConcours'); ?> <span class="titleRed"><?=get_field('titreConcoursRouge')?></span></h3>
                <p><?= get_field('InformationConcours'); ?></p>
            </div>
            <img src="<?= get_field('concours')['url']; ?>" alt="<?= get_field('jeuxMarioKart')['description']; ?>">
    </section>


    <?php

$Partenaires =  array(
    'post_type' => 'les_partenaires',
    'post_status' => 'publish',
    'order' => 'ASC',
);
$loop = new WP_Query($Partenaires);
$loop = $loop->posts;
?>
    <section class="partenaires">
        <h2><?= get_field('articlesPartenaire'); ?></h2>
        <div class="partenaire">
        <div class=" owl-carousel owl-theme ">
    <?php
    foreach ($loop as $single) {
    ?>
        <div class="item">
            <div class="cards">
                <img src="<?= get_fields($single)["logoPartenaire"]['url']; ?>" alt="<?= get_fields($single)["logoPartenaire"]['description']; ?>">
                <h3><?= get_fields($single)["nomPartenaire"]; ?></h3>
            </div>
            </div>
            <?php
    }
    ?>
    </div>
</div>
    </section>

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri().'./webfiles/js/OwlCarousel/dist/owl.carousel.min.js'?>" ></script>
<script >
     $(document).ready(function(){
    });
$('.owl-carousel').owlCarousel({
    loop:true,
    margin: 15,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        1150:{
            items:2
        },
        1250:{
            items:4
        }
    }
})</script>
<?php get_footer('gameShow'); ?>
