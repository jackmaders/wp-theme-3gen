<?php if (function_exists("the_custom_logo")) {
    $custom_logo_id = get_theme_mod("custom_logo");
    $logo = wp_get_attachment_image_src($custom_logo_id, $size = "medium");
} ?>

<nav
  class="from-dark/80 to-dark/40 text-light fixed container inset-0 z-50 h-fit rounded-b bg-gradient-to-br py-4 backdrop-blur-lg sm:relative"
  data-script="navigation"
>
  <div class="flex h-full items-center justify-between">
    <a href="/">
      <img class="h-10 w-auto" src="<?= $logo[0] ?>" alt="logo" />
    </a>

    <button class="toggle-button sm:hidden after:content-empty after:size-11 after:block after:bg-light after:mask-bars-3">
      <spam class="sr-only">toggle menu</spam>
    </button>
  </div>
  <div
    class="dropdown-menu max-sm:grid-rows-0fr grid w-full transition-all duration-300 sm:flex sm:justify-end "
  >
    <div class="flex flex-col gap-3 overflow-hidden p-0.5">
      <?php wp_nav_menu([
          "menu" => "primary",
          "container" => "",
          "menu_class" =>
              "navbar-links flex flex-col sm:flex-row justify-start sm:w-fit text-right [&>li>a]:w-full [&>li>a]:-outline-offset-2 [&>li>a]:h-full [&>li>a]:flex [&>li>a]:items-center [&>li>a]:justify-between [&>li>a]:py-3 [&>li>a::before]:content-empty [&>li>a::before]:bg-light [&>li>a::before]:size-6 [&>li>a::before]:mask-chevron-left",
      ]); ?>

      <a class="button button--small" href="/">Get a Quote</a>
    </div>
  </div>
</nav>



z