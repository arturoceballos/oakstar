<div class="contact-3 <?php echo $post->post_name;?>" id="<?php echo $post->post_name;?>">
    <div class="container-fluid-contact">
        <!-- Section Title -->
        <div class="section-title">
            <h2>
            <span><?php $top_title = get_post_meta($post->ID, 'top_title', true);
                if($top_title != '') echo $top_title; else the_title();?></span>
            </h2>
            <h3><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></h3>
        </div>

        <div class="contact-content pad">
            <div class="map"><?php echo do_shortcode('[google_maps id="315"]');?></div>
            <h4><?php global $more; $more = 0; the_content('');?></h4>
        </div>


            <!--     </div>
            </div>
            <div class="col-md-8 col-md-offset-2" style="text-align:center;">
                <div class="row"><?php echo do_shortcode('[google_maps id="315"]');?></div>
                <h5><?php global $more; $more = 0; the_content('');?></h5>
            </div> -->
    </div><!-- end of container --> 
</div><!-- end of sections -->