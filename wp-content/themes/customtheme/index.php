<?php get_header();?>

<div class="container-fluid">
	<div class="jumbotron">

		<h1 class="display-4">Official Beanstalk Knowledge Base</h1>
		<p class="lead">WOOOOOOOOOOOAAAAAHHHHH!!!!!!!!!!!!!     ?</p>

		<p><?php get_search_form(); ?></p>

	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<?php dynamic_sidebar('home-widget-area-left');?>
		</div>
		<div class="col-md-4">
			<?php dynamic_sidebar('home-widget-area-middle');?>
		</div>
		<div class="col-md-4">
			<?php dynamic_sidebar('home-widget-area-right');?>
		</div>
	</div>

</div>


<?php get_footer();?>


