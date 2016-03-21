<?php
/**
 * The template for the about page.
 *
 * @package RED_Starter_Theme
 */

 get_header(); ?>

 <div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">
     <div class="about-page container">
      <section class="about-header">
       <h1>Learn About Our Team and Culture</h1>
        <p><?php echo CFS()->get( 'tagline' ); ?></p>
        <hr class="decorative"></hr>
      </section>
      <div class="entry-content">
        <div class="about-info">
          <div class="about-info-item">
            <img src="<?php get_template_directory_uri(); ?>/images/team.jpg" alt="Le Red Bread Team" />
            <h3>Le Red Bread Team</h3>
            <span class="sub-header">Baking up a storm every day.</span>
            <p><?php echo CFS()->get( 'team_copy' ); ?></p>
          </div>
          <div class="about-info-item">
            <img src="<?php get_template_directory_uri(); ?>/images/bakery.jpg" alt="Le Red Bread Bakery" />
            <h3>Le Red Bread Bakery</h3>
            <span class="sub-header">A home away from home.</span>
            <p><?php echo CFS()->get( 'bakery_copy' ); ?></p>
          </div>
        </div>
        <div class="our-story">
          <h2>Our Story</h2>
          <p><?php echo CFS()->get( 'our_story_copy' ); ?></p>
        </div>
      </div>
      <div class="contact-us container clearfix">
        <p><span>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</span>
          <a href="<?php get_template_directory_uri(); ?>/contact" class="btn">Contact Us</a>
        </p>
      </div>
    </div>
  </main>
 </div>

 <?php get_footer(); ?>
