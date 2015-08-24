<?php
/**
 * The template for displaying all single posts.
 *
 * @package akrigline
 */

get_header(); ?>

<body <?php body_class(); ?>>

<?php

get_template_part('navigation');

while ( have_posts() ) : the_post();

  if ( in_category('work_web') ) {

    get_template_part( 'content', 'web' );

  } elseif ( in_category('work_other') ) {

    get_template_part( 'content', 'portfolio' );

  } else {

    get_template_part( 'content' );

  } 

endwhile; // end of the loop.

?>

<?php get_footer(); ?>