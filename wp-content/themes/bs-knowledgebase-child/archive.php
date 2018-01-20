<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
?>

			
<div class="container">
	<?php if ( have_posts() ) : ?>
			<div class="row">
				<div class="col mt-5 bs-title">
					<h3><?php the_archive_title( '', '' );?></h3>
				</div>
			</div>
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
				<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						?><div class="col-md-4 d-flex align-items-stretch">
							<div class="card mt-5 w-100 p-1 pt-2">
								<div class="card-body">
									<?php get_template_part('loop-templates/content');?>
								</div>
							</div>
						</div>
					<?php endwhile; else : ?>
						<div class="row">
							<div class="col text-center ml-auto mt-3 mt-md-5 pt-md-5">
								<h3>Sorry mate, nothing here matches your search. </h3>
								<h3>¯\_(ツ)_/¯</h3>
								<p><a href="<?php bloginfo( 'url' ); ?>">Try again?</a></p>
							</div>
						</div>
				<?php endif;  ?>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>