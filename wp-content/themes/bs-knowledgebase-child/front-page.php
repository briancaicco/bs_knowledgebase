<?php get_header(); ?>
<div class="container mt-5 pt-5">
	<div class="row justify-content-md-center">
		<div class="col-3 text-center mt-5" id="homepage">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bs-logo.svg">
			<br><br>
			<p class="truncate"><i>Get Smarter</i></p>
		</div>
	</div>
	<div class="row justify-content-md-center">
		<div class="col-8 mt-5">
			<?php get_search_form();?>
		</div>
	</div>
</div>
<?php get_footer(); ?>