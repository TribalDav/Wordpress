<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="container">
            <h2 class="text-center"><?php the_title() ?></h2>
            <?php the_post_thumbnail();  ?>
            <div><?php the_content() ?></div>
            <div>Date de publication : <?php the_field('date_de_publication') ?></div>
            <div>Nombre de joueurs : <?= the_field('nombre_de_joueur') ?> </div>
            <div>Age conseillé : <?= the_field('age') ?> </div>
            <div>Durée de la partie : <?= the_field('duree_de_la_partie') ?> </div>
            <div><?= the_taxonomies() ?></div>
            <hr>
        </div>
<?php endwhile;
endif;

get_footer();

?>