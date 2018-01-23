<?php
// Allow SVG Upload
//////////////////////////////////////////////////////////////////////
function cc_mime_types($mimes) {
  $mimes["svg"] = "image/svg+xml";
  return $mimes;
}
add_filter("upload_mimes", "cc_mime_types");


// Remove Auto-Complete from login page password field
//////////////////////////////////////////////////////////////////////
add_action('login_init', 'acme_autocomplete_login_init');
function acme_autocomplete_login_init()
{
    ob_start();
}

add_action('login_form', 'acme_autocomplete_login_form');
function acme_autocomplete_login_form()
{
    $content = ob_get_contents();
    ob_end_clean();
    $content = str_replace('id="user_pass"', 'id="user_pass" autocomplete="off"', $content);
    echo $content;
}

// Remove CSS version Parameter (messes with cacheing in chrome)
//////////////////////////////////////////////////////////////////////
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );


    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'popper-scripts', get_template_directory_uri() . '/js/popper.min.js', array(), false);
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function bs_tags( $before = '<li>', $sep = '</li><li>', $after = '</li>' ) {

    $the_tags = get_the_tag_list( $before, $sep, $after );

    if ( ! is_wp_error( $the_tags ) ) {
        echo $the_tags;
    }
}

function bs_category( $separator = '', $parents = '', $post_id = false ) {
    echo get_the_category_list( $separator, $parents, $post_id );
}

// Exclude Pages from search results
//////////////////////////////////////////////////////////////////////
if (!is_admin()) {
    function wpb_search_filter($query) {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
        return $query;
    }
    add_filter('pre_get_posts','wpb_search_filter');
}


// Custom Loginout Link
//////////////////////////////////////////////////////////////////////

function bs_loginout($redirect = '', $echo = true) {
  if ( ! is_user_logged_in() )
    $link = '<a class="nav-link" href="' . esc_url( wp_login_url($redirect) ) . '">' . __('Log in') . '</a>';
else
    $link = '<a class="nav-link" href="' . esc_url( wp_logout_url($redirect) ) . '">' . __('Log out') . '</a>';

if ( $echo ) {

    echo apply_filters( 'loginout', $link );

} else {

    return apply_filters( 'loginout', $link );
}
}

// Password Protects Site
//////////////////////////////////////////////////////////////////////

function bs_authenticate() {
    if ( !is_user_logged_in() ) {
        auth_redirect();
    }
}
add_action ('template_redirect', 'bs_authenticate', $priority = 1);
