<?php
/**
 * The template for displaying archive pages.
 *
 * @ package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

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
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
