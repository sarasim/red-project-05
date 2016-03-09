<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area-front">
		<main id="main" class="site-main-front" role="main">
			<section class="banner">
				<h1 class="banner-text">Baked to <br> Perfection.</h1>
			</section>

		 <section class="menu-items container">

			 <div class="menu-item-blocks">

				 <?php
				$terms = get_terms( 'product-type');
				?>
				<?php if ( ! empty( $terms ) ) : ?>

		 		<?php foreach ($terms as $term) : ?>

			 		<img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt="" />
			  	<h3><?php echo $term->name; ?></h3>

					<p>
						<?php echo $term->description; ?> <a href="<?php echo get_term_link( $term ); ?>">See More...</a>
					</p>

		 		<?php endforeach; ?>

			<?php endif; ?>
		  </div>
		 </section>

		 <section class="latest-posts">
			 <?php
	   		$args = array( 'post_type' => 'post', 'posts_per_page' => 4 );
	   		$latest_posts = get_posts( $args );
		 	 ?>

		   <?php foreach ( $latest_posts as $post ) : setup_postdata( $post ); ?>

		 		<?php if ( has_post_thumbnail() ) : ?>
					<div class="thumbnail-wrapper">
						<?php the_post_thumbnail( 'medium' ); ?>
					</div>
				<?php endif; ?>

					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<span class="entry-meta">
						<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?>
					</span>

				<?php endforeach; wp_reset_postdata(); ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
