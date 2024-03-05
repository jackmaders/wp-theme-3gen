<!doctype html>
<html lang="en">
  <head>
    <?php wp_head(); ?>
  </head>

  <body>
    <!-- prettier-ignore -->
    <main class="">
      <?php get_template_part("templates-parts/navigation"); ?>
      <?php get_template_part("templates-parts/hero"); ?>
      <?php the_content(); ?>
      <?php get_template_part("templates-parts/footer"); ?>
    </main>

    <?php wp_footer(); ?>
  </body>
</html>
