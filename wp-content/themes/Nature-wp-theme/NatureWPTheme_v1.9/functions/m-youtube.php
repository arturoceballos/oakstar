<?php 
/**
*Template Name: Youtube page template
*/
global $nature_mt; ?>
<!-- Parallax -->
    <section id="newsletter" class="newsletter">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="newsletter-box">
                           <div class="newsletter-box">
                                <?php echo '<h3>' .$videos['title']. '</h3>'; ?>
                                echo do_shortcode('[video_lightbox_youtube video_id='.$video["link"].' width="100%" height="100%" anchor='.$video["link"].']
<!--                                 <iframe width="560" height="315" src="https://www.youtube.com/embed/msFmkKXmlmM" frameborder="0" allowfullscreen></iframe>
 -->                                <?php echo '<h3>' .$videos['desc']. '</h3>'; ?>
                            <div class="newsletter-form">
                            
                                <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid asperiores cum, dignissimos ducimus eligendi esse iste mollitia optio perspiciatis placeat quae reiciendis repellat repellendus sapiente similique veniam vitae voluptatibus.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Parallax end -->