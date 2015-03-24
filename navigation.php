<?php
/**
 * The template for hte Intro section of the site.
 *
 * @package akrigline
 */
?>


<?php if ( is_front_page(); ) {
  $url = '';
} else {
  $url = bloginfo('url') . '/';
} ?>

<nav class="navbar top-nav" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="brand" href="<?php echo $url; ?>#welcome">
        <img src="<?php bloginfo('template_path'); ?>/img/svg/codeKfinal.svg" alt="">
        <span class="top-hide">Andrew Krigline</span>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right cl-effect-1">

        <li style="display:none;"><a href="#welcome"></a></li>

        <li><a href="<?php echo $url; ?>#resume">My Resume</a></li>

        <li><a href="<?php echo $url; ?>#portfolio">My Work</a></li>

        <li><a href="<?php echo $url; ?>#contact">Contact</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
