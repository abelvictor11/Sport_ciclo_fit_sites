<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

?>
<div class="woocommerce-products-header container-fluid text-center pt-5 pb-5">
    <div class="row">
        <?php if (apply_filters('woocommerce_show_page_title', true)) : ?>
            <div class="col-12 category-title">
                <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
            </div>
        <?php endif; ?>
        <div class="col-12 category-description">
            <?php
            do_action('woocommerce_archive_description');
            ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            <?php
            if (is_active_sidebar('shop-sidebar')) {
                dynamic_sidebar('shop-sidebar');
            }
            ?>
        </div>
        <div class="col-md-9">
            <?php
            if (woocommerce_product_loop()) {
                do_action('woocommerce_before_shop_loop');

                woocommerce_product_loop_start();

                if (wc_get_loop_prop('total')) {
                    while (have_posts()) {
                        the_post();
                        do_action('woocommerce_shop_loop');
                        wc_get_template_part('content', 'product');
                    }
                }

                woocommerce_product_loop_end();

                do_action('woocommerce_after_shop_loop');
            } else {
                do_action('woocommerce_no_products_found');
            }

            do_action('woocommerce_after_main_content');
            ?>
        </div>
    </div>
    <?php 
    $term = get_queried_object();
    $seo_description = get_field('seo_description', $term);
    ?>
    <?php if($seo_description):?>
    <div id="footer-category-description" class="container mt-5">
        <div class="row">
            <div class="col-12">
                <p class="p-3 m-0"><?= $seo_description; ?></p>
            </div>
        </div>
    </div>
    <?php endif;?>
    <?php if( have_rows('faq', $term)): ?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "FAQPage",
                "mainEntity": [{
                    <?php while( have_rows('faq', $term) ): the_row(); ?>
                    "@type": "Question",
                    "name": "<?php echo get_sub_field('question', $term);?>",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<?php echo get_sub_field('answer', $term);?>"
                    }
                    }]
            }
            <?php endwhile; ?>
        </script>
        <?php while( have_rows('faq', $term) ): the_row(); ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <h3 class="question"><?php echo get_sub_field('question', $term);?></h3>
                    <p class="answer"><?php echo get_sub_field('answer', $term);?></p>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<?php get_footer('shop'); ?>
