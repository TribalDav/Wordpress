<?php

get_header();
$taxo = get_queried_object();

?>
<div class="container">
    <h1 class="text-center taxo-title"><?= the_taxonomies() ?>(<?= $taxo->count; ?>)</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-3">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <div class="col-3">
                    <div class="card shadow bg-body rounded">
                        <a href="<?= the_permalink() ?>">
                            <div class="text-center p-2"><?= the_post_thumbnail() ?></div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= the_title() ?></h5>
                            <hr>
                            <p class="text-center"><?= the_field('date_de_publication') ?></p>
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