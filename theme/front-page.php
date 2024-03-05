<!doctype html>
<html lang="en">
  <head>
    <?php wp_head(); ?>
  </head>

  <body>
    <!-- prettier-ignore -->
    <main class="">
      <?php get_template_part("templates/navigation"); ?>
      <?php get_template_part("templates/hero"); ?>
      <div class="container prose py-16">
        <?php the_content(); ?>
      </div>
      <?php get_template_part("templates/footer"); ?>
    </main>

    <?php wp_footer(); ?>
  </body>
</html>
