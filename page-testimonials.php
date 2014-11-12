<?php
/* Template Name: Testimonials */
?>

<?php get_header(); ?>



<?php query_posts('cat=testimonials;showposts='.get_option('posts_per_page')); ?>

<?php get_footer(); ?>