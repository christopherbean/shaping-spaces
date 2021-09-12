<?php
/**
* Underscores Child functions and definitions
*
*@link http://codex.wordpress.org/Theme_Development
*@link http://codex.wordpress.org/child_themes
*
*@package wordpress
*@subpackage underscores
*@since underscores 1.0
*/

//Enqueue Scripts and Styles
function underscores_child_scripts(){
    wp_enqueue_style('underscores-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('underscores-style'));
}

add_action('wp_enqueue_scripts', 'underscores_child_scripts');

//Dynamic sidebar
function underscores_child_widget_init() {
	
	register_sidebar( array(
	    'name' =>__( 'Contact sidebar', 'underscores-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on all pages minus the contact page.', 'underscores-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'underscores_child_widget_init' );

//Register menus for the child theme
function underscores_child_menus() {
    $locations = array(
        'social-menu' => __('Social Menu', 'underscores-child'),
    );
    register_nav_menus( $locations );
}

add_action('init', 'underscores_child_menus');


//Custom post type templates
function create_custom_post_types(){
    register_post_type('services_offered',
                      array(
                        'labels' => array(
                            'name' => ('Services Offered'),
                            'singular_name' => ('Service Offered')
                        ),
                      'public' => true,
                      'has_archive' => false,
                      'rewrite' => array ('slug' => 'service-offered')
                      )
                      );
    
}

add_action( 'init', 'create_custom_post_types' );

function load_custom_scripts_child(){
    
    wp_enqueue_script( 'reveal-on-scroll', get_stylesheet_directory_uri() . '/my-js/reveal.js', array('jquery'), '1.0.0', false );
    
}

add_action('wp_enqueue_scripts', 'load_custom_scripts_child');

?>

