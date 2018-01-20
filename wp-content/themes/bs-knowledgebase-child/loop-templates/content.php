<?php
/**
 * Post rendering content according to caller of get_template_part.
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