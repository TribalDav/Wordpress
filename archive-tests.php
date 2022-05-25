<?php
get_header();
$tests = new WP_Query([
    'post_type' => 'tests',
]);
?>
<div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 my-4">
        <?php
        if ($tests->have_posts()) :
            while ($tests->have_posts()) : the_post();
                if (isset($tests)) :
                    $tests->the_post();

        ?>

                    <div class="col-12 col-lg-4">
                        <div class="card shadow bg-body rounded homeCard">
                            <a href="<?= the_permalink() ?>">
                                <img src="<?php echo the_field('image')?>" alt="">
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