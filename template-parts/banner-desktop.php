<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
$banners = get_field('banners');
?>
<!-- START BANNER -->
<div class="container mt-lg-2 mb-5">
    <div class="row">
        <div class="owl-carousel banner owl-theme col-12 p-0">
            <?php if ($banners) : foreach($banners as $banner): ?>
                <div class="item">
                    <a href="<?= $banner['banner_link'] ?>">
                        <img class="banner-image-desktop" src="<?= $banner['banner_image']['url'] ?>" alt="<?= $banner['banner_image']['title'] ?>" width="100%" height="100%">
                        <img class="banner-image-movil" src="<?= $banner['banner_image_mobile']['url'] ?>" alt="<?= $banner['banner_image_mobile']['title'] ?>" width="100%" height="100%">
                    </a>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</div>
<!-- END BANNER -->