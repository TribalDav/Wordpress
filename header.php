<?php
wp_head();


?>

<nav class="navbar sticky-top navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <?php the_custom_logo() ?>
    <a class="navbar-brand" href="#">
      <span id="siteTitle"><?php bloginfo('name') ?></span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <?php wp_nav_menu([
        'menu' => "mainMenu",
        'container' => false,
        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
      ]); ?>

    </div>
  </div>
</nav>