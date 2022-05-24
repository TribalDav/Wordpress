<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="container">
            <h2 class="text-center"><?php the_title() ?></h2>
            <div class="row">
                <div class="col-12 col-lg-3 text-center p-2"><?php the_post_thumbnail();  ?></div>
                <div class="col col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-4"> 
                            <div >
                          <i class="fa-solid fa-money-bill-1 fa-2x"></i> : <?php the_field('prix')?>
                            </div> 
                            <div class="mt-5"><i class="fa-solid fa-cake-candles fa-2x"></i>: <?= the_field('age') ?> </div>
                        </div>
                        <div class="col-4">

                            <div><i class="fa-solid fa-calendar fa-2x"></i> <?php the_field('date_de_publication') ?></div>
                        </div>
                        <div class="col-4">
                            <div ><i class="fa-solid fa-users-line fa-2x"></i> : <?= the_field('nombre_de_joueurs') ?> </div>
                            <div class="mt-5"> <i class="fa-solid fa-stopwatch fa-2x"></i>: <?= the_field('duree_de_la_partie') ?> </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="texte"><?php the_content() ?></div>
            
           
            
           
           
           
            <div><?= the_taxonomies() ?></div>
            <hr>
        </div>
<?php endwhile;
endif; ?>









<?php
get_footer();

?>