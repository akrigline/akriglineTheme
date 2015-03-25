<?php
/**
 * @package akrigline
 */
?>

<div class="portfolio-single container clearfix">
  <div class="device device-desktop">
    <div class="viewport loading">
      <iframe src="<?php the_field('live_url'); ?>"></iframe>
    </div>
  </div>

  <div class="buttons-devices">
    <h2>Change Device</h2>
    <button type="button" class="btn btn-device active" id="mbp-toggle">
      <img src="<?php bloginfo('template_directory'); ?>/img/svg/device-01.svg" class="desktop">
      <h5>desktop</h5>
    </button>
    <button type="button" class="btn btn-device" id="ipad-toggle">
      <img src="<?php bloginfo('template_directory'); ?>/img/svg/device-02.svg" class="tablet">
      <h5>tablet</h5>
    </button>
    <button type="button" class="btn btn-device" id="iphone-toggle">
      <img src="<?php bloginfo('template_directory'); ?>/img/svg/device-03.svg" class="mobile">
      <h5>mobile</h5>
    </button>
  </div>
  <div class="col-xs-12 col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
    <h1><?php the_title(); ?></h1>
    <p><?php the_content(); ?></p>
  </div>
</div>