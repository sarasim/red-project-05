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

<!--grid-->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

        <!---Create a product square-->
        <?php if ( has_post_thumbnail() ) : ?>
    			<?php the_post_thumbnail( 'medium' ); ?>
    		<?php endif; ?>

        	<?php the_title(); ?>

          <?php echo CFS()->get( 'price' ); ?>

		

			    <?php endwhile; ?>

		    	<?php the_posts_navigation(); ?>

	    	<?php else : ?>

			 <?php get_template_part( 'template-parts/content', 'none' ); ?>
			 	<?php wp_reset_postdata(); ?>
	   	<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
