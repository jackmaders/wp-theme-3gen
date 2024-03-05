<!-- prettier-ignore -->
<?php if (function_exists("the_custom_logo")) {
    $custom_logo_id = get_theme_mod("custom_logo");
    $logo = wp_get_attachment_image_src($custom_logo_id, $size = "medium");
} ?>

<footer
  class="container flex flex-col items-center gap-8 pb-3 pt-16 text-light bleed-bg bleed-oxford-900"
>
  <a href="/">
    <img class="h-16 w-auto" src="<?= $logo[0] ?>" alt="logo" />
  </a>
  <!-- prettier-ignore -->
  <?php wp_nav_menu([
        "menu" => "Footer Menu",
        "container" => "",
        "menu_class" =>
            "footer-menu",
    ]); ?>

  <div class="flex flex-col items-center gap-3 text-lg leading-none">
    <a
      class="before:mask-[url('/src/images/svg/phone.svg')] before:mask-size-contain before:mask-position-center before:mask-no-repeat flex items-center gap-2 before:block before:size-5 before:bg-emerald-700 before:content-empty"
      href="tel:12345678910"
      >12345678910</a
    >
    <a
      class="before:mask-[url('/src/images/svg/envelope.svg')] before:mask-size-contain before:mask-position-center before:mask-no-repeat flex items-center gap-2 before:block before:size-5 before:bg-emerald-700 before:content-empty"
      href="mailto:a@b.com"
      >sales@3genrenewables.co.uk</a
    >
    <div class="flex justify-center gap-3">
      <a
        href="/"
        class="after:mask-[url('/src/images/svg/brand/facebook.svg')] after:mask-size-contain after:mask-position-center after:mask-no-repeat after:block after:size-6 after:bg-light after:content-empty"
      >
        <span class="sr-only">facebook</span>
      </a>
      <a
        href="/"
        class="after:mask-[url('/src/images/svg/brand/instagram.svg')] after:mask-size-contain after:mask-position-center after:mask-no-repeat after:block after:size-6 after:bg-light after:content-empty"
      >
        <span class="sr-only">instagram</span>
      </a>
      <a
        href="/"
        class="after:mask-[url('/src/images/svg/brand/x.svg')] after:mask-size-contain after:mask-position-center after:mask-no-repeat after:block after:size-6 after:bg-light after:content-empty"
      >
        <span class="sr-only">X</span>
      </a>
      <a
        href="/"
        class="after:mask-[url('/src/images/svg/brand/linkedin.svg')] after:mask-size-contain after:mask-position-center after:mask-no-repeat after:block after:size-6 after:bg-light after:content-empty"
      >
        <span class="sr-only">linkedin</span>
      </a>
    </div>
  </div>

  <a class="button" href="/">Get a Quote</a>
  <div class="flex gap-2">
    <a href="/">Privacy Policy</a>
    <span>-</span>
    <a href="/">Terms of Service</a>
  </div>
</footer>
