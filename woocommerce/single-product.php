<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * @package Understrap-WooCommerce
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header( 'shop' ); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <?php
            // Hook para contenido antes del producto
            do_action( 'woocommerce_before_main_content' );

            while ( have_posts() ) :
                the_post();

                wc_get_template_part( 'content', 'single-product' );

            endwhile; // End of the loop.
            ?>



            <?php
            // Hook para contenido despu¨¦s del producto
            do_action( 'woocommerce_after_main_content' );
            ?>
        </div>
        <div class="col-lg-3">
            <?php
            // Sidebar de WooCommerce (si aplica)
            do_action( 'woocommerce_sidebar' );
            ?>
        </div>
    </div>
</div>

<?php
get_footer( 'shop' );
