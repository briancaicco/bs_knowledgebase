<?php
/**
 * Template Name: Display Categories
 *
 * @package understrap
 */
	
	get_header();
?>

<div class="container">
	<div class="row">
		<div class="col mt-5 bs-title">
			<h3><?php the_title(); ?></h3>
		</div>
	</div>
	<div class="row">
		<?php get_template_part( 'loop-templates/content', 'categories' ); ?>
	</div>
</div>
<?php get_footer(); ?>