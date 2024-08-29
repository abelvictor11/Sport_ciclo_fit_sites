<?php
$f_s = get_field('first_section');
if( $f_s ): 
// Vars
$f_s_banner_vide_option = get_field('banner_or_video');
$f_s_video = $f_s['video'];
$f_s_banner = $f_s['banners'];
$f_s_banner_video_title = get_field('banner_video_title');
$f_s_product_title = get_field('product_title');
$f_s_product_description = get_field('product_description');
$f_s_product_image = get_field('product_image');
?>
    <div id="landing-first-section" class="container-fluid">
        <div class="row">
            <div class="col-md-8 <?php if($f_s_video):?>video<?php endif;?>">
                <style>
                    /* optional css fade in animation */
                    iframe {
                        transition: opacity 500ms ease-in-out;
                        transition-delay: 250ms;
                    }
                </style>
                <div ata-ytbg-loop="true" data-ytbg-mobile="true" data-ytbg-load-background="true" data-ytbg-play-button="true" data-youtube="<?php echo $f_s_video; ?>"></div>
                <h2><?php echo $f_s['banner_video_title']; ?></h2>
                <?php if( have_rows($f_s_banner) ): ?>
                    <ul class="slides">
                    <?php while( have_rows($f_s_banner) ): the_row(); 
                        $image = $f_s_banner['banner'];
                        ?>
                        <li>
                            <?php var_dump($image); ?>
                            
                        </li>
                    <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php get_template_part('template-parts/product','variable');?>
            </div>
            <div class="col-md-4">
                <h1><?php echo $f_s['product_title']; ?></h1>
                <div class="product-description">
                    <?php echo $f_s['product_description'];?>
                    <img src="<?php echo esc_url( $f_s['product_image']['url'] ); ?>" alt="<?php echo $f_s['product_title']; ?>" />
                </div>
            </div>
        </div>
    </div>
    

    
    
<?php endif; ?>


