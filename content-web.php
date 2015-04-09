<?php
/**
 * @package akrigline
 */
?>

<div class="portfolio-single container clearfix">
  <div class="device device-desktop">
    <div class="viewport loading" data-url="<?php the_field('live_url'); ?>">
      <iframe id="web-preview"></iframe>
      <?php $preview_img_lg = get_field('web_preview_img_lg');
            $preview_img_md = get_field('web_preview_img_md');
            $preview_img_sm = get_field('web_preview_img_sm');
            $preview_img_lg_url = $preview_img_lg['url'];
            $preview_img_md_url = $preview_img_md['url'];
            $preview_img_sm_url = $preview_img_sm['url']; ?>
      <img id="web-preview-img-lg" src="<?php echo $preview_img_lg_url; ?>" alt="Desktop Preview Image of the Project - <?php the_title();?>" class="sr-only">
      <img id="web-preview-img-md" src="<?php echo $preview_img_md_url; ?>" alt="Tablet Preview Image of the Project - <?php the_title();?>">
      <img id="web-preview-img-sm" src="<?php echo $preview_img_sm_url; ?>" alt="Phone Preview Image of the Project - <?php the_title();?>">
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