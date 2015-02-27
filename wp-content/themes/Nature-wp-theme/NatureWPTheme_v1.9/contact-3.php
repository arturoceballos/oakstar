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
            <div class="contact-contact">
                <h4><?php global $more; $more = 0; the_content('');?></h4>
                <div class="social-media-icons">
                    <a href="https://www.facebook.com/" target="_blank">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a href="http://instagram.com/" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank">
                        <i class="fa fa-twitter-square"></i>
                    </a>
                </div>
            </div>
        </div>

    </div><!-- end of container --> 
</div><!-- end of sections -->