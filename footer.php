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
        <ul class="list-unstyled">
          <li><a href="https://github.com/akrigline" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/svg/github.svg" alt=""></a></li>
          <li><a href="https://linkedin.com/in/akrigline" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/svg/linkedin.svg" alt=""></a></li>
          <li><a href="http://akrigline.tumblr.com" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/svg/tumblr.svg" alt=""></a></li>
          <li><a href="http://behance.net/akrigline" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/svg/behance.svg" alt=""></a></li>
          <li><a href="https://twitter.com/akrigline" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/svg/twitter.svg" alt=""></a></li>
          <li><a href="https://plus.google.com/+AndrewKrigline" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/svg/gplus.svg" alt=""></a></li>
          <li><a href="http://designspiration.net/akrigline" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/svg/designspiration.svg" alt=""></a></li>
        </ul>
      </div><!-- social -->

    </div>
  </div>
</footer><!-- contact -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

<script src="<?php bloginfo('template_directory'); ?>/js/vendor/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/vendor/imagesloaded.pkgd.min.js"></script>

<?php if ( is_front_page() ) : ?>

  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.sticky.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.scrollTo.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.localScroll.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/morphext.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.parallax.min.js"></script>

<?php endif; ?>

<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49876573-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>

</body>
</html>