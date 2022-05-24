<?php
// si on souhaite afficher autre chose que ce qui est prévu par le template de Wordpress, on peut avoir recours à des requêtes personnnalisées
$boardgames = new WP_Query([
    'post_type' => 'boardgames'
]);


get_header();

?>
<div class="backgroundImg vh-100 img-fluid">
    <div class="filterImg">
        <div class="positionTitle animate__animated animate__lightSpeedInLeft">
            <?php bloginfo('name') ?>
        </div>
    </div>
</div>
<footer class="bg-light  h-50">
<div id="carouselExampleCaptions" class="carousel slide h-100 carousel-dark" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active h-100">
        <a href="http://localhost:8080/wordpress2/boardgame/la-cathedrale-rouge/"> <img src="<?php echo get_theme_root_uri() ?>/wordpress/assets/image/cathedrale.png" class="img-fluid w-100 d-block photocarrousel m-auto mt-3"  alt="..."></a>
      
      <div class="carousel-caption d-none d-md-block ">
        <h5>La Cathédrale Rouge</h5>
        <p>Dirigez une équipe de construction pour bâtir la cathédrale Saint-Basile sous le règne du tsar.</p>
      </div>
    </div>
    <div class="carousel-item h-100">
        <a href="http://localhost:8080/wordpress2/boardgame/creature-comforts/"><img src="<?php echo get_theme_root_uri() ?>/wordpress/assets/image/creature.png" class="d-block w-100 photocarrousel m-auto mt-3" alt="..."></a>
      
      <div class="carousel-caption d-none d-md-block">
        <h5>Creature Comforts</h5>
        <p>La vie dans la forêt est très amusante, du moins pendant que le soleil brille .</p>
      </div>
    </div>
    <div class="carousel-item h-100">
        <a href="http://localhost:8080/wordpress2/boardgame/blabla/"><img src="<?php echo get_theme_root_uri() ?>/wordpress/assets/image/zero.png" class="d-block w-100 photocarrousel m-auto mt-3" alt="..."></a>
      
      <div class="carousel-caption d-none d-md-block">
        <h5>Zéro à 100l</h5>
        <p>Découvrez le jeu Zéro à 100, un jeu de connaissances pour celles et ceux qui n’en ont pas !.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</footer>
<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <div class="container bg-light text-dark p-2">
            <div class="row">
                <div class="col text-center"><img class="img-fluid" src="<?php the_field('image_a_gauche') ?>" alt=""></div>
                <div class=" mediatexteaccueil col d-flex flex-column justify-content-center"><?= the_field('texte_a_droite') ?></div>
            </div>
            <div class="row">
                <div class="col d-flex flex-column justify-content-center"><?= the_field('texte_a_gauche') ?></div>
                <div class="col text-center"><img class="img-fluid" src="<?php the_field('image_a_droite') ?>" alt=""></div>
            </div>
            <div class="row mb-3">
                <div class="col text-center"><img class="img-fluid" src="<?php the_field('image_a_gauche_2') ?>" alt=""></div>
                <div class="col d-flex flex-column justify-content-center"><?= the_field('texte_a_droite_2') ?></div>
            </div>
        </div>
        <div class="container-xl h-50">
            <div class="row text-center">
                <h3 class="mb-3">Quelques chiffres</h3>
                <div class="col-4">
                    <div class="card shadow-lg bg-body rounded">
                        <div><i class="fa-solid fa-users iconStyle p-3 m-1"></i></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Utilisateurs</h5>
                            <p class="text-center"><?= the_field('nombre_dutilisateurs') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-lg bg-body rounded">
                        <div><i class="fa-solid fa-dice-six iconStyle p-3 m-1"></i></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Jeux</h5>
                            <p class="text-center"><?= the_field('nombre_de_jeux') ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-lg bg-body rounded">
                        <div><i class="fa-solid fa-heart iconStyle p-3 m-1"></i></div>
                        <div class="card-body">
                            <h5 class="card-title text-center">Fans</h5>
                            <p class="text-center"><?= the_field('nombre_de_fans') ?></p>
                        </div>
                    </div>
                </div>
            </div>
 
            <div class="row text-center">
                <div class="col-3">
                <div class="ball-loader m-5">loading...</div>
                </div>  
                <div class="col-3">
                <div class="ball-loader m-5">loading...</div>
                </div>  
                <div class="col-3">
                    <div class="ball-loader m-5">loading...</div>
                </div>  
                <div class="col-3">
                    <div class="ball-loader m-5">loading...</div>
                </div>  
            </div>           
            
        </div>

        


        
<?php endwhile;

endif;
get_footer();
?>