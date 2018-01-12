	<!DOCTYPE html> 
	<html>
	<head>
		<title><?php bloginfo('name');?></title>
		<?php wp_head(); ?>
	</head>
	<body>
	<div class="container">
		<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container_class' => 'primary-men' ) ); ?>
	</div>