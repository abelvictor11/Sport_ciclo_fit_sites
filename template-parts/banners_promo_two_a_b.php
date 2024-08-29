<?php
    $banner_a = get_field('banners_promo_two');
    $banner_b = get_field('banner_promo_tow_right');
?>
<?php if($banner_a && $banner_b):?>
    <div id="categories-banners-one" class="container">
        <div class="row mt-4">
            <div class="col-md-6 mb-4 mb-md-2 pl-md-0 left-mini-banner">
                <a href="<?= $banner_a['link_banner_tow']['url']; ?>">
                    <img loading="lazy" src="<?php echo $banner_a['image_banner_two']['url'];?>">  
                    <a href="<?= $banner_a['link_banner_tow']['url']; ?>" class="btn-mini-banners"><?= $banner_a['link_banner_tow']['title']; ?></a>
                </a>
            </div>
            <div class="col-md-6 mb-2 pr-md-0 right-mini-banner">
                <a href="<?php echo $banner_b['link_banner_right_tow']['url']; ?>">
                    <img loading="lazy" src="<?= $banner_b['image_banner_right_tow']['url'];?>">
                    <a href="<?php echo $banner_b['link_banner_right_tow']['url']; ?>" class="btn-mini-banners"><?= $banner_b['link_banner_right_tow']['title']; ?></a> 
                </a>   
            </div>
        </div>
    </div>
<?php endif; ?>