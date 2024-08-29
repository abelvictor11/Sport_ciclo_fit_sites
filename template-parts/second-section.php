<?php
$s_s = get_field('second_section');
if( $s_s ): 
// Vars
$s_s_banner_vide_option = get_field('banner_or_video');
$s_s_video = $s_s['video'];
$s_s_banner = $s_s['banner']['url'];
$s_s_banner_video_title = get_field('banner_video_title');
$s_s_product_title = get_field('product_title');
$s_s_product_description = get_field('product_description');
$s_s_product_image = $s_s['product_image'];
?>
    <div id="landing-second-section" class="container-fluid">
        <div class="row">
            
            <div class="col-md-4">
                <h1><?php echo $s_s['product_title']; ?></h1>
                <div class="product-description">
                    <?php echo $s_s['product_description'];?>
                    <?php if($s_s_product_image):?>
                        <img src="<?php echo esc_url( $s_s['product_image']['url'] ); ?>" alt="<?php echo $s_s['product_title']; ?>" />
                    <?php endif;?>
                </div>
            </div>
            <div class="col-md-8 <?php if($s_s_banner):?>banner<?php endif;?>" style="background:url(<?php echo $s_s_banner;?>);">
            </div>
        </div>
    </div>

    
    
<?php endif; ?>


