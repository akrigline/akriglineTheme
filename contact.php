<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package akrigline
 */
?>

    <div class="col-xs-12 col-md-6 contactContainer">
      <h1>Get in Touch</h1>

      <?php echo do_shortcode( '[contact-form-7 id="106" title="Get in Touch"]' ); ?>

    </div><!-- contactContainer -->

  <form>
    <div class="form-group">
      <label for="name">Your Name</label>
      <input type="text" class="form-control" id="name" placeholder="Barrel Rider">
    </div>

    <div class="form-group">
      <label for="email">Your Email</label>
      <input type="email" class="form-control" id="email" placeholder="I promise I won't spam you.">
    </div>

    <div class="form-group">
      <label for="message">What can I help you with?</label>
      <textarea class="form-control" id="message"></textarea>
    </div>
  </form>