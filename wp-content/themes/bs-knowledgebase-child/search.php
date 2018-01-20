<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="container">
	<?php if ( have_posts() ) : ?>
		<?php printf(
			/* translators:*/
			esc_html__(' '), get_search_query()); ?>
			<?php /* Start the Loop */ ?>
			<div class="row">
				<div class="col mt-5 bs-title">
					<h3>Search Results</h3>
				</div>
			</div>
			<div class="row flex-row">
				<?php while ( have_posts() ) : the_post(); ?><?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */

						?>
						<div class="col-md-4 d-flex align-items-stretch">
							<div class="card mt-5 w-100 p-1 pt-2">
								<?php get_template_part( 'loop-templates/content', 'search' ); ?>	
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
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>