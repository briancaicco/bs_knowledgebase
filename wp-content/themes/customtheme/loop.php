<?php 
if ( have_posts() ) {		
	while ( have_posts() ) {
		the_post(); 
		?>

		<?php
		} // end while
	} // end if
	?>	