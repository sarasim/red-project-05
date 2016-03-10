<?php
/**
 * Template Name: About Page
 */

 get_header(); ?>

 <div id="primary" class="content-area">
   <main id="main" class="site-main" role="main">

    <div class="about container">

      <header class="about-header">
       <h1>Learn About Our Team and Culture</h1>
        <p><?php echo CFS()->get( 'tagline' ); ?></p>
      </header>

      <div class="entry-content">

        <div class="about-info">
          <div class="about-info-item">
                 <img src="../images/team.jpg" />
            <h2>Le Red Bread Team</h2>
            <p><?php echo CFS()->get( 'team_copy' ); ?></p>
          </div>

          <div class="about-info-item">
            <img src="../images/bakery,jpg" />
            <h2>Le Red Bread Bakery</h2>
            <p><?php echo CFS()->get( 'bakery_copy' ); ?></p>
          </div>
        </div>

        <div class="our-story">
          <h2>Our Story</h2>
          <p><?php echo CFS()->get( 'our_story_copy' ); ?></p>
        </div>
      </div>
      <div class="click-for-more container">
        <p>Feel free to contact us with any questions coments or suggestions. We even take custom orders!</p>
          <button><a href="<?php echo get_term_link( $term ); ?>">Contact Us</a></button>
    </div>
  </main>
 </div>

 <?php get_footer(); ?>
