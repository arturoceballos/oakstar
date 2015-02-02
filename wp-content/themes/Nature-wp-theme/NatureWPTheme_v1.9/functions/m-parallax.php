<?php 
/**
*Template Name: Parallax page template
*/
global $nature_mt; ?>
<!-- Parallax -->
    <section id="newsletter" class="newsletter">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="newsletter-box">
                                <?php if(isset($nature_mt['newsletter_text']) && $nature_mt['newsletter_text'] != '') { ?>
                                <?php echo $nature_mt['newsletter_text'];?>
                                <?php } ?>
                        <div class="newsletter-form">
                            
                                <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aliquid asperiores cum, dignissimos ducimus eligendi esse iste mollitia optio perspiciatis placeat quae reiciendis repellat repellendus sapiente similique veniam vitae voluptatibus.
                                </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Parallax end -->