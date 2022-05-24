<?php

get_heder();
$query = get_queried_object();
//var_dump($query);?>

<h1><?php the_terms($post->ID,'gamcats') ?></h1>
<?
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title() ?></h2>
        <span><?php the_category() ?></span>
    <?php endwhile; 
endif;

get_footer();
