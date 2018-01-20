<?php get_header(); ?>
<div class="container mt-5 pt-5">
	<div class="row justify-content-md-center">
		<div class="col-3 text-center mt-5" id="homepage">
			<a href="https://beanstalkdigital.com/">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/bs-logo.svg">
			</a>
			<p class="truncate mt-4"><i>Get Smarter</i></p>
		</div>
	</div>
	<div class="row justify-content-md-center">
		<div class="col-8 mt-5">
			<?php get_search_form();?>
		</div>
	</div>
	<div class="row mt-md-5">
		<?php get_template_part( 'loop-templates/content', 'categories' ); ?>
	</div>
</div>
<?php get_footer(); ?>