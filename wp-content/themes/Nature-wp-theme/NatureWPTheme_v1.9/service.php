<div class="row-fluid <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container-fluid-service">
        <!-- Section Title -->
        <div class="section-title">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <!-- <h3><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></h3> -->
        </div>
        <!--End Section Title-->

        <!--Content-->
        <div class="service-content">
            <?php

            //get the event custom post types
            $type = 'service-1';
            $args = array(
                'post_type'        => $type,
                'post_status'      => 'publish',
                'order'            => 'ASC',
                'orderby'          => 'title',
                'posts_per_page'   => -1
            );

            $my_query = null;
            $my_query = new WP_Query($args);

            if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
            ?>
                
                <?php
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );
                ?>

                <div class="card-container">
                <div class="card">
                    <div class="front" style="background:url('<?php echo $src[0]; ?>') center no-repeat;">
                        <h2 style="color:#efefef;"><?php the_title();?></h2>
                    </div>
                    <div class="back" style="text-align:center; padding:auto;">
                        <h2><?php the_title();?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
               

            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <!--End Content-->
    </div>

</div>

<div class="container-fluid-facility">
        <!-- Section Title -->
        <div class="section-title">
            <h4>
            <?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?>
            </h4>
            <?php the_content(); ?>
        </div>
        <!--End Section Title-->

        <!--Content-->
        <div class="row-fluid"><?php echo do_shortcode('[portfolio]');?></div>

        <!--End Content-->
    </div>