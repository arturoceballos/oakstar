<div<?php echo ( $reel['id'] ? esc_attr( ' id="' . $reel['id'] . '"' ) : '' ); ?> class="reel">
   <div class="reel-body">
       <?php

       $the_query = new WP_Query( $args );

       if ( $the_query->have_posts() ) :

           while ( $the_query->have_posts() ) : $the_query->the_post();

               echo '<div class="item" data-effect="fadeIn" data-effect-rel=".reel-body" data-effect-delay="' . $the_query->current_post * 0.3 . '">';
               include( locate_template( 'content-simple.php' ) );
               echo '</div>';

           endwhile;

           wp_reset_postdata();

       endif;

       ?>
   </div>
   <span class="arrow arrow-left reel-left"></span>
   <span class="arrow arrow-right reel-right"></span>
</div>