<?php
/**
 * The template for displaying all single posts.
 *
 * @package akrigline
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
