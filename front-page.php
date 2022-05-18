<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="container ">
            <h2 class="text-center text-uppercase"><?= the_title(); ?></h2>
            <div class="row">
                <div class="col">
                    <img class="img-fluid" src="<?= the_field('image_a_gauche') ?>" alt="">
                </div>
                <div class="col">
                    <?= the_field('texte_a_droite') ?>
                </div>
            </div>
        </div>

<?php

    endwhile;
endif;
get_footer();
