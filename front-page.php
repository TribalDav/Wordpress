<?php

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
        <div class="container h-75 bg-light text-dark p-2">
            <div class="row">
                <div class="col text-center"><img class="img-fluid" src="<?php the_field('image_a_gauche') ?>" alt=""></div>
                <div class="col d-flex flex-column justify-content-center"><?= the_field('texte_a_droite') ?></div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center"><?= the_field('texte_a_gauche') ?></div>
                <div class="col text-center"><img class="img-fluid" src="<?php the_field('image_a_droite') ?>" alt=""></div>
            </div>
        </div>
<?php endwhile;

endif;
get_footer();
?>