<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <?php if( have_rows('producto_variable') ): ?>
                    
                    <?php while( have_rows('producto_variable') ): the_row(); 
                        $product = get_sub_field('producto');
                        $images = get_sub_field('imagenes');
                        // var_dump($product);
                        // echo '<pre>';
                        // var_dump($images);
                        // echo '</pre>';
                        ?>
                        <div class="col-md-4">
                            <div class="owl-carousel product-images">
                                <?php foreach($images as $image):?>
                                    <img src="<?php echo esc_url($image); ?>" alt="" srcset="">
                                <?php endforeach;?>
                            </div>
                            
                        
                                
                            
                                <?php 
                                $product_id = $product->ID;
                                $product_title = $product->post_title;
                                
                                ?>
                                <h3 class="title-product">
                                    <?php echo $product_title; ?>  
                                </h3>
                                <?php echo do_shortcode('[add_to_cart id="'.$product_id.'"]'); ?>
                            
                        </div>
                        
                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<script>
$('.owl-carousel.product-images').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    dots:true
})
</script>