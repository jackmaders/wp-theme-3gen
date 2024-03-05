<!-- prettier-ignore -->
<?php
  if (function_exists("the_custom_logo")) {
    $custom_logo_id = get_theme_mod("custom_logo");
    $logo = wp_get_attachment_image_src($custom_logo_id, $size = "medium");
  }

  $footer_email = get_theme_mod("footer_email"); 
  $footer_phone = get_theme_mod("footer_phone");
  $footer_facebook_link = get_theme_mod("footer_facebook_link");
  $footer_instagram_link = get_theme_mod("footer_instagram_link");
  $footer_x_link = get_theme_mod("footer_x_link");
  $footer_linkedin_link = get_theme_mod("footer_linkedin_link");
?>

<footer
  class="container flex flex-col items-center gap-8 pb-3 pt-16 text-light bleed-bg bleed-oxford-900"
>
  <div
    class="flex w-full flex-col items-center gap-8 lg:flex-row lg:items-start"
  >
    <a class="flex flex-1 justify-start" href="/">
      <img
        class="h-16 w-auto lg:h-20 xl:h-24"
        src="<?= $logo[0] ?>"
        alt="logo"
      />
    </a>
    <!-- prettier-ignore -->
    <?php wp_nav_menu([
        "menu" => "Footer Menu",
        "container" => "",
        "menu_class" =>
            "footer-menu flex flex-1 justify-center",
    ]); ?>

    <div
      class="flex flex-1 flex-col items-center justify-end gap-8 lg:items-end"
    >
      <div
        class="flex flex-col items-center gap-3 text-lg leading-none lg:items-end"
      >
        <div class="flex justify-center gap-3">
          <!-- prettier-ignore -->
          <?php if (!empty($footer_facebook_link)): ?>
          <a
            href="<?= $footer_facebook_link ?>"
            class="after:mask-[url('/src/images/svg/brand/facebook.svg')] after:mask-size-contain after:mask-position-center after:mask-no-repeat after:block after:size-6 after:bg-light after:content-empty"
          >
            <span class="sr-only">facebook</span>
          </a>
          <?php endif; ?>

          <!-- prettier-ignore -->
          <?php if (!empty($footer_instagram_link)): ?>
          <a
            href="<?= $footer_instagram_link ?>"
            class="after:mask-[url('/src/images/svg/brand/instagram.svg')] after:mask-size-contain after:mask-position-center after:mask-no-repeat after:block after:size-6 after:bg-light after:content-empty"
          >
            <span class="sr-only">instagram</span>
          </a>
          <?php endif; ?>
          <!-- prettier-ignore -->
          <?php if (!empty($footer_x_link)): ?>
          <a
            href="<?= $footer_x_link ?>"
            class="after:mask-[url('/src/images/svg/brand/x.svg')] after:mask-size-contain after:mask-position-center after:mask-no-repeat after:block after:size-6 after:bg-light after:content-empty"
          >
            <span class="sr-only">X</span>
          </a>
          <?php endif; ?>
          <!-- prettier-ignore -->
          <?php if (!empty($footer_linkedin_link)): ?>
          <a
            href="<?= $footer_linkedin_link ?>"
            class="after:mask-[url('/src/images/svg/brand/linkedin.svg')] after:mask-size-contain after:mask-position-center after:mask-no-repeat after:block after:size-6 after:bg-light after:content-empty"
          >
            <span class="sr-only">linkedin</span>
          </a>
          <?php endif; ?>
        </div>
        <!-- prettier-ignore -->
        <?php if (!empty($footer_email)): ?>
        <a
          class="before:mask-[url('/src/images/svg/envelope.svg')] before:mask-size-contain before:mask-position-center before:mask-no-repeat flex items-center gap-2 before:block before:size-5 before:bg-emerald-700 before:content-empty"
          href="mailto:<?= $footer_email ?>"
        >
          <?= $footer_email ?>
        </a>
        <?php endif; ?>
        <!-- prettier-ignore -->
        <?php if (!empty($footer_phone)): ?>
        <a
          class="before:mask-[url('/src/images/svg/phone.svg')] before:mask-size-contain before:mask-position-center before:mask-no-repeat flex items-center gap-2 before:block before:size-5 before:bg-emerald-700 before:content-empty"
          href="tel:<?= $footer_phone ?>"
        >
          <?= $footer_phone ?>
        </a>
        <?php endif; ?>
      </div>

      <a class="button" href="/">Get a Quote</a>
    </div>
  </div>

  <div class="flex gap-2">
    <a href="/">Privacy Policy</a>
    <span>-</span>
    <a href="/">Terms of Service</a>
  </div>
</footer>
