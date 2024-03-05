<!-- prettier-ignore -->
<?php if (function_exists("the_custom_logo")) {
    $custom_logo_id = get_theme_mod("custom_logo");
    $logo = wp_get_attachment_image_src($custom_logo_id, $size = "medium");
} ?>

<nav
  class="bg-glass fixed inset-0 z-50 h-fit rounded-b py-4 text-light"
  data-script="navigation"
>
  <div class="container flex flex-col lg:flex-row">
    <div class="flex h-full items-center justify-between">
      <a href="/">
        <img class="h-10 w-auto lg:h-12" src="<?= $logo[0] ?>" alt="logo" />
      </a>

      <button
        class="toggle-button after:mask-bars-3 after:block after:size-11 after:bg-light after:content-empty lg:hidden"
      >
        <spam class="sr-only">toggle menu</spam>
      </button>
    </div>
    <div
      class="dropdown-menu grid w-full transition-all duration-300 max-lg:grid-rows-0fr lg:flex lg:justify-end"
    >
      <div
        class="flex flex-col items-stretch gap-3 overflow-hidden p-0.5 md:items-center lg:flex-row lg:gap-7"
      >
        <!-- prettier-ignore -->
        <?php wp_nav_menu([
          "menu" => "primary",
          "container" => "",
          "menu_class" =>
              "flex flex-col w-full justify-start text-right col lg:flex-row lg:w-fit lg:gap-5",
      ]); ?>

        <a class="button" href="/">Get a Quote</a>
      </div>
    </div>
  </div>
</nav>
