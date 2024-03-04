<?php $hero_image = get_theme_mod("hero_image"); ?>

<style>
  header::before {
    content: "";
    position: absolute;
    display: block;
    width: 100vw;
    height: 100%;
    top: 0;
    background-image: url("<?= $hero_image ?>");
    background-repeat: no-repeat;
    z-index: -1;
  }
</style>

<header class="relative flex items-center justify-center pb-16 pt-32">
  <?php echo get_theme_mod("hero_image"); ?>
</header>
