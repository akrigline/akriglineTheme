<?php
/**
 * The template for hte Intro section of the site.
 *
 * @package akrigline
 */
?>

<?php query_posts('category_name=about'); ?>


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<section>
  <header class="col-xs-12">
    <h1 class="col-xl-offset-1 col-xs-12"><?php the_field('blurb_1'); ?><span class="hidden-md hidden-lg"><?php the_field('blurb_2'); ?></span></h1>
  </header>
  <div class="col-xs-12 col-sm-10 col-sm-offset-2">
      <?php the_content(); ?>
  </div>
</section>


<?php endwhile; ?>
<?php else : ?>
  <h1>These aren't the droids you're looking for.</h1>
  <p>Move along...</p>
<?php endif; ?>

<?php wp_reset_query(); ?>