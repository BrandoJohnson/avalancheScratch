
<?php get_header(); ?>

<div style="margin: 2.5em;">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>