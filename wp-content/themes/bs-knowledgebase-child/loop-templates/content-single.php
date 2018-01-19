<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<div class="row">
	<div class="bs-title col mb-5 mt-5 ml-0 pl-0" >
		<?php the_title(); ?>
	</div>	
</div>
<div class="row">
	<div class="col-md-8 p-5 bg-white bs-content">
		<?php the_content(); ?>
	</div>
	<div class="col-md-4">
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>
	</div>
</div>