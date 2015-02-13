<div class="row-fluid <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
            <?php the_content(); ?>
        </div>
        <!--End Section Title-->

        <!--Content-->
        <div class="row"><?php echo do_shortcode('[portfolio]');?></div>

        <!--End Content-->
    </div>
</div>
