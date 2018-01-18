<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<div class="row mt-5">
	<div class="col text-center mb-5" id="bs-title">
		<?php the_title(); ?>
	</div>	
</div>

<div class="row ml-5 ">
	<div class="col-md-7 ml-5 p-5 bg-white">
		<?php the_content(); ?>
	</div>
	<div class="col-md-4">
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
	</div>
</div>
