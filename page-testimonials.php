<?php
/* Template Name: Testimonials */
?>

<?php get_header(); ?>

<?php

function my_home_category( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'cat', '8');
    }
}
add_action( 'pre_get_posts', 'my_home_category' );

?>

<?php get_footer(); ?>