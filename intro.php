<?php
/**
 * The template for hte Intro section of the site.
 *
 * @package akrigline
 */
?>

<section id="intro">
  <div class="imagePanner">
    <ul id="scene" class="panning list-unstyled">
      <li class="layer base" data-depth="0.00">
        <img src="<?php bloginfo('template_directory'); ?>/img/multi-me.jpg" alt="">
      </li>
      <li class="layer" data-depth="0.1">
        <header class="name">
          <div class="centerme">
            <img src="<?php bloginfo('template_directory'); ?>/img/svg/codeKfinal.svg" alt="akrigline">
            <h1>Andrew Krigline</h1>
            <div class="scrollThrough">
              <h3>Web Guru, Computer Geek, Front-End Developer, Tolkeinian, UI/UX Dabbler, PC Gamer, Story Enjoyer, 3D Printer</h3>
            </div>
          </div>
        </header>
      </li>
      <li class="layer overlay" data-depth="0.0">
        <img src="<?php bloginfo('template_directory'); ?>/img/multi-me-overlay.png" alt="">
      </li>
    </ul>
  </div>
</section>

<div class="welcome container-fluid"></div>
