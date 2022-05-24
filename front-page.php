<?php
// si on souhaite afficher autre chose que ce qui est prévu par le template de Wordpress, on peut avoir recours à des requêtes personnnalisées
$boardgames = new WP_Query([
    'post_type' => 'boardgames'
]);


get_header();

?>
<div class="backgroundImg vh-100 img-fluid">
    <div class="filterImg">
        <div class="positionTitle animate__animated animate__lightSpeedInLeft">
            <?php bloginfo('name') ?>
        </div>
    </div>
</div>
<div class="bg-light bg-gradient h-50 mediaCarousel">
    <div id="carouselFrontPage" class="carousel carousel-dark slide h-100" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselFrontPage" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselFrontPage" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselFrontPage" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active h-100">
                <img src="<?php echo get_theme_root_uri() ?>/wordpress/assets/image/cathedrale.png" class="img-fluid w-100 d-block photocarrousel m-auto mt-3" alt="...">
                <div class="carousel-caption d-none d-md-block ">
                    <h5>La Cathédrale Rouge</h5>
                    <p>Dirigez une équipe de construction pour bâtir la cathédrale Saint-Basile sous le règne du tsar.</p>
                </div>
            </div>
            <div class="carousel-item h-100">
                <img src="<?php echo get_theme_root_uri() ?>/wordpress/assets/image/creature.png" class="d-block w-100 photocarrousel m-auto mt-3" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Creature Comforts</h5>
                    <p>La vie dans la forêt est très amusante, du moins pendant que le soleil brille .</p>
                </div>
            </div>
            <div class="carousel-item h-100">
                <img src="<?php echo get_theme_root_uri() ?>/wordpress/assets/image/zero.png" class="d-block w-100 photocarrousel m-auto mt-3" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Zéro à 100l</h5>
                    <p>Découvrez le jeu Zéro à 100, un jeu de connaissances pour celles et ceux qui n’en ont pas !.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselFrontPage" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselFrontPage" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="w-50 m-auto text-center p-3">
    <h2 class="mediaTitle">Fonctionnalités</h2>
    <hr>
</div>

<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="container p-3">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center"><img class="img-fluid" src="<?php the_field('image_a_gauche') ?>" alt=""></div>
                <div class="col col-lg-6 d-flex flex-column justify-content-center"><?= the_field('texte_a_droite') ?></div>
            </div>
            <div class="row mediaDirection">
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center"><?= the_field('texte_a_gauche') ?></div>
                <div class="col col-lg-6 text-center"><img class="img-fluid" src="<?php the_field('image_a_droite') ?>" alt=""></div>
            </div>
            <div class="row mb-3">
                <div class="col-12 col-lg-6 text-center"><img class="img-fluid" src="<?php the_field('image_a_gauche_2') ?>" alt=""></div>
                <div class="col col-lg-6 d-flex flex-column justify-content-center"><?= the_field('texte_a_droite_2') ?></div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="w-50 m-auto text-center p-3">
                <h2 class="mediaTitle">Quelques chiffres</h2>
                <hr>
            </div>
            <div class="row text-center">
                <div class="col-12 col-lg-4 mediaCard">
                    <div class="card shadow-lg bg-body rounded">
                        <div><i class="fa-solid fa-users iconStyle p-3 m-1"></i></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Utilisateurs</h5>
                            <p class="text-center"><?= the_field('nombre_dutilisateurs') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mediaCard">
                    <div class="card shadow-lg bg-body rounded">
                        <div><i class="fa-solid fa-dice-six iconStyle p-3 m-1"></i></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Jeux</h5>
                            <p class="text-center"><?= the_field('nombre_de_jeux') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4 mediaCard">
                    <div class="card shadow-lg bg-body rounded">
                        <div><i class="fa-solid fa-heart iconStyle p-3 m-1"></i></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Fans</h5>
                            <p class="text-center"><?= the_field('nombre_de_fans') ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile;

endif;
get_footer();
?>