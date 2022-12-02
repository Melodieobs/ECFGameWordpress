<footer>
    <div class="wave">
<!--     <svg width="929" height="44" id="svg" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><defs><linearGradient id="gradient" x1="79%" y1="91%" x2="21%" y2="9%"><stop offset="5%" stop-color="#1b1736"></stop><stop offset="95%" stop-color="#1a0530"></stop></linearGradient></defs><path d="M 0,600 C 0,600 0,300 0,300 C 132.8,360 265.6,420 445,385 C 624.4,350 850.4000000000001,220 1024,190 C 1197.6,160 1318.8,230 1440,300 C 1440,300 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="url(#gradient)" fill-opacity="1" class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 300)"></path></svg>   </div>
 -->   
 <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 240" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="#1b1234" offset="0%"></stop><stop stop-color="rgba(26, 5, 48, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,168L120,140C240,112,480,56,720,60C960,64,1200,128,1440,156C1680,184,1920,176,2160,144C2400,112,2640,56,2880,56C3120,56,3360,112,3600,140C3840,168,4080,168,4320,152C4560,136,4800,104,5040,112C5280,120,5520,168,5760,156C6000,144,6240,72,6480,60C6720,48,6960,96,7200,132C7440,168,7680,192,7920,168C8160,144,8400,72,8640,68C8880,64,9120,128,9360,144C9600,160,9840,128,10080,132C10320,136,10560,176,10800,196C11040,216,11280,216,11520,192C11760,168,12000,120,12240,116C12480,112,12720,152,12960,156C13200,160,13440,128,13680,124C13920,120,14160,144,14400,152C14640,160,14880,152,15120,140C15360,128,15600,112,15840,120C16080,128,16320,160,16560,168C16800,176,17040,160,17160,152L17280,144L17280,240L17160,240C17040,240,16800,240,16560,240C16320,240,16080,240,15840,240C15600,240,15360,240,15120,240C14880,240,14640,240,14400,240C14160,240,13920,240,13680,240C13440,240,13200,240,12960,240C12720,240,12480,240,12240,240C12000,240,11760,240,11520,240C11280,240,11040,240,10800,240C10560,240,10320,240,10080,240C9840,240,9600,240,9360,240C9120,240,8880,240,8640,240C8400,240,8160,240,7920,240C7680,240,7440,240,7200,240C6960,240,6720,240,6480,240C6240,240,6000,240,5760,240C5520,240,5280,240,5040,240C4800,240,4560,240,4320,240C4080,240,3840,240,3600,240C3360,240,3120,240,2880,240C2640,240,2400,240,2160,240C1920,240,1680,240,1440,240C1200,240,960,240,720,240C480,240,240,240,120,240L0,240Z"></path></svg>
    </div>
 <div class="containsFooter">
        <div class="containtInfo">
            <section class="containsContact" id="contact">
                <h3 id="contact"><?= get_field('titreContacter'); ?></h3>
                <p><?= get_field('texteRenseignementForm'); ?></p>
                <?php
                    the_content();
                    echo do_shortcode('[contact-form-7 id="84" title="Formulaire de contact 1"]');
                    ?>
            </section>
            <section class="containsLink">
                <div class="containsMap">
                <h3 id="carte"><?= get_field('titreCarte') ?> </h3>

                <iframe src="https://maps.google.com/maps?q=Rue+Du+Marais%2060350%20Autr%C3%AAches&amp;t=&amp;z=13&amp;ie=UTF8&amp;output=embed">
                            </iframe>


                <h3 id="cordonnees"><?= get_field('titreCoordonnees'); ?></h3>
                </div>
                <div class="containsCoordinate">
                <ul>
                    <li><img src="<?= get_template_directory_uri() . '/webfiles/img/logoLieu.png' ?>" alt="logo lieu"><a href="<?= get_field('adresseRue')['url'] ?>" target="<?= get_field('adresseRue')['target']; ?>"><?= get_field('adresseRue')['title'] ?></a> </li>
                    <li><img src="<?= get_template_directory_uri() . '/webfiles/img/logoEmail.png' ?>" alt="logo adresse email"><a href="mailto:<?= get_field('adresseMail') ?>"><?= get_field('adresseMail') ?></a></li>
                    <li><img src="<?= get_template_directory_uri() . '/webfiles/img/logoTel.png' ?>" alt="logo telephone"><a href="tel:<?= get_field('telephone') ?>"><?= get_field('telephone') ?></a></li>
                </ul>
                </div>
            <!-- Rendre les logos avec l'utilisation de spackmap -->
            <div class="containsNatworks">
                <h3 id="reseaux"><?= get_field('titreReseaux'); ?></h3>
                <ul>
                    <li><a href="<?= get_field('lienReseaux1')['url']; ?>" title="<?= get_field('lienReseaux1')['title']; ?>" target="<?= get_field('lienReseaux1')['target']; ?>"><img src="<?= get_field('logoFacebook')['url']; ?>" alt="<?= get_field('logoFacebook')['description']; ?>"></a></li>
                    <li><a href="<?= get_field('lienReseaux2')['url']; ?>" title="<?= get_field('lienReseaux2')['title']; ?>" target="<?= get_field('lienReseaux2')['target']; ?>"><img src="<?= get_field('logoMessenger')['url']; ?>" alt="<?= get_field('logoMessenger')['description']; ?>"></a></li>
                    <li><a href="<?= get_field('lienReseaux3')['url']; ?>" title="<?= get_field('lienReseaux3')['title']; ?>" target="<?= get_field('lienReseaux3')['target']; ?>"><img src="<?= get_field('logoInstagram')['url']; ?>" alt="<?= get_field('logoInstagram')['description']; ?>"></a></li>
                    <li><a href="<?= get_field('lienReseaux4')['url']; ?>" title="<?= get_field('lienReseaux4')['title']; ?>" target="<?= get_field('lienReseaux4')['target']; ?>"><img src="<?= get_field('logoTwitter')['url']; ?>" alt="<?= get_field('logoTwitter')['description']; ?>"></a></li>
                </ul>
                </div>
            </section>
        </div>
        
        
        <p> © 2021 - Soissons Game Show | Réalisé par VIGREUX Joël </p>
    </div>
    </footer>
</body>

</html>