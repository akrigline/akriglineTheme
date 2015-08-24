<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package akrigline
 */

get_header(); ?>

<?php get_template_part('navigation'); ?>

		<main id="main" class="container" role="main">

			<section class="error-404 not-found">
			<h1>These aren't the droids you're looking for.</h1>
			<p>Something's wrong here. I'm sure it's my fault but if you happened to follow a link to this page... well that link's broken and you'll get bonus points if you inform the webmaster that owns that link.</p>

			<a href="<?php bloginfo('url'); ?>"><h1>In the meantime, you should head home!</h1></a>

			</section><!-- .error-404 -->

		</main><!-- #main -->

<?php get_footer(); ?>
