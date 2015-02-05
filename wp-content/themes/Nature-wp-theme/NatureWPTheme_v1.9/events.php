<div class="row <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container-fluid">
        <!-- Section Title -->
        <div class="section-title">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
        </div>
        <!--End Section Title-->

        <!--Content-->
        <div id="container" class="services-section"  data-masonry-options='{ "columnWidth": 20, "itemSelector": ".event" }'>
            <?php

            //get the event custom post types
            $type = 'event';
            $args = array(
                'post_type'        => $type,
                'post_status'      => 'publish',
                'order'            => 'date',
                'date'             => 'date',
                'orderby'          => 'title',
                'posts_per_page'   => -1,
                "title" => 'SERVICE TITLE',
                "text" => 'SERVICE DETAILS',
                "image" => 'SERVICE IMAGE',
                "url" => 'SERVICE BUTTON URL',
            );

            $my_query = null;
            $my_query = new WP_Query($args);
?>
            <?php if ($my_query->have_posts()): while($my_query->have_posts()): $my_query->the_post();?>

                <?php
                $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 500,500 ), false, '' );
                ?>
                        <div class="wow animated bounceInUp event pull-left">



                            <div class="col-sm-12 col-md-4 col-lg-3 service-span">
                                <div class="service-box">
                                    <img class="img-circle" src="<?php echo $src[0]; ?>" alt="'.$title.'">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php the_content();?></p>

                                </div>
                            </div>

                            <?php echo types_render_field('event-date', array('output' => 'raw'));?>
                                        

                        </div>
                
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <!--End Content-->
    </div>
</div>
```
