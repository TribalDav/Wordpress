<?php
get_header();

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
