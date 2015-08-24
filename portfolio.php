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

            <?php 
              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            ?>

              <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">



              <a href="<?php the_permalink(); ?>">
                <figcaption class="col-xs-10 col-sm-8 col-md-4">
                  <h2><?php the_title(); ?></h2>
                  <div class="col-xs-12 hidden-xs">
                  <?php //Gets tags for post and puts them into h5
                  $posttags = get_the_tags();
                  if ($posttags) {
                    foreach($posttags as $tag) {
                      echo '<h5>' . $tag->name . '</h5>'; 
                    }
                  } ?>
                  </div>
                  <div class="hidden-xs">
                    <?php the_excerpt(); ?>
                  </div> 
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
            <?php 
              $post_thumbnail_id = get_post_thumbnail_id();
              
              $args = array(
                'sizes' => array(
                  array(
                    'size_value'  => '50vw'
                  ),
                  array(
                    'size_value'  => '33.3333vw'
                  )
                )
              );

              $sizes = tevkori_get_sizes( $post_thumbnail_id, 'medium', $args );

              $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );


              $srcsetString = tevkori_get_srcset_string( $post_thumbnail_id, 'medium' );
            ?>

              <img src="<?php echo $image[0]; ?>" <?php echo $srcsetString; ?> sizes="<?php echo $sizes; ?>">

              <a href="<?php the_permalink(); ?>">
                <figcaption class="col-xs-10 col-sm-6 col-md-4">
                  <h3><?php the_title(); ?></h3>
                  

                  <div class="hidden-xs">
                  <?php //Gets tags for post and puts them into h5
                  $posttags = get_the_tags();
                  if ($posttags) {
                    foreach($posttags as $tag) {
                      echo '<h5>' . $tag->name . '</h5>'; 
                    }
                  } ?>
                  </div>
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