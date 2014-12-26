<?php

/**********************************************************************/
/* Add Theme Support for Woocommerce */
/**********************************************************************/

add_theme_support('woocommerce');

/**********************************************************************/
/* Define Constants */
/**********************************************************************/

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES', THEMEROOT.'/images');


/**********************************************************************/
/* Add Menus */
/**********************************************************************/

function register_my_menus() {
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu', 'link_after' => '1234'
    ));
}

add_action('init', 'register_my_menus');


/**********************************************************************/
/* Add theme support for post thumbnails */
/**********************************************************************/

if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(362,209);
}




/**********************************************************************/
/* Register our sidebars and widgetized areas. */
/**********************************************************************/

function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'sidebar-1',
        'id' => 'sidebar-1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );




