<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

?>
		<?php the_title( sprintf( '<div id="bs-search-results"> <a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></div>' ); ?>
		<div class="mt-3" id="category-box">
			<?php bs_category();?>
		</div>
		<?php if ( 'post' == get_post_type() ) : ?>
			<!-- <div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div> -->
		<?php endif; ?>
	<!-- <div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<footer class="entry-footer">
		<?php understrap_entry_footer(); ?>
	</footer>-->
