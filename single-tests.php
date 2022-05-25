<?php
get_header();
// Page single contenant les infos détaillés de l'article de test
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    <div class="container">
            <h2 class="text-center text-uppercase"><?php the_title() ?></h2>
            <div class="row">
                <div class="col-12 col-lg-3 text-center p-2"><?php the_post_thumbnail();  ?></div>
                <div class="col col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-4">
                        <img src="<?php echo the_field('image')?>" alt="">
                        </div>
                    </div>

                </div>
            </div>

            <div id="texte"><?php the_content() ?></div>

            
            <hr>
        </div>
    <?php 

endwhile;

endif; ?>






<?php
get_footer(); ?>