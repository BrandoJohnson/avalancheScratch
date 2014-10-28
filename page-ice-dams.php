<?php
/* Template Name: Ice Dams */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>

    <ul class="row123">
        <li class="col-md-12"><?php the_content(); ?></li>
        <li class="col-md-6"><?php the_field('left_content_area') ?></li>
        <li class="col-md-6"><?php the_field('right_content_area') ?></li>
    </ul>
<?php endwhile; endif; ?>

<?php get_footer(); ?>