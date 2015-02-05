<section id="<?php echo $post->post_name;?>" class="<?php echo $post->post_name;?>">
        <div class="container-fluid-2">
            <!-- section title -->
            <div class="row-fluid">
                    <div class="section-title">
                        <h2>
                            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true); 
                                if($top_title != '') echo $top_title; else the_title();?></span>
                        </h2>
                        <h3><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></h3>
                    </div>
            </div>
            <div class=".center-block" style="text-align:center;">
                <h5><?php global $more; $more = 0; the_content('');?></h5>
            </div>
        </div><!-- end of container --> 
</section><!-- end of sections -->