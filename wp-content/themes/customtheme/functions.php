<?php 

// Remove CSS version Parameter (messes with cacheing in chrome)
//////////////////////////////////////////////////////////////////////
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 ); 


function bs_load_scripts() {

    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false);
    wp_enqueue_style( 'theme_css',    get_template_directory_uri() . '/styles/css/theme_styles.min.css', array(), false);
 
}
add_action('wp_enqueue_scripts', 'bs_load_scripts');




	//Primary Navigation for the Knowledge Base
	function bs_register_menu() {

	  register_nav_menu('primary-menu',__( 'Primary Menu' ));

	}

	add_action( 'init', 'bs_register_menu' );


	// Add a Login / Logout link to the wordpres generated navigation
	function bs_add_login_logout_link($items, $args) {
	        ob_start();
	        wp_loginout('index.php');
	        $loginoutlink = ob_get_contents();
	        ob_end_clean();
	        $items .= '<li>'. $loginoutlink .'</li>';
	    return $items;
	}

	add_filter('wp_nav_menu_items', 'bs_add_login_logout_link', 10, 2);




	//Registers the sidebar for use 

function bs_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Home Widget Area Left', 'custometheme' ),
		'id'            => 'home-widget-area-left',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="home-widget-left">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home Widget Area Middle', 'custometheme' ),
		'id'            => 'home-widget-area-middle',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="home-widget-middle">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home Widget Area Right', 'custometheme' ),
		'id'            => 'home-widget-area-right',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="home-widget-right">',
		'after_title'   => '</h4>',
	) );



}


add_action( 'widgets_init', 'bs_widgets_init' );


	//After logging in, redirects to site.com/wordpress

function bs_login_redirect_page() {
	return '/wordpress/';
}

add_filter('login_redirect', 'bs_login_redirect_page');

	//Checks if user is not logged in, if logged in does nothing if not logged in automatically redirects to login page

function bs_redirect_to_specific_page() {

	if ( !is_user_logged_in() ) {

		wp_redirect( '/wordpress/wp-admin');
		exit;
	}
}
add_action( 'template_redirect', 'bs_redirect_to_specific_page' );

?>