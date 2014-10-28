

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <?php the_content(); ?>
    <?php the_field('middle_content_area') ?>
    <?php the_field('bottom_content_area') ?>
<?php endwhile; endif; ?>



<?php get_footer(); ?>