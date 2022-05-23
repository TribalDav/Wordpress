<?php

get_header();
$boardgame = new WP_Query([
    'post_type' => 'boardgame',
    'order' => 'ASC'
]);
?>
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-3">
        <?php
        if ($boardgame->have_posts()) :
            while ($boardgame->have_posts()) : the_post();
                $boardgame->the_post();
        ?>

                <div class="col-3">
                    <div class="card shadow bg-body rounded">
                        <a href="<?= the_permalink() ?>">
                            <div class="text-center p-1"><?= the_post_thumbnail() ?></div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= the_title() ?></h5>
                            <p class="card-text"><?= the_excerpt() ?></p>
                        </div>
                    </div>
                </div>
        <?php endwhile;
        endif;
        ?>
    </div>
</div>
<?php

get_footer();
?>