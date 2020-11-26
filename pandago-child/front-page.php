<?php /* Template Name: front-page*/ ?>

<?php get_header(); ?>

<div class="site-content fluid-container">

      <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ): the_post(); ?>
          <div class="editor"><?php the_content(); ?></div>
        <?php endwhile; ?>
      <?php endif; ?>

</div>

<?php get_footer(); ?>