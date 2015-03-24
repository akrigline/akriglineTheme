<?php
/**
 * The template for hte Intro section of the site.
 *
 * @package akrigline
 */
?>

<article id="portfolio">
  <div class="container-fluid">


    <?php query_posts('category_name=work_web'); ?>

    <?php if (have_posts()) : ?>

      <ul class="list-unstyled full-width">

        <?php while (have_posts()) : the_post(); ?>

          <li>
            <figure>
              <?php get_post_thumbnail( 'full' ); ?>

              <a href="<?php the_permalink(); ?>">
                <figcaption class="col-xs-10 col-sm-6 col-md-4">
                  <h1><?php the_title(); ?></h1>
                  
                  <?php //Gets tags for post and puts them into h5
                  $posttags = get_the_tags();
                  if ($posttags) {
                    foreach($posttags as $tag) {
                      echo '<h5>' . $tag->name . '</h5>'; 
                    }
                  } ?>

                  <?php the_excerpt(); ?> 
                  <div class="continue">See Full Project<span class="glyphicon glyphicon-chevron-right"></span></div>
                </figcaption>
              </a>
            </figure>
          </li>

        <?php endwhile; ?>

      </ul>

    <?php else : ?>
      <h1>These aren't the droids you're looking for.</h1>
      <p>Move along...</p>
    <?php endif; ?>

    <?php wp_reset_query(); ?>

    

    <?php query_posts('category_name=work_other'); ?>

    <?php if (have_posts()) : ?>

      <ul class="list-unstyled other-work row">

        <?php while (have_posts()) : the_post(); ?>

          <li>
            <figure>
              <?php get_post_thumbnail( 'large' ); ?>

              <a href="<?php the_permalink(); ?>">
                <figcaption class="col-xs-10 col-sm-6 col-md-4">
                  <h1><?php the_title(); ?></h1>
                  
                  <?php //Gets tags for post and puts them into h5
                  $posttags = get_the_tags();
                  if ($posttags) {
                    foreach($posttags as $tag) {
                      echo '<h5>' . $tag->name . '</h5>'; 
                    }
                  } ?>
                </figcaption>
              </a>
            </figure>
          </li>

        <?php endwhile; ?>

      </ul>

    <?php else : ?>
      <h1>These aren't the droids you're looking for.</h1>
      <p>Move along...</p>
    <?php endif; ?>

    <?php wp_reset_query(); ?>

  </div>
</article><!-- portfolio -->