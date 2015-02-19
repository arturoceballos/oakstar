<section id="<?php echo $post->post_name;?>" class="<?php echo $post->post_name;?>">
    <div class="container-fluid-video">

        <div class="section-title">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
        </div>



        <div class="video-content">
            <?php

            //get the event custom post types
            $type = 'videos';
            $args = array(
                'post_type'        => $type,
                'post_status'      => 'publish',
                'order'            => 'ASC',
                'orderby'          => 'title',
                'posts_per_page'   => -1
            );

            $my_query = null;
            $my_query = new WP_Query($args);
?>
            <?php if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();
            ?>
                                        
                <!--<?php
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );
                ?>-->

                <!-- <div class="row vertical-align">
                    <div class="col-md-5"> -->
                        <div class="video-row" style="background: url('<?php echo $src[0]; ?>') no-repeat;">
                            <iframe width="560" height="315" src="<?php echo types_render_field('youtube-videos', array('output' => 'raw')); ?>" frameborder="0" allowfullscreen></iframe>
                            <h4><?php the_title(); ?></h4>
                            <h5><?php the_content(); ?></h5>
                            <?php echo date('D. F jS, Y', types_render_field('event-date', array('output' => 'raw'))); ?>
                        </div>

                        <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
    </div>
</section>