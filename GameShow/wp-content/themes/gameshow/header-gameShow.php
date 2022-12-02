<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_template_directory_uri().'./webfiles/css/style-gameShow.css'?>">
    
    <script src="<?= get_template_directory_uri().'./webfiles/js/menuDeroulant.js'?>"defer ></script>
    <script src="<?= get_template_directory_uri().'./webfiles/js/app.js'?>"defer ></script>
    <link rel="stylesheet" href="<?= get_template_directory_uri().'./webfiles/js/OwlCarousel/dist/assets/owl.carousel.min.css'?>">
    <link rel="stylesheet" href="<?= get_template_directory_uri().'./webfiles/js/OwlCarousel/dist/assets/owl.theme.default.min.css'?>">


    <?php wp_head(); ?>
</head>
<body class="pageGameShow">
    <header>
        <nav>
            <div id="menu">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(). '/webfiles/img/logoGamesShow.png'?>" alt="Logo de Soissons Games Show">
                    <p>Soissons Game Show</p>
                </div>
                <div id="burgerMenu">
                    <div></div>
                </div>
                <div class="links">
                <h2>MENU</h2>
                    <ul>
                        <li><a href="#presentation" title="Redirection vers la page presentation">Présentation</a></li>
                        <li><a href="#celebrite" title="Redirection vers la page Compétition">Compétition</a></li>
                        <li><a href="#compet" title="Redirection vers la page Célébrités">Célébrités</a></li>
                        <li><a href="#cosplay" title="Redirection vers la page Cosplay">Cosplay</a></li>
                        <li><a href="#contact" title="Redirection vers la page contacter">Nous contacter</a></li>
                    </ul>
                </div>
            </div>

            
        </nav>
        <div class="containsResum" id="presentation">
            <?php the_post_thumbnail(); ?>
                <div class="containsTitleParagraph">
                    <h1><?= get_field('titreIntroResume'); ?><span class="titleRed"> <?= get_field('suiteTitreRouge') ?></span></h1>
                    <p><?= get_field('introductionResume'); ?></p>
                </div>
        </div>
</header>