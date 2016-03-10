<?php
/**
 * The template for displaying archive pages.
 *
 * @ package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="products-page">
			<?php if ( have_posts() ) : ?>

				<header class="products-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
					<p>We are a team of creative and talented individuals who love making delicious treats.</p>
				</header><!-- .page-header -->

				<section class="menu-items container">

	 			 <div class="menu-item-inner">

	 					 <?php $terms = get_terms( 'product-type');
	 			  	?>

	 				<?php if ( ! empty( $terms ) ) : ?>

	 		 		<?php foreach ($terms as $term) : ?>


	 				 <div class="menu-item-wrapper>">
	 					 <img src="<?php echo get_template_directory_uri() . '/images\/' . $term->slug; ?>.png" alt="" />
	 			  		<h3><?php echo $term->name; ?></h3>
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
    				<?php the_post_thumbnail( 'medium' ); ?>
    			<?php endif; ?>

        	<?php the_title(); ?>

          <?php echo CFS()->get( 'price' ); ?>


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
