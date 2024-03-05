<!-- prettier-ignore -->
<?php $hero_image = get_theme_mod("hero_image"); ?>

<style>
  header::before {
    background: center / cover no-repeat url("<?= $hero_image ?>");
    background-blend-mode: multiply;
  }
</style>

<header
  class="container relative flex flex-col items-center justify-center gap-6 pb-16 pt-32 text-light before:absolute before:top-0 before:-z-10 before:block before:h-full before:w-screen before:bg-oxford-950/60 before:bg-no-repeat before:bg-blend-multiply before:content-empty"
>
  <div class="flex flex-col gap-2">
    <h1>Solar, Simplified</h1>
    <p class="text-2xl">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
      efficitur nisl dolor, in porttitor augue luctus eget. Quisque vulputate
      elementum.
    </p>
  </div>
  <!-- prettier-ignore -->
  <?= do_shortcode('[contact-form-7 id="9bc228c" title="Contact form 1"]') ?>
</header>
