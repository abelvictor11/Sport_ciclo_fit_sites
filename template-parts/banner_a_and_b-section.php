<?php 
    $banner_a = get_field('block_image_a');
    $link_a = get_field('link_image_a');
    $banner_b = get_field('block_image_b');
    $link_b = get_field('link_image_b');

?>
<?php if($banner_a && $banner_b):?>
    <div id="categories-banners-one" class="container">
        <div class="row">
            <div class="col-md-6 mb-4 mb-md-2 pl-md-0 left-mini-banner">
                <a href="<?php echo $link_a['url']; ?>">
                    <img loading="lazy" src="<?php echo $banner_a['url'];?>">  
                    <a href="<?php echo $link_a['url']; ?>" class="btn-mini-banners"><?= $link_a['title']; ?></a>
                </a>
            </div>
            <div class="col-md-6 mb-2 pr-md-0 right-mini-banner">
                <a href="<?php echo $link_b['url']; ?>">
                    <img loading="lazy" src="<?php echo $banner_b['url'];?>">
                    <a href="<?php echo $link_b['url']; ?>" class="btn-mini-banners"><?= $link_b['title']; ?></a> 
                </a>   
            </div>
        </div>
    </div>
<?php endif; ?>
