<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>


<div class="bs-time-modified">
	<h5 class="pb-3">Last Revised</h5>
	<p><?php echo get_post_modified_time('F d, Y', true);?></p>		
</div>

<div class="mt-5 mr-auto category-wrapper">
	<h5 class="pb-3">Categories</h5>
	<?php bs_category();?>
</div>

<div class="mt-5 mr-auto tag-wrapper">
	<h5 class="pb-3">Tags</h5>
	<ul>
		<?php bs_tags();?>
	</ul>
</div>

