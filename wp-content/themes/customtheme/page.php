<?php get_header();	?>
<?php the_title();?>

<?php 
if ( have_posts() ) {		
	while ( have_posts() ) {
		the_post(); 

		the_content();


		} // end while
	} // end if
	?>	
<?php get_footer(); ?>