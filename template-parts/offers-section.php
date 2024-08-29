<?php 
defined( 'ABSPATH' ) || exit;
$catrgory_products = get_field('categoria_productos');
?>
<?php if( have_rows('categoria_productos') ): ?>
    <div id="offers" class="container">
        <div class="row mt-4 content-offer">
            
            <?php while( have_rows('categoria_productos') ): the_row();

                // Get sub field values.
                $title = get_sub_field('title');
                $products = get_sub_field('products_category');
                
                $offers_products = [];
                ?>
                <div class="col-md-12">
                    <div class="title-link">
                        <h3 class="title-offer"><?= $title; ?></h3>
                        <a href="<?= $catrgory_products['link_show_products_in_offers'] ?>" class="show-more-offers"><span>Ver más</span> <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>
                    </div>
                    
                    <?php 
                        
                    if (is_array($products) || is_object($products)){
                        foreach($products as $products){
                            $product_id = $products['product'];
                            array_push($offers_products, $product_id);
                            
                        }
                    }
                    $offers_products_list = implode(',', $offers_products);
                    echo do_shortcode("[products ids='.$offers_products_list.']");
                    
                    ?>
                </div>
                
            <?php endwhile; ?>
            
        </div>
    </div>
<?php 
    endif; 
    
?>

<!-- <div id="movil-offer" class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h3 class="title-offer"><?= $catrgory_products['title'] ?></h3>
        </div>
        <?php if($catrgory_products['products_movil']): foreach ($catrgory_products['products_movil'] as $products): $product = $products['product']; ?>
            <div class="col-6 p-0">
                <?= do_shortcode('[products ids='.$product.']'); ?>
            </div>
        <?php endforeach; endif; ?>
        <div class="col-12 mt-2">
            <a href="<?= $catrgory_products['link_show_products_in_offers'] ?>" class="show-more-offers"><span>Ver más</span> <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>
        </div>
    </div>
</div> -->