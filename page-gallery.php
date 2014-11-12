<?php
/* Template Name: Gallery */
?>


<?php get_header(); ?>
    <div id="slides">
        <div class="slides_container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                $args = array(
                    'post_type' => 'attachment',
                    'numberposts' => -1,
                    'orderby'=> 'menu_order',
                    'order' => 'ASC',
                    'post_mime_type' => 'image',
                    'post_status' => null,
                    'post_parent' => $post->ID
                );

                $attachments = get_posts( $args );
                if ( $attachments ) {
                    foreach ( $attachments as $attachment ) {
                        echo wp_get_attachment_image($attachment->ID , 'full' );
                    }
                }
            endwhile; endif; ?>
        </div>
        <a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left icon-large"></i></a>
        <a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right icon-large"></i></a>
    </div>

<?php get_footer(); ?>