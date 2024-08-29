<?php 
defined( 'ABSPATH' ) || exit;
?>

<?php if( have_rows('bottom_block') ): ?>
<div id="bottom-block" class="container mt-5">
    <div class="row">
        <?php while( have_rows('bottom_block') ): the_row(); 
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $text = get_sub_field('text');
        ?>
            <div class="col-md-4 bottom-block-item text-center">
                
                <div class="inner-block">
                    <div class="col-12 block-image">
                        <img class="fluid"src="<?php echo $image['url']; ?>" alt="" srcset="">
                    </div>
                    <div class="col-12 block-title">
                        <h4>
                            <?php echo $title; ?>
                        </h4>
                    </div>
                    <div class="col-12 block-text">
                        <?php echo $text; ?>
                    </div>
                </div>
                            
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>