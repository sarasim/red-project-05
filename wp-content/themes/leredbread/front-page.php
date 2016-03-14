<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="banner">
				<h1 class="banner-text">Baked to Perfection.</h1>
			</section>
		 	<section class="menu-items container">
				<div class="menu-item-inner">

				<?php $terms = get_terms( 'product-type');?>

				<?php if ( ! empty( $terms ) ) : ?>

					<?php foreach ($terms as $term) : ?>

 					<div class="menu-item-wrapper>">
					 	<img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt="" />
			  	 	<h3><?php echo $term->name; ?></h3>
					 	<p>
			    		<?php echo $term->description; ?> <a href="<?php echo get_term_link( $term ); ?>">See More...</a>
					 	</p>
				  </div>

		 			<?php endforeach; ?>

				<?php endif; ?>

		  	</div>
		 	</section>
		 	<div class="click-for-more container">
			 	<p><span>All of our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently.</span>
					<a href="<?php bloginfo('template_directory'); ?>/redbread/products" class="btn">See Our Products</a>
			  </p>
		 	</div>
 			<section class="latest-posts">
				<div class="latest-posts-inner container">
			 	 <h2>Our Latest News</h2>
			 	 <hr class="decorative"></hr>

			 		<?php $args = array( 'post_type' => 'post', 'posts_per_page' => 4 ); $latest_posts = get_posts( $args );?>

					<ul>

		   		<?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>

				 		<li>

		 		   		<?php if ( has_post_thumbnail() ) : ?>

								<div class="thumbnail-wrapper">
									<?php the_post_thumbnail( 'large' ); ?>
								</div>

							<?php endif; ?>

							<div class="post-info">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<span class="entry-meta">

									<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>

								</span>
							</div>
					 </li>

					<?php endforeach; wp_reset_postdata(); ?>

					</ul>
			 		</div>
			</section>
			<section class="testamonials container">
				<div class="testamonials-inner container">
					<h2> What Others Say About Us</h2>
					<hr class="decorative"></hr>
						<ul>
							<li>
								<img src="<?php bloginfo('template_directory'); ?>/images/testimonial-headshots/dr-dosist-headshot.png" alt="Dr. Dosist's Headshot" />
								<div class="review">
									<p>Healthy food be damned! If you are a bakery and sweet addict like myself this place is life changing. So many goodies. Have a cheat day and eat all the pretzels!</p>
									<p class="reviewer-name">Dr. Dosist</p>
									<p class="reviewer-info">Nutritionist – <a class="visitor-link" href="http://www.redacademy.com" target="_blank"><span class="company">Health Time Clinic</span></a></p>
								</div>
							</li>
							<li>
								<img src="<?php bloginfo('template_directory'); ?>/images/testimonial-headshots/maxi-milli-headshot.png" alt="Maxi Milli's Headshot" />
								<div class="review">
									<p>Do you like bread? Seriously, who doesn’t? You have to check Le Red Bread’s lovely loaves. Fresh flavours every day…need I say more?</p>
									<p class="reviewer-name">Maxi Milli</p>
									<p class="reviewer-info">Chef – <a class="visitor-link" href="http://www.redacademy.com" target="_blank"><span class="company">Sailor Spoon</span></a></p>
								</div>
							</li>
							<li>
								<img src="<?php bloginfo('template_directory'); ?>/images/testimonial-headshots/ana-vandana-headshot.png" alt="Ana Vandana's Headshot" />
								<div class="review">
									<p>Excellent cookies! They always have unique flavours and the cookies are always super fresh. Make sure you get them before they sell out! And keep an eye out on holidays, the flavour combinations they come up with are brilliant. Delicious!</p>
									<p class="reviewer-name">Anna Vandana</p>
									<p class="reviewer-info">Author – <a class="visitor-link" href="http://www.redacademy.com" target="_blank"><span class="company">Food Is Great Magazine</span></a></p>
								</div>
							</li>
							<li>
								<img src="<?php bloginfo('template_directory'); ?>/images/testimonial-headshots/martha-m-masters-headshot.png" alt="Martha M. Masters Headshot" />
								<div class="review">
									<p>Where has this bakery been all my life! I absolutely love their cookies and muffins. Nom nom.</p>
									<p class="reviewer-name">Martha M. Masters</p>
									<p class="reviewer-info">Food Critic – <a class="visitor-link" href="http://www.redacademy.com" target="_blank"><span class="company">WikiTravel</span></a></p>
								</div>
							</li>
						</ul>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
