<?php
/* Template Name: Testimonials */
?>

<?php get_header(); ?>

<?php
    $page_id = 2; // substitute page_id of page you want content included from for "2"
    $page = get_post($page_id);
    echo "<p>$page->post_content</p>";
?>

<?php get_footer(); ?>