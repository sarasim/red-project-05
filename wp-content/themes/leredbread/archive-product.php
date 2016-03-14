<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container">

			<?php if ( have_posts() ) : ?>

			<section class="products-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
					<p>We are a team of creative and talented individuals who love making delicious treats.</p>
			<!-- .page-header -->

				<hr class="decorative"></hr>

				<div class="menu-items container">

	 				<?php $terms = get_terms( 'product-type');
	 			  ?>

	 				<?php if ( ! empty( $terms ) ) : ?>

	 		 		<?php foreach ($terms as $term) : ?>

	 				 	<div class="menu-item-wrapper>">
	 					 	<a href="<?php echo get_term_link( $term ); ?>"><img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt="" />

							<h3><?php echo $term->name; ?></h3></a>

	 				 	</div>

	 		 		<?php endforeach; ?>

	 			 <?php endif; ?>

			 </div>
			</section>

			<div class="product-grid container">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

        <div class="product-wrapper">
        	<?php if ( has_post_thumbnail() ) : ?>
    				<a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'large' ); ?></a>
    			<?php endif; ?>

					<div class="product-info">
        		<span class="product-title"><?php the_title(); ?></span>
						
          	<span class="price"><?php echo CFS()->get( 'price' ); ?></span>
					</div>

				</div>
			    <?php endwhile; ?>

		    	<?php the_posts_navigation(); ?>

	    	<?php else : ?>

			 <?php get_template_part( 'template-parts/content', 'none' ); ?>
			 	<?php wp_reset_postdata(); ?>


	   	<?php endif; ?>

		  </div>
		</div>
	 </main><!-- #main -->
 </div><!-- #primary -->

<?php get_footer(); ?>
