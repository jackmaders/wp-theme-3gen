<!-- prettier-ignore -->
<?php if (function_exists("the_custom_logo")) {
    $custom_logo_id = get_theme_mod("custom_logo");
    $logo = wp_get_attachment_image_src($custom_logo_id, $size = "medium");
} ?>

<nav
  class="bg-glass container fixed inset-0 z-50 h-fit rounded-b py-4 text-light sm:relative"
  data-script="navigation"
>
  <div class="flex h-full items-center justify-between">
    <a href="/">
      <img class="h-10 w-auto" src="<?= $logo[0] ?>" alt="logo" />
    </a>

    <button
      class="toggle-button after:mask-bars-3 after:block after:size-11 after:bg-light after:content-empty sm:hidden"
    >
      <spam class="sr-only">toggle menu</spam>
    </button>
  </div>
  <div
    class="dropdown-menu grid w-full transition-all duration-300 max-sm:grid-rows-0fr sm:flex sm:justify-end"
  >
    <div class="flex flex-col gap-3 overflow-hidden p-0.5">
      <!-- prettier-ignore -->
      <?php wp_nav_menu([
          "menu" => "primary",
          "container" => "",
          "menu_class" =>
              "flex flex-col sm:flex-row justify-start sm:w-fit text-right",
      ]); ?>

      <a class="button" href="/">Get a Quote</a>
    </div>
  </div>
</nav>
