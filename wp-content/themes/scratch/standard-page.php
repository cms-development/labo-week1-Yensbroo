<!-- header -->
<?php get_header(); ?>

<!-- als er posts zijn, loop door de posts, en geef de huidige post -->
<?php if(have_posts()) : while(have_posts()) : the_post() ?>

<h1>
  <?php the_title(); ?>
</h1>

<div>
  <?php the_content(); ?>
</div>

<!-- loop sluiten -->
<?php endwhile; ?>

<?php else : ?>

<!-- sluit de if-conditional -->
<?php endif; ?>



  <?php wp_reset_postdata(); ?>
</div>
<!-- sidebar -->
<?php get_sidebar(); ?>

<!-- footer -->
<?php get_footer(); ?>