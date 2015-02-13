<div class="row-fluid <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container-fluid-service">
        <!-- Section Title -->
        <div class="section-title">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <h3><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></h3>
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

                <div class="service-row">
                    <div class="services" style="background: url('<?php echo $src[0]; ?>') no-repeat;">
                        <h2><?php the_title(); ?></h2>
                        <!-- <h3><?php the_content(); ?></h3> -->
                        <?php echo types_render_field('service-1', array('output' => 'raw')); ?>
                        <!-- <h2><?php echo date('D. F jS, Y', types_render_field('event-date', array('output' => 'raw'))); ?></h2> -->
                    </div>
                    <div class="space"></div>
                    <div class="writing">
                        <h5><?php the_content(); ?></h5>
                    </div>
                </div>
               

            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <!--End Content-->
    </div>
</div>