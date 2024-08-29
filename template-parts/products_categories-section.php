<style>
    #products_categories .woocommerce.columns-4, #recent-viewed-products .woocommerce.columns-4{
        width: 100%;
    }
    #products_categories li.product, 
    #recent-viewed-products li.product, 
    #destacados li.product,
    #mas-vendidos li.product{
        width: 100% !important;
        margin-top: 10px;
        background: white;
        border-radius: 5px;
        padding: 10px;
        padding-left: 5px;
        padding-right: 5px;
        max-width: 270px !important;
    }
    
</style>
<div id="products_categories" class="container d-none">
    <div class="row">
    <?php if( have_rows('category_and_products') ): ?>
    
        <?php while( have_rows('category_and_products') ): the_row(); 
            $category_title = get_sub_field('category_title');
            $category_link = get_sub_field('category_link');
            $products = get_sub_field('products');
            //var_dump($products);
            $array_mio = [];
            ?>
            <div class="col-12 mt-5 p-0">
                <h2><a href="<?php echo $category_link;?>"><?php echo $category_title;?></a></h2>
            </div>
            <div class="container-fluid mt-1">
                <div class="row <!--products-grid-carouselowl-carousel-->">
                    <?php 
                        
                    if (is_array($products) || is_object($products)){
                        foreach($products as $products){?>
                             <!--<div class="col">
                       <?php
                            
                            $product_id = $products['product'];
                    //         $image = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'single-post-thumbnail' );
                    //         $title = get_the_title($product_id);
                    //         $link = get_the_permalink($product_id);
                    //         $regular_price = get_post_meta( $product_id, '_regular_price', true);
                    //         $sale_price = get_post_meta( $product_id, '_sale_price', true);
                    //         $product = new WC_Product( $product_id );
                    //         //var_dump($product);
                             array_push($array_mio, $product_id);
                              
                    //         if (is_numeric($regular_price) && is_numeric($sale_price)) {
                    //             $discount = (($regular_price - $sale_price)/$regular_price)*100;
                    //             echo floor($discount * 100)/100;
                    //         } 
                            
                    //         ?>
                             <!--<a href="<?php //echo $link;?>">
                             <img src="<?php //echo $image[0];?>" alt="">
                             <h2 class="woocommerce-loop-product__title">
                             <?php //echo $title;?>
                             </h2>
                             </a>
                             <?php //echo do_shortcode('[add_to_cart id="'.$product_id.'"]');?>
                            
                            </div>-->
                <?php   }
                    }
                    $array_mio_list = implode(',', $array_mio);
                    echo do_shortcode("[products ids='.$array_mio_list.']");
                    
                    ?>
                </div>
           </div>
        <?php endwhile; ?>
        
    <?php endif; ?>
    
    </div>

</div>

