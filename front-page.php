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
<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="container bg-light text-dark p-2">
            <div class="row">
                <div class="col text-center"><img class="img-fluid" src="<?php the_field('image_a_gauche') ?>" alt=""></div>
                <div class="col d-flex flex-column justify-content-center"><?= the_field('texte_a_droite') ?></div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center"><?= the_field('texte_a_gauche') ?></div>
                <div class="col text-center"><img class="img-fluid" src="<?php the_field('image_a_droite') ?>" alt=""></div>
            </div>
            <div class="row mb-3">
                <div class="col text-center"><img class="img-fluid" src="<?php the_field('image_a_gauche_2') ?>" alt=""></div>
                <div class="col d-flex flex-column justify-content-center"><?= the_field('texte_a_droite_2') ?></div>
            </div>
        </div>
        <div class="container-xl h-75">
            <div class="row text-center">
                <h3 class="mb-3">Quelques chiffres</h3>
                <div class="col-4">
                    <div class="card shadow-lg bg-body rounded">
                        <div><i class="fa-solid fa-users iconStyle p-3 m-1"></i></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Utilisateurs</h5>
                            <p class="text-center"><?= the_field('nombre_dutilisateurs') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-lg bg-body rounded">
                        <div><i class="fa-solid fa-dice-six iconStyle p-3 m-1"></i></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Jeux</h5>
                            <p class="text-center"><?= the_field('nombre_de_jeux') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
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