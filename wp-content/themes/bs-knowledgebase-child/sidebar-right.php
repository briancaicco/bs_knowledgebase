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

	<div class="col">
		<p class="lead bs-revised">Last Revised</p>
		<div class="bs-time-posted pt-3"><?php understrap_posted_on(); ?></div><br>
		<p class="lead bs-revised">Categories</p>
		<div class="mr-auto category-box pt-3">
			<?php bs_category();?>
		</div>
		<p class="lead mt-4 bs-revised">Tags</p>
		<div class="mr-auto category-box pt-3">
			<ul>
				<?php bs_tags();?>
			</ul>
		</div>
	</div>
