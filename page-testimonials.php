<?php
/* Template Name: Testimonials */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <ul class="row123">
        <li class="col-md-12"><?php the_content(); ?></li>
    </ul>
<?php endwhile; endif; ?>

<?php get_footer(); ?>