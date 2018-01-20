<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,600" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body class="bg-light">
		<?php if (!is_front_page()) { ?>
		<div class="row">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg navbar-light bg-white">
					<a class="navbar-brand" href="<?php bloginfo('url')?>"><img src="<?php echo  get_stylesheet_directory_uri(); ?>/img/bs-favicon.svg"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto my-2 my-lg-0">
							<li class="nav-item">
								<a class="nav-link" href="<?php bloginfo('url')?>">Home<span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Categories</a>
							</li>
							<li class="nav-item">
								<?php bs_loginout( '', true ); ?>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php bloginfo('url')?>"><img src="<?php echo  get_stylesheet_directory_uri(); ?>/img/bs-search.svg"></a>
							</li>
						</ul>
<!-- 						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form> -->
					</div>
				</nav>
			</div>
		</div>
		<?php } ?>





		