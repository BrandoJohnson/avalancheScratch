<?php
/* Category Name: Testimonials */
?>


<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="row123">
        <div class="col-md-12 row1234"><?php the_content(); ?></div>
        </div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>