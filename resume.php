<?php
/**
 * The template for hte Intro section of the site.
 *
 * @package akrigline
 */
?>


<?php query_posts('category_name=resume'); ?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

  <section class="col-xs-12">
    
    <header class="row">
      <div class="col-xs-12 col-sm-2 text-center">
        <?php 
        $iconField = get_field('icon');
        $icon = $iconField['url'];
        ?>

        <img src="<?php echo $icon; ?>" alt="<?php the_title(); ?>" class="icon-resume">
        <h4><?php the_title(); ?></h4>

      </div>
      <hr class="col-xs-12 col-sm-10 pull-right">
    </header>

    <div class="col-xs-12 col-sm-10 col-sm-offset-2">
      
      <?php the_content(); ?>
    
    </div>
  </section>

<?php endwhile; ?>
<?php else : ?>
  <h1>These aren't the droids you're looking for.</h1>
  <p>Move along...</p>
<?php endif; ?>

<?php wp_reset_query(); ?>

    <div class="row">
      <div class="col-xs-12 col-md-8 col-xl-12">
        <dl>
          <div class="row">
            <div class="col-xs-12 col-xl-4">
              <dt class="position">Web Guru, Co-Founder</dt>
              <dd>Creative Folk</dd>
              <dd class="small">2014-Present</dd>
              <dd>Partner and Co-Creator of a creative agency known as Creative-Folk. I specialize in Web Design and Development (Front-End). Responsible for client interactions, finances, and team management.</dd>
            </div>
            <div class="col-xs-12 col-xl-4">
              <dt class="position">Designer</dt>
              <dd>designxnine</dd>
              <dd class="small">2014-Present</dd>
              <dd>Selected to be one of ten designers in the Myers School of Art's in-house design studio. Worked primarily with print design and identity for various clients around Akron, Ohio.</dd>
            </div>
            <div class="col-xs-12 col-xl-4">
              <dt class="position">UI/UX Designer</dt>
              <dd>GorMonjee Inc.</dd>
              <dd class="small">2014-Present</dd>
              <dd>Worked with both UI and UX concepts to design and mock up GorMonjee's webapp interface.</dd>  
            </div>
          </div>           
        </dl>
      </div><!-- current positions -->
      <div class="previousExperience col-xs-12 col-md-4 col-xl-12">
        <dl class="row">
          <div class="col-xs-12 col-xl-4 margin-none">
            <div class="row">
              <div class="col-xs-6 col-md-12 col-lg-6 col-xl-12">
                <dt class="position">Web Designer</dt>
                <dd>Vestor Inc.</dd>
                <dd class="small">2014 (summer)</dd>
              </div>

              <div class="col-xs-6 col-md-12 col-lg-6 col-xl-12">
                <dt class="position">Web Design Intern</dt>
                <dd>Flashstarts Inc.</dd>
                <dd class="small">2014 (summer)</dd>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-xl-4 margin-none">
            <div class="row">
              <div class="col-xs-6 col-md-12 col-lg-6 col-xl-12">
                <dt class="position">Web Intern</dt>
                <dd>Go Getter Growth Partners</dd>
                <dd class="small">2014 (spring)</dd>
              </div>
              
              <div class="col-xs-6 col-md-12 col-lg-6 col-xl-12">
                <dt class="position">Design Consultant</dt>
                <dd>The Buchtelite</dd>
                <dd class="small">2014-2015</dd>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-xl-4 margin-none">
            <div class="row">
              <div class="col-xs-6 col-md-12 col-lg-6 col-xl-12">
                <dt class="position">Page Designer</dt>
                <dd>The Buchtelite</dd>
                <dd class="small">2012-2014</dd>
              </div>

              <div class="col-xs-6 col-md-12 col-lg-6 col-xl-12">
                <dt class="position">Web Designer</dt>
                <dd>The Buchtelite</dd>
                <dd class="small">2012-2014</dd>
              </div>
            </div>
          </div>
        </dl>
      </div><!-- .previousExperience -->
    </div><!-- row -->

    <dl>
    <dt class="position">Bachelor of Fine Arts in Graphic Design</dt>
    <dd class="small">Expected Graduation Spring 2015</dd>
      <dd>The University of Akron - Myers School of Art</dd>
    </dl>

    <div class="row">
      <dl class="col-xs-6 col-sm-3">
        <dt>Design</dt>
        <dd>Websites</dd>
        <dd>User Interface</dd>
        <dd>User Experience</dd>
      </dl>
      <dl class="col-xs-6 col-sm-3">
        <dt>Development</dt>
        <dd>HTML</dd>
        <dd>CSS, LESS, SASS</dd>
        <dd>PHP</dd>
        <dd>jQuery</dd>
      </dl>
      <dl class="col-xs-6 col-sm-3">
        <dt>Applications</dt>
        <dd>Sublime Text</dd>
        <dd>Sketch</dd>
        <dd>Adobe CS</dd>
        <dd>inVision</dd>
      </dl>
      <dl class="col-xs-6 col-sm-3">
        <dt>Languages</dt>
        <dd>English</dd>
        <dd>Mandarin</dd>
      </dl>
    </div>

    <dl class="row">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <dt>Memberships</dt>
        <dd>Student Member</dd>
        <dd class="small">American Advertising Federation, Akron</dd>
        <dd>Member</dd>
        <dd class="small">Student Design Society, University of Akron</dd>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <dt>Volunteer Work</dt>
        <dd>Videographer/Documentation</dd>
        <dd class="small"><a href="http://benitezvogl.com/projects/sara">Project S.A.R.A</a></dd>
        <dd>Student Member</dd>
        <dd class="small">Media Advisory Committee at the University of Akron</dd>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <dt>Awards</dt>
        <dd>Dean's List</dd>
        <div class="row">
          <dd class="small col-xs-5">Fall 2011</dd>
          <dd class="small col-xs-5">Spring 2012</dd>
          <dd class="small col-xs-5">Fall 2012</dd>
          <dd class="small col-xs-5">Spring 2013</dd>
          <dd class="small col-xs-5">Fall 2013</dd>
          <dd class="small col-xs-5">Spring 2014</dd>
          <dd class="small col-xs-5">Fall 2014</dd>
        </div>
      </div>
    </dl><!-- row -->