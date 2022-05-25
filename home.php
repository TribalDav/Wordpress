<?php
// page qui affiche tous nos articles
get_header();

// Instance de la classe WP_QUERY pour faire une requête affichant les articles de boardgames
$boardgame = new WP_Query([
    'post_type' => 'boardgame',
]);



?>
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-4">
        <?php
        if ($boardgame->have_posts()) :
            while ($boardgame->have_posts()) : the_post();
                if (isset($boardgame)) :
                    $boardgame->the_post();
        ?>
                    <!-- CARDS -->
                    <div class="col-12 col-lg-4">
                        <div class="card shadow bg-body rounded homeCard">
                            <a href="<?= the_permalink() ?>">
                                <div class="text-center p-1"><?= the_post_thumbnail() ?></div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title text-center"><?= the_title() ?></h5>
                                <p class="card-text"><?= the_excerpt() ?></p>
                            </div>
                        </div>
                    </div>
        <?php
                endif;
            endwhile;
            wp_reset_postdata();
        endif;

        ?>
    </div>
</div>
<?php

get_footer();
?>