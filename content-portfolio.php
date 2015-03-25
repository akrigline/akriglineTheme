<?php
/**
 * @package akrigline
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>
<?php remove_filter ('the_content', 'wpautop'); ?>
	<div class="clearfix">
    <h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
  </div>
</article><!-- #post-## -->