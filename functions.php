<?php

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


?>