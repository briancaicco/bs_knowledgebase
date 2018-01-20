<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

?>		
<div class="article-title">
	<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a>' ); ?>
</div>
<div class="category-wrapper pt-3">
	<?php bs_category();?>
</div>
