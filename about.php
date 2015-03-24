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
    <div class="col-xs-12 col-md-8">
      <?php the_content(); ?>

      <p class="col-xs-12 col-md-8">In my twenty-something years on this earth I’ve flown around the world seven times, been to nine countries, and have called two continents home. I lived in China for 10 years. In that time my interactions with people from all over the world shaped me into a person who sees things with a global perspective.</p>
      <p class="col-xs-12 col-md-6">Most who know me would classify me as a ‘geek’ and I wear that title proudly. I taught myself how to code HTML and CSS when I was in 8th grade and have been learning about front-end development ever since. The Graphic Design program at The University of Akron has only solidified my love for all things web design.</p>
      <blockquote class="col-xs-12 col-md-6 hidden-xs hidden-sm">
        <h2><?php the_field('blurb_2'); ?></h2>
      </blockquote>
      <p class="col-xs-12 col-md-8">I enjoy reading the classic works of J.R.R. Tolkien, C.S. Lewis, and Orson Scott Card, as well as the more recent Christopher Paolini and Stephen Lawhead. I consider myself a Tolkeinian first and foremost, but also a Trekkie, budding Whovian, and Star Wars fan. As much as I use Apple devices for design, I also have a PC that I built myself for the purpose of gaming. Dabbling in 3D printing takes up my spare time and Coca-Cola is the fuel that feeds my creative engine.</p>
    </div>
  </div>
</section>


<?php endwhile; ?>
<?php else : ?>
  <h1>These aren't the droids you're looking for.</h1>
  <p>Move along...</p>
<?php endif; ?>

<?php wp_reset_query(); ?>