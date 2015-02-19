<div class="row-fluid <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container-fluid-about">
        <!-- section title -->
                <?php
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 400,400 ), false, '' );
                ?>
                <img src="<?php echo $src[0]; ?>" alt="'.$title.'" class="about-img">
            <div class="about-content">
                <div class="section-title">
                    <h2>
                    <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                        if($top_title != '') echo $top_title; else the_title();?></span>
                    </h2>
                    <h3><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></h3>
                </div>
                <div class=".center-block" style="text-align:center;">
                    <h5><?php global $more; $more = 0; the_content('');?></h5>
                </div>
            </div>
    </div><!-- end of container -->
</div>