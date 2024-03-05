<!-- prettier-ignore -->
<?php 
$hero_image = get_theme_mod("hero_image"); 
$hero_heading = get_theme_mod("hero_heading");
$hero_subheading = get_theme_mod("hero_subheading");
?>

<style>
  header::before {
    background: center / cover no-repeat url("<?= $hero_image ?>");
    background-blend-mode: multiply;
  }
</style>

<header
  class="container relative flex flex-col items-center justify-center gap-6 pb-16 pt-32 text-light before:absolute before:top-0 before:-z-10 before:block before:h-full before:w-screen before:bg-oxford-950/60 before:bg-no-repeat before:bg-blend-multiply before:content-empty lg:flex-row lg:items-start lg:gap-10"
>
  <div class="flex w-full flex-1 flex-col gap-2 md:py-4">
    <h1><?= $hero_heading ?></h1>
    <p class="text-2xl"><?= $hero_subheading ?></p>
  </div>
  <div class="w-full flex-1">
    <!-- prettier-ignore -->
    <?= do_shortcode('[contact-form-7 id="9bc228c" title="Contact form 1"]') ?>
  </div>
</header>
