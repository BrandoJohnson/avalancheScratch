<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
    <?php the_content(); ?>
    <div data-role="collapsibleset" data-theme="a" data-content-theme="a">
            <div data-role="collapsible">
                    <h3>Section 1</h3>
                <p>I'm the collapsible content for section 1</p>
                </div>
            <div data-role="collapsible">
                    <h3>Section 2</h3>
                <p>I'm the collapsible content for section 2</p>
                </div>
            <div data-role="collapsible">
                    <h3>Section 3</h3>
                <p>I'm the collapsible content for section 3</p>
                </div>
    </div>
<?php endwhile; endif; ?>



<?php get_footer(); ?>