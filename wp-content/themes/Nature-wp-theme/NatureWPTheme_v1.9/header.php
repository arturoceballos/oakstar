<?php global $nature_mt; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height" />

<title><?php
global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";?>
</title>
<link rel="shortcut icon" href="<?php echo $nature_mt['favicon'];?>" />
<?php global $nature_mt;  
    if(isset($nature_mt['integration_header'])) echo $nature_mt['integration_header'] . PHP_EOL;
    wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<!-- Home -->
    <section id="home" class="home">
        <div class="logo">
            <?php if(isset($nature_mt['logo']) && $nature_mt['logo'] != '') { ?>
                <img src="<?php echo $nature_mt['logo'];?>" alt="Logo">
            <?php } ?>           
        </div>
        <!-- Home Slider -->
        <div id="homeCarousel" class="carousel slide">
            <div class="carousel-inner">
                    <?php
                        query_posts('post_type=carousel_slider&posts_per_page=-1'); if( have_posts() ) : $postId = 0; while( have_posts() ) : the_post(); global $post;
                    ?>  
                <div class="item <?php echo !$postId ? 'active' : '' ?> <?php get_post_meta( $post->ID, '_cmb_first_slider_active_item', true ); ?>">
					<div class="fill" style="background-image:url('<?php echo get_post_meta( $post->ID, '_cmb_h_slider_image', true ); ?>');">
						<div class="container">
							<div class="carousel-caption">
								<?php echo get_post_meta( $post->ID, '_cmb_h_slider_caption', true ); ?>
							</div>
						</div>
					</div>
					
                </div>
                    <?php 
                            $postId++; endwhile; else :
                    ?>
            
                    <?php
                            endif;
                            wp_reset_query();
                    ?>
            </div>
            <a class="left carousel-control" href="#homeCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#homeCarousel" data-slide="next">&rsaquo;</a>
        </div>
        <!-- Home Slider end -->
        <!-- Navigation -->
        <nav class="navbar">
            <div class="navbar-inner">
                <div class="main-nav">
                <!-- Nav Menu -->
                    <?php wp_nav_menu(array(
                        'theme_location' => 'top-menu',
                        'container' => '',
                        'menu_class' => 'nav', 
                        'menu_id' => null,
                        'fallback_cb' => 'show_top_menu',
                        'echo' => true,
                        'walker' => new description_walker(),
                        'depth' => 1 ) ); 
                    ?>                
                </div>
                <!-- Nav Menu end-->
            </div>
        </nav>
        <!-- Navigation end -->
    </section>
<!-- Home end -->
<div id="main-content">   

  
    