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

?>

