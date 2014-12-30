<?php
    /* Template Name: Homepage */
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <div class="row123">
        <div class="col-md-12"><?php the_content(); ?></div>
        <br clear="all" >
        <div class="col-md-12"><?php the_field('middle_content_area') ?></div>
        <div class="col-md-12"><?php the_field('bottom_content_area') ?></div>
    </div>
    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <hr/>
ccc
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div><!-- #primary-sidebar -->
    <?php endif; ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>