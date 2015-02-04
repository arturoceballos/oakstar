<section id="<?php echo $post->post_name;?>" class="<?php echo $post->post_name;?>">
        <div class="container-fluid">
            <!-- section title -->
            <div class="row-fluid">
                <div class="span12">
                    <div class="section-title">
                        <h2>
                            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true); 
                                if($top_title != '') echo $top_title; else the_title();?></span>
                        </h2>
                        <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2" style="text-align:center;">
                <h5><?php global $more; $more = 0; the_content('');?></h5>
            </div>
        </div><!-- end of container --> 
</section><!-- end of sections -->