<?php
    /* Template Name: Homepage */
?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <ul class="row123">
        <li class="col-md-12 row1234"><?php the_content(); ?></li>
        <li class="col-md-12"><?php the_field('middle_content_area') ?></li>
        <li class="col-md-12"><?php the_field('bottom_content_area') ?></li>
    </ul>
<?php endwhile; endif; ?>

<?php get_footer(); ?>