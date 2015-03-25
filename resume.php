<?php
/**
 * The template for hte Intro section of the site.
 *
 * @package akrigline
 */
?>


<?php query_posts('category_name=resume&order=ASC'); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

  <section class="col-xs-12">
    
    <header class="row">
      <div class="col-xs-12 col-sm-2 text-center">
        <?php 
        $iconField = get_field('icon');
        $icon = $iconField['url'];
        ?>

        <img src="<?php echo $icon; ?>" alt="<?php the_title(); ?>" class="icon-resume">
        <h4><?php the_title(); ?></h4>

      </div>
      <hr class="col-xs-12 col-sm-10 pull-right">
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