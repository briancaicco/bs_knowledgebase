<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>		
<div class="bs-search-results">
	<?php the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
'</a>' ); ?>
</div>
<div class="category-box pt-3 bs-search-results">
	<?php bs_category();?>
</div>