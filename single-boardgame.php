<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="container">
            <h2 class="text-center"><?php the_title() ?></h2>
            <?php the_post_thumbnail();  ?>
            <div id="texte"><?php the_content() ?></div>
            <div id="prix">Prix : <?php the_field('prix')?></div>
            <div id="date">Date de publication : <?php the_field('date_de_publication') ?></div>
            <div id="joueur">Nombre de joueurs : <?= the_field('nombre_de_joueurs') ?> </div>
            <div id="age">Age conseillé : <?= the_field('age') ?> </div>
            <div id="temps">Durée de la partie : <?= the_field('duree_de_la_partie') ?> </div>
            <div><?= the_taxonomies() ?></div>
            <hr>
        </div>
<?php endwhile;
endif; ?>


 






<?php
get_footer();

?>