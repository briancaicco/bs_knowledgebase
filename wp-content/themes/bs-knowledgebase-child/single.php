<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>


			<!-- <?php get_template_part( 'global-templates/left-sidebar-check' ); ?> -->

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

						<!-- <?php understrap_post_nav(); ?> 

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						// comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>


		<!-- <?php get_template_part( 'global-templates/right-sidebar-check' ); ?> 


<!-- <?php get_footer(); ?> 
