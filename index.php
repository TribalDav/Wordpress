<?php
get_header();

<<<<<<< HEAD
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="container">
            <h2><?= the_title(); ?></h2>
            <span class="pills"><?= the_category() ?></span>
        </div>

<?php

    endwhile;
endif;

get_footer();
=======

if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <span class="pills"><?php the_category() ?></span>
    <?php endwhile; 
endif; 
get_footer();
?>

>>>>>>> 69fcf56fc520b857135856e07467a2d00816a3d5
