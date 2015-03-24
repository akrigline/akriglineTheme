<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package akrigline
 */
?>

<footer id="contact">
  <div class="container">
    <div class="row">

      <?php get_template_part('micro'); ?>

      <?php get_template_part('contact'); ?>

      <div class="social col-xs-12">
        <h5>Feel free to stalk me</h5>
        <a href=""><img src="img/svg/github.svg" alt=""></a>
        <a href=""><img src="img/svg/linkedin.svg" alt=""></a>
        <a href=""><img src="img/svg/gplus.svg" alt=""></a>
        <a href=""><img src="img/svg/designspiration.svg" alt=""></a>
        <a href=""><img src="img/svg/twitter.svg" alt=""></a>
        <a href=""><img src="img/svg/tumblr.svg" alt=""></a>
      </div><!-- social -->

    </div>
  </div>
</footer><!-- contact -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_path'); ?>/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

<script src="<?php bloginfo('template_path'); ?>/js/vendor/bootstrap.min.js"></script>

<?php if ( is_front_page() ) : ?>

  <script src="<?php bloginfo('template_path'); ?>/js/vendor/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_path'); ?>/js/vendor/jquery.sticky.js"></script>
  <script src="<?php bloginfo('template_path'); ?>/js/vendor/jquery.scrollTo.min.js"></script>
  <script src="<?php bloginfo('template_path'); ?>/js/vendor/jquery.localScroll.min.js"></script>
  <script src="<?php bloginfo('template_path'); ?>/js/vendor/morphext.min.js"></script>
  <script src="<?php bloginfo('template_path'); ?>/js/vendor/jquery.parallax.min.js"></script>

<?php endif; ?>

<script src="<?php bloginfo('template_path'); ?>/js/main.js"></script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

<?php wp_footer(); ?>

</body>
</html>