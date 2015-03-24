<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package akrigline
 */

get_header(); ?>

<body data-spy="scroll" data-target=".top-nav" data-offset="70" <?php body_class(); ?> id="home">

<?php get_template_part('intro'); ?>

<?php get_template_part('navigation'); ?>

<article id="resume">
  <div class="container">
		<?php get_template_part('about'); ?>

		<?php get_template_part('resume'); ?>
	</div>
</article>

<?php get_template_part('portfolio'); ?>

<?php get_footer(); ?>