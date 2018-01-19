<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap
 */

?>

<div class="container">
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="input-group pb-3 pr-3 border border-dark border-top-0 border-left-0 border-right-0">
		<input class="form-control" id="bs-search-bar" name="s" type="text" value="<?php the_search_query(); ?>">
		<span class="input-group-btn">
			<div class="input-group-append">
				<button id="bs-search-btn" type="button">
					<img src="<?php echo  get_stylesheet_directory_uri(); ?>/img/bs-search.svg">
				</button>
			</div>
		</span>
		</div>
	</form>
</div>
