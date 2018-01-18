<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );

?>


<div class="container-fluid">
	<?php if ( have_posts() ) : ?>
		<?php printf(
			/* translators:*/
			esc_html__(' '), get_search_query()); ?>
			<?php /* Start the Loop */ ?>
			<div class="row ml-5 pl-5">
				<div class="col mt-5 ml-5" id="bs-title">
					<p>Search Results</p>
				</div>
			</div>
			<div class="row flex-row ml-5 pl-5">
				<?php while ( have_posts() ) : the_post(); ?><?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */

						?><div class="col-md-3 mt-5 ml-5" id="bs-search-results"><?php
						get_template_part( 'loop-templates/content', 'search' );
						?></div><?php
						?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>