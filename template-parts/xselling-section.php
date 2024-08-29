<?php
if( have_rows('xselling_products') ): ?>
    <div class="container-fluid xselling-cart mt-5 mb-5">
        <div class="row">
            <div class="col-12">
                <h2>Te recomendamos</h2>
            </div>
        <?php while( have_rows('xselling_products') ): the_row(); 
            $products = get_sub_field('products');
            
        ?>

                <div class="col-md-4">
                    <?php 
                    $id = $products->ID;
                    $name = $products->post_title;
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $products->ID ),'woocommerce_thumbnail' );
                    
                    
                    ?>
                    <?php  //var_dump($image[0])?>
                    
                    <img src="<?php echo $image[0];?>" alt="" srcset="">
                    <h3><?php echo $name;?></h3>
                    <?php  echo do_shortcode('[add_to_cart id="'.$products->ID.'"]'); ?>
                </div>

        <?php endwhile; ?>
        </div>
    </div> 
<?php endif;