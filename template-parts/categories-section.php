<?php 
	$categories = get_field('categorias'); 
	$categories_movil = get_field('categorias_movil'); 
?>
<div class="categories-desktop">
	<div class="container">
		<div class="row mt-4">
			<div class="col-12">
				<h3 class="title-categories">Categorías Populares</h3>
				<div class="owl-carousel categories-desktop owl-theme">
					<?php if($categories): foreach($categories as $category): ?>
						<div class="item">
							<a href="<?= home_url(); ?>/categoria/<?= $category['link_categoria']->slug; ?>">
								<div class="content">
									<div class="image">
										<img src="<?= $category['imagen_categoria']['url'] ?>" alt="<?= $category['imagen_categoria']['title'] ?>" width="3.5rem" height="3.5rem">
									</div>
									<p><?= $category['link_categoria']->name; ?></p>
								</div>
							</a>
						</div>
					<?php endforeach; endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- categories movil -->
<div class="categories-movil">
	<div class="container">
		<div class="row pl-3 pr-3">
			<div class="col-12 p-0">
				<h3 class="title-categories mb-3 mt-2">Categorías Populares</h3>
			</div>
			<?php if($categories_movil): foreach($categories_movil as $category): ?>
				<div class="col-6 mb-3 pl-2 pr-2">
					<a href="<?= home_url(); ?>/categoria/<?= $category['link_categoria']->slug; ?>">
						<div class="content">
							<div class="image">
								<img src="<?= $category['imagen_categoria']['url'] ?>" alt="<?= $category['imagen_categoria']['title'] ?>" width="3.5rem" height="3.5rem">
							</div>
							<p><?= $category['link_categoria']->name; ?></p>
						</div>
					</a>
				</div>
			<?php endforeach; endif; ?>
			<div class="col-12 show-more-catrories">
				<a href="<?= get_field('link_ver_todas_las_categorias') ?>">
					<span>Ver más</span>
					<span><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
				</a>
			</div>
		</div>
	</div>
</div>