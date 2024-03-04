<?php $hero_image = get_theme_mod("hero_image"); ?>

<style>
  header::before {
    background: center / cover no-repeat url("<?= $hero_image ?>");
    background-blend-mode: multiply;
  }
</style>

<header
  class="relative flex flex-col items-center justify-center gap-2 pb-16 pt-32 text-light before:absolute before:top-0 before:-z-10 before:block before:h-full before:w-screen before:bg-oxford-950/60 before:bg-no-repeat before:bg-blend-multiply before:content-empty"
>
  <h1>Solar, Simplified</h1>
  <p class="text-2xl">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas efficitur
    nisl dolor, in porttitor augue luctus eget. Quisque vulputate elementum.
  </p>
  <?= do_shortcode('[contact-form-7 id="9bc228c" title="Contact form 1"]') ?>
</header>
