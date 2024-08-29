<?php
	$content_best_seller = get_field('best_seller_content');
?>
<!-- MAS VENDIDOS -->
<div id="mas-vendidos" class="container mb-4 mt-5">
	<div class="row" id="content-mas-vendidos">
		<div class="col-md-12 content-title-link-best-seller mb-4">
			<h2 class="best-seller-title mb-0">Los más <span>vendidos</span></h2>
			<a href="<?= $content_best_seller['lin_show_more']['url']; ?>">
				<span>Ver más</span> 
				<span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
			</a>
		</div>
		<div class="col-md-12 best-seller-container">
			<?php echo do_shortcode( '[best_selling_products limit="32" columns="4" best_seller="true"]' ); ?>
		</div>
	</div>	
</div>
<!-- <div class="best-seller-movil">
	<div class="container">
		<div class="row mt-4 mb-4 content">
			<div class="col-md-12 content-title-link-best-seller mb-0 pl-2">
				<h2 class="best-seller-title mb-0">Los más <span>vendidos</span></h2>
			</div>
			<?php if($content_best_seller['products_movil']): foreach($content_best_seller['products_movil'] as $item): $product = $item['product']; ?>
				<div class="col-6 p-0">
					<?= do_shortcode('[products ids='.$product.']'); ?>
				</div>
			<?php endforeach; endif; ?>
			<div class="col-12 mt-2">
				<a href="<?= $content_best_seller['lin_show_more']; ?>" class="show-more-best-seller">
					<span>Ver más</span> 
					<span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
				</a>
			</div>
		</div>
	</div>
</div> -->
<!-- END MAS VENDIDOS -->