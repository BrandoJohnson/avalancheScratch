<?php
    /* Template Name: Homepage */
?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="row123">
        <div class="col-md-12 row1234"><?php the_content(); ?></div>
        <br style="clear: both;" >
        <div><?php the_field('middle_content_area') ?></div>
        <div class="col-md-12"><?php the_field('bottom_content_area') ?></div>
    </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>