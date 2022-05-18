<<<<<<< HEAD
<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <h1><?= the_title() ?></h1>
        <div><?= the_content() ?></div>
        <div><?= the_category() ?></div>
        <div><?= the_tags() ?></div>
        <hr>
<?php
    endwhile;
endif;

get_footer();
=======
ceci est mon template de catégories

<?php

>>>>>>> 69fcf56fc520b857135856e07467a2d00816a3d5
