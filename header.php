<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<script type="application/ld+json">
		{
			"@context": "https://schema.org/",
			"@type": "WebSite",
			"name": "Ciclospecial",
			"url": "https://ciclospecial.com/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://tienda-sportfitness.com/?s={search_term_string}&post_type=product&title=1&excerpt=1&content=1&categories=1&attributes=1&tags=1&sku=1&ixwps=1",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script>

	</script>
</head>

<body <?php body_class(); ?>>
	<?php do_action('wp_body_open'); ?>
	<div class="site" id="page">
		<header id="header" class="container-fluid d-block d-md-none">
			<div class="row">
				<div class="container head-container">
					<div class="row align-items-center">
						<div class="col-2 movil-bar">
							<span style="color:white;" class="menu-hamburguer-movil">
								<a href="" id="show-sub-menu-movil" class="text-white">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 313 254" style="enable-background:new 0 0 313 254;" xml:space="preserve">
<g>
	<path d="M156.6,47.6c-41.4,0-82.7,0-124.1,0c-2,0-4,0-6-0.3c-9.3-1.4-14.2-7-14.2-16.2c0-9.3,4.8-14.9,14.1-16.3
		c1.7-0.3,3.5-0.3,5.2-0.3c83.2,0,166.5,0,249.7,0c1.9,0,3.8,0.1,5.6,0.4c9.1,1.4,13.8,7,13.9,16.2c0,9.2-4.7,14.7-13.8,16.2
		c-2.1,0.3-4.2,0.4-6.3,0.4C239.3,47.6,197.9,47.6,156.6,47.6z"/>
	<path d="M140.4,206.4c36.1,0,72.2,0,108.4,0c2.5,0,5,0.1,7.5,0.6c7.5,1.4,12,6.8,12.7,15c0.6,7.3-3.7,14.1-10.5,16.4
		c-2.6,0.9-5.4,1.2-8.1,1.2c-73.2,0-146.5,0-219.7,0c-12.9,0-19.6-7.3-18.2-19.5c0.9-7.9,7-13.1,16.3-13.5c3.5-0.2,7-0.1,10.5-0.1
		C72.9,206.4,106.7,206.4,140.4,206.4z"/>
	<path d="M108.5,143.6c-25.5,0-51,0-76.5,0c-1.9,0-3.8,0-5.6-0.3c-9.3-1.4-14.2-7-14.2-16.3c0-9.2,4.9-14.8,14.2-16.2
		c1.7-0.3,3.5-0.3,5.2-0.3c51.2,0,102.5,0,153.7,0c1.9,0,3.8,0.1,5.6,0.4c8.9,1.4,13.7,7,13.8,15.8c0.1,9.3-4.5,14.9-13.5,16.5
		c-2,0.3-4,0.4-6,0.4C159.7,143.6,134.1,143.6,108.5,143.6z"/>
</g>
</svg>
								</a>
							</span>
						</div>
						<!-- logo -->
						<div class="col-md-3 col-8 logo-section">
							
							<!-- Your site title as branding in the menu -->
							<?php if (!has_custom_logo()) { ?>

								<?php if (is_front_page() && is_home()) : ?>

									<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

								<?php else : ?>

									<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

								<?php endif; ?>


							<?php } else {
								the_custom_logo();
							} ?>
							<!-- end custom logo -->
						</div>
						<!-- search -->
						<div class="col-md-8 col-12 search-section">
							<!-- Buscador -->
							<div class="buscar-desktop">
							    <img src="https://ciclospecial.com/wp-content/uploads/2024/08/magnifying-glass.svg" alt="Search" class="search-icon">
								<?php echo do_shortcode('[woocommerce_product_search no_results="No encontramos lo que buscas..." category_limit="2" placeholder="Busca productos y categorías"]'); ?>
								<div class="dropdown__overlay overlay fade-animation"></div>
							</div>
							<!-- End Buscador -->
							<div class="menu-content">
								<span style="color:white;" class="menu-hamburguer">
									<a href="" id="show-sub-menu-desktop" class="text-white">
										<span class="menu-text">Categorias</span>
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</a>
									<div class="sub-menu-content">
										<div class="content-menu">
											<nav id="menu">
												<?php
													wp_nav_menu([
														'theme_location'  => 'primary',
														'menu'  		  => 'Main',
														'container'       => '',
														'menu_id'         => 'main',
													]);
												?>
											</nav>
											<div class="content-categories">
												<div class="back-movil">
													<a href="" class="back-menu"><i class="fa fa-angle-left"></i> menú principal</a>
												</div>
												<div class="submenu-Cardio">
													<div id="cardio" class="submenu-right">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Cardio',
																'container'       => '',
															]);
														?>
													</div>
													<div id="accesorio" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Accesorios',
																'container'       => '',
															]);
														?>
													</div>
													<div id="fuerza" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Fuerza',
																'container'       => '',
															]);
														?>
													</div>
													<div id="funcional" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Funcional',
																'container'       => '',
															]);
														?>
													</div>
													<div id="yoga-pilates" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Yoga Pilates',
																'container'       => '',
															]);
														?>
													</div>
													<div id="boxeo-artes-marciales" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Boxeo Artes Marciales',
																'container'       => '',
															]);
														?>
													</div>
													<div id="ciclismo" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Ciclismo',
																'container'       => '',
															]);
														?>
													</div>
													<div id="suplementos" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Suplementos',
																'container'       => '',
															]);
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</span>
								<?php
									wp_nav_menu([
										'theme_location'  => 'header_secondary_menu',
										'menu' 			=> 'Menu Buscador',
										'container'     => '',
										'menu_id'       => 'secondary-movil',
										'container_class'      => 'justify-content-center',
									]);
								?>
							</div>
						</div>
						<!-- menu -->
						<div class="col-md-1 col-2 menu-rigth-section">
							<span style="color:white;" class="cart-icon">
								<?php
								$cart_url = wc_get_cart_url();
								echo
								'<a class="cart-container text-white" href="' . $cart_url . '">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
<g>
	<path d="M3.8,24.5c0.3-0.4,0.5-0.8,0.7-1.2c1.3-2.2,3.2-3.5,5.8-3.5c7.5,0,15,0,22.6,0c1.6,0,3.1,0.4,4.3,1.5
		c0.6,0.6,1.2,0.7,2,0.7c3.2,0,6.4,0,9.6,0c5.7,0,9.9,3.2,11.3,8.6c1.5,5.7,3,11.4,4.4,17.2c0.3,1.2,0.7,1.6,1.9,1.5
		c2.2-0.1,4.4,0,6.5,0c2.1,0,3.4,1.1,3.4,2.7c0,1.6-1.3,2.7-3.4,2.7c-5,0-9.9,0-14.9,0c-1.3,0-1.8,0.1-1.4,1.7
		c5.2,20,10.3,40.1,15.4,60.2c0.8,3.2,2.8,4.8,6.1,4.8c28.4,0,56.8,0,85.1,0c3.3,0,5.2-1.4,6.1-4.6c0.6-2.1,1-4.2,1.7-6.3
		c0.5-1.4,1.6-2.1,3.2-1.6c1.5,0.4,2.3,1.7,1.9,3.2c-0.6,2.4-1.2,4.8-1.9,7.2c-0.4,1.5-1.2,2.8-2.2,3.9c-2.3,2.5-5.2,3.7-8.6,3.7
		c-32.4,0-64.9,0-97.3,0c-4.2,0-6.8,2.7-6.3,6.6c0.3,2.5,2.5,4.5,5,4.7c0.7,0.1,1.3,0,2,0c36,0,72,0,108.1,0c1.2,0,2.4,0.1,3.6,0.6
		c3.6,1.3,5.4,4.7,4.8,8.6c-0.5,3.2-3.6,5.8-7.3,6c-1.6,0.1-3.2,0.1-4.7,0c-1.5-0.1-2,0-1.2,1.7c3.2,6.9-0.2,15.2-7.1,18
		c-5.4,2.1-10.9,1.1-14.9-3c-4.1-4.3-5-9.2-2.9-14.7c0.2-0.6,0.5-1.1,0.8-1.8c-19.3,0-38.5,0-57.8,0c3.4,7.4,2.2,13.9-4.7,18.6
		c-4.8,3.2-10.9,2.7-15.4-0.8c-5.1-4-6.2-9.2-3.5-17.8c-2.3-0.5-4.7-0.7-6.8-1.6c-6.9-2.9-11.3-8.1-12.7-15.4
		c-1.6-8.1,1.2-14.8,7.4-20c3.2-2.7,7-4.3,11.3-4.5c1-0.1,1.4-0.2,1.1-1.4c-4-15.5-8-30.9-12-46.4c-2.1-8.3-4.3-16.7-6.4-25.1
		c-0.4-1.6-1.1-2.1-2.6-2c-1.1,0.1-2.3,0-3.5,0c-1.5,0-2.9,0-4.2,1.2c-1.1,1-2.7,1.1-4.1,1.1c-7.1,0-14.2-0.1-21.3,0
		c-3.7,0-5.8-1.9-7.3-4.9C3.8,31,3.8,27.8,3.8,24.5z M120,143.5C120,143.5,120,143.5,120,143.5c-6.9,0-13.8,0-20.7,0
		c-11.4,0-22.8,0.1-34.2-0.1c-6-0.1-10.7-5.3-10.6-11.2c0.2-6.1,5-11,11-11c2.5,0,2.4,0,1.7-2.5c-0.3-1-0.5-1.7-1.9-1.7
		c-5.7,0.3-10.1,2.8-13,7.7c-2.9,5.1-2.9,10.4,0.1,15.3c4.7,7.7,11.8,8.3,20.3,7.2c1.8-0.2,3.6-0.7,5.4-0.4c2.4,0.4,4.9,0.8,7.4,0.8
		c22-0.1,44,0,66,0c0.9,0,1.8-0.1,2.7-0.4c2.2-0.7,4.4-0.7,6.6-0.2c5,1.2,10.1,0.3,15.2,0.5c1.2,0,2-0.8,2-2.1c0-1.3-0.8-1.8-1.9-2
		c-0.4-0.1-0.8,0-1.3,0C156.7,143.5,138.3,143.5,120,143.5z M21.7,33.7C21.7,33.7,21.7,33.7,21.7,33.7c3.5,0,7-0.1,10.6,0
		c1.4,0,2-0.5,1.9-1.9c0-1.6,0-3.2,0-4.7c0-1.1-0.4-1.8-1.7-1.8c-7.2,0-14.4,0-21.6,0c-1.1,0-1.7,0.5-1.7,1.7c0,1.5,0.1,3,0,4.5
		c-0.2,1.8,0.7,2.3,2.4,2.3C14.9,33.7,18.3,33.7,21.7,33.7z M76.6,168.6c4.5,0.1,8.2-3.6,8.3-8.1c0.1-4.3-3.6-8-8.1-8.2
		c-4.4-0.1-8.2,3.7-8.3,8.1C68.5,164.8,72.2,168.5,76.6,168.6z M166.1,160.4c0-4.4-3.7-8.1-8.1-8.1c-4.5,0-8.1,3.7-8,8.1
		c0.1,4.7,3.6,8.2,8.2,8.1C162.5,168.5,166.1,164.9,166.1,160.4z M45.2,27.4c-1,0-1.9,0-2.9,0c-2.6,0-2.5,0-2.6,2.6
		c0,1.3,0.5,1.5,1.6,1.5c2.1-0.1,4.1-0.1,6.2,0c2.3,0,3.1,0.7,3.7,2.9c1.2,4.5,2.4,8.9,3.5,13.4c0.3,1.3,0.8,1.6,2,1.5
		c0.5-0.1,1,0,1.5,0c1,0.1,1.2-0.3,1-1.3c-1.5-5.5-2.8-11-4.3-16.4c-0.7-2.6-2.7-4.1-5.5-4.1C47.8,27.4,46.5,27.4,45.2,27.4z"/>
	<path d="M133.9,54.7c-15.5,0-30.9,0-46.4,0c-0.7,0-1.5,0.1-2.1-0.2c-1.2-0.5-1.8-1.6-1.6-3c0.2-1.3,1.1-2,2.3-2.3
		c0.3-0.1,0.7,0,1.1,0c31.4,0,62.8,0,94.2,0c6,0,9.7,4.7,8.3,10.6c-0.7,3-1.5,6.1-2.3,9.1c-2.5,9.9-5.1,19.8-7.6,29.6
		c-0.1,0.4-0.2,0.8-0.4,1.2c-0.6,1.5-1.9,2.2-3.3,1.8c-1.4-0.4-2.2-1.7-1.8-3.3c1.4-5.7,2.8-11.3,4.3-17c1.9-7.5,3.8-15.1,5.7-22.6
		c0.6-2.5-0.5-4-3.1-4c-6.1,0-12.2,0-18.4,0C153.2,54.7,143.6,54.7,133.9,54.7z"/>
	<path d="M80.3,66.7c1.2,0.2,2.1,0.9,2.5,2.4c1.6,6.7,3.3,13.5,5,20.2c0.9,3.8,1.9,7.6,2.8,11.4c0.4,1.8-0.4,3.4-1.9,3.7
		c-1.6,0.4-2.9-0.6-3.4-2.5c-2.6-10.6-5.2-21.2-7.8-31.7C77,68.4,78.2,66.7,80.3,66.7z"/>
	<path d="M164,70c-0.4,1.8-1,4-1.5,6.2c-2.1,8.5-4.1,17-6.2,25.4c-0.5,2.2-1.9,3.2-3.5,2.8c-1.6-0.4-2.3-2-1.8-4.2
		c2.5-10.3,5-20.7,7.6-31c0.4-1.8,1.7-2.8,3.2-2.6C163.1,66.9,163.9,68,164,70z"/>
	<path d="M128.9,100.7c0.5-6.7,1.1-13.3,1.6-20c0.3-3.7,0.6-7.4,0.9-11c0.2-1.9,1.2-3,2.7-3c1.6,0,2.8,1.3,2.7,3.2
		c-0.3,4.9-0.8,9.9-1.2,14.8c-0.4,5.4-0.9,10.7-1.3,16.1c-0.1,0.7-0.1,1.5-0.4,2.1c-0.6,1.2-1.6,1.8-3,1.5c-1.2-0.3-2-1.1-2.1-2.4
		C128.9,101.6,128.9,101.1,128.9,100.7z"/>
	<path d="M112.5,101.4c0,1.8-1,3.1-2.6,3.1c-1.5,0.1-2.7-1-2.8-2.7c-0.7-8.8-1.5-17.6-2.2-26.4c-0.1-1.7-0.3-3.5-0.4-5.2
		c-0.1-2.1,0.8-3.4,2.5-3.5c1.5-0.1,2.7,1.1,2.9,3.1c0.3,3.1,0.5,6.3,0.8,9.4c0.6,7.2,1.2,14.3,1.7,21.5
		C112.5,100.9,112.5,101.1,112.5,101.4z"/>
</g>
</svg>
								
									
										<span id="custom-cart">
											<span class="cart-items">
												' . WC()->cart->get_cart_contents_count() . '
											</span>
										</span>
									</a>';
								?>
							</span>
						</div>
					</div>
				</div>
			</div><!-- .row -->
		</header><!-- .container -->



<header id="header" class="container-fluid d-none d-md-block">
			<div class="row">
				<div class="container head-container">
					<div class="row align-items-center">
						<div class="col-2 movil-bar">
							<span style="color:white;" class="menu-hamburguer-movil">
								<a href="" id="show-sub-menu-movil" class="text-white">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 313 254" style="enable-background:new 0 0 313 254;" xml:space="preserve">
<g>
	<path d="M156.6,47.6c-41.4,0-82.7,0-124.1,0c-2,0-4,0-6-0.3c-9.3-1.4-14.2-7-14.2-16.2c0-9.3,4.8-14.9,14.1-16.3
		c1.7-0.3,3.5-0.3,5.2-0.3c83.2,0,166.5,0,249.7,0c1.9,0,3.8,0.1,5.6,0.4c9.1,1.4,13.8,7,13.9,16.2c0,9.2-4.7,14.7-13.8,16.2
		c-2.1,0.3-4.2,0.4-6.3,0.4C239.3,47.6,197.9,47.6,156.6,47.6z"/>
	<path d="M140.4,206.4c36.1,0,72.2,0,108.4,0c2.5,0,5,0.1,7.5,0.6c7.5,1.4,12,6.8,12.7,15c0.6,7.3-3.7,14.1-10.5,16.4
		c-2.6,0.9-5.4,1.2-8.1,1.2c-73.2,0-146.5,0-219.7,0c-12.9,0-19.6-7.3-18.2-19.5c0.9-7.9,7-13.1,16.3-13.5c3.5-0.2,7-0.1,10.5-0.1
		C72.9,206.4,106.7,206.4,140.4,206.4z"/>
	<path d="M108.5,143.6c-25.5,0-51,0-76.5,0c-1.9,0-3.8,0-5.6-0.3c-9.3-1.4-14.2-7-14.2-16.3c0-9.2,4.9-14.8,14.2-16.2
		c1.7-0.3,3.5-0.3,5.2-0.3c51.2,0,102.5,0,153.7,0c1.9,0,3.8,0.1,5.6,0.4c8.9,1.4,13.7,7,13.8,15.8c0.1,9.3-4.5,14.9-13.5,16.5
		c-2,0.3-4,0.4-6,0.4C159.7,143.6,134.1,143.6,108.5,143.6z"/>
</g>
</svg>
								</a>
							</span>
						</div>
						<!-- logo -->
						<div class="col-md-2 col-8 logo-section">
							
							<!-- Your site title as branding in the menu -->
							<?php if (!has_custom_logo()) { ?>

								<?php if (is_front_page() && is_home()) : ?>

									<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

								<?php else : ?>

									<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

								<?php endif; ?>


							<?php } else {
								the_custom_logo();
							} ?>
							<!-- end custom logo -->
						</div>
						<!-- search -->
						<div class="col-md-5 col-12 search-section">
							<!-- Buscador -->
							<div class="buscar-desktop">
							    <img src="https://ciclospecial.com/wp-content/uploads/2024/08/magnifying-glass.svg" alt="Search" class="search-icon">
								<?php echo do_shortcode('[woocommerce_product_search no_results="No encontramos lo que buscas..." category_limit="2" placeholder="Busca productos y categorías"]'); ?>
								<div class="dropdown__overlay overlay fade-animation"></div>
							</div>
							<!-- End Buscador -->
							
						</div>
						<!-- menu -->
						<div class="col-md-5 col-2 menu-rigth-section">
							<span style="color:white;" class="cart-icon">
							 <a href="/mi-cuenta/" id="login-link" class="btn-header-1">Ingresar</a>
							 <a class="cart-container text-white btn-header" href="https://wa.me/573504760479" target="_blank">Ayuda</a>   
								<?php
								$cart_url = wc_get_cart_url();
								echo
								'<a class="cart-container text-white" href="' . $cart_url . '">
					<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
<g>
	<path d="M3.8,24.5c0.3-0.4,0.5-0.8,0.7-1.2c1.3-2.2,3.2-3.5,5.8-3.5c7.5,0,15,0,22.6,0c1.6,0,3.1,0.4,4.3,1.5
		c0.6,0.6,1.2,0.7,2,0.7c3.2,0,6.4,0,9.6,0c5.7,0,9.9,3.2,11.3,8.6c1.5,5.7,3,11.4,4.4,17.2c0.3,1.2,0.7,1.6,1.9,1.5
		c2.2-0.1,4.4,0,6.5,0c2.1,0,3.4,1.1,3.4,2.7c0,1.6-1.3,2.7-3.4,2.7c-5,0-9.9,0-14.9,0c-1.3,0-1.8,0.1-1.4,1.7
		c5.2,20,10.3,40.1,15.4,60.2c0.8,3.2,2.8,4.8,6.1,4.8c28.4,0,56.8,0,85.1,0c3.3,0,5.2-1.4,6.1-4.6c0.6-2.1,1-4.2,1.7-6.3
		c0.5-1.4,1.6-2.1,3.2-1.6c1.5,0.4,2.3,1.7,1.9,3.2c-0.6,2.4-1.2,4.8-1.9,7.2c-0.4,1.5-1.2,2.8-2.2,3.9c-2.3,2.5-5.2,3.7-8.6,3.7
		c-32.4,0-64.9,0-97.3,0c-4.2,0-6.8,2.7-6.3,6.6c0.3,2.5,2.5,4.5,5,4.7c0.7,0.1,1.3,0,2,0c36,0,72,0,108.1,0c1.2,0,2.4,0.1,3.6,0.6
		c3.6,1.3,5.4,4.7,4.8,8.6c-0.5,3.2-3.6,5.8-7.3,6c-1.6,0.1-3.2,0.1-4.7,0c-1.5-0.1-2,0-1.2,1.7c3.2,6.9-0.2,15.2-7.1,18
		c-5.4,2.1-10.9,1.1-14.9-3c-4.1-4.3-5-9.2-2.9-14.7c0.2-0.6,0.5-1.1,0.8-1.8c-19.3,0-38.5,0-57.8,0c3.4,7.4,2.2,13.9-4.7,18.6
		c-4.8,3.2-10.9,2.7-15.4-0.8c-5.1-4-6.2-9.2-3.5-17.8c-2.3-0.5-4.7-0.7-6.8-1.6c-6.9-2.9-11.3-8.1-12.7-15.4
		c-1.6-8.1,1.2-14.8,7.4-20c3.2-2.7,7-4.3,11.3-4.5c1-0.1,1.4-0.2,1.1-1.4c-4-15.5-8-30.9-12-46.4c-2.1-8.3-4.3-16.7-6.4-25.1
		c-0.4-1.6-1.1-2.1-2.6-2c-1.1,0.1-2.3,0-3.5,0c-1.5,0-2.9,0-4.2,1.2c-1.1,1-2.7,1.1-4.1,1.1c-7.1,0-14.2-0.1-21.3,0
		c-3.7,0-5.8-1.9-7.3-4.9C3.8,31,3.8,27.8,3.8,24.5z M120,143.5C120,143.5,120,143.5,120,143.5c-6.9,0-13.8,0-20.7,0
		c-11.4,0-22.8,0.1-34.2-0.1c-6-0.1-10.7-5.3-10.6-11.2c0.2-6.1,5-11,11-11c2.5,0,2.4,0,1.7-2.5c-0.3-1-0.5-1.7-1.9-1.7
		c-5.7,0.3-10.1,2.8-13,7.7c-2.9,5.1-2.9,10.4,0.1,15.3c4.7,7.7,11.8,8.3,20.3,7.2c1.8-0.2,3.6-0.7,5.4-0.4c2.4,0.4,4.9,0.8,7.4,0.8
		c22-0.1,44,0,66,0c0.9,0,1.8-0.1,2.7-0.4c2.2-0.7,4.4-0.7,6.6-0.2c5,1.2,10.1,0.3,15.2,0.5c1.2,0,2-0.8,2-2.1c0-1.3-0.8-1.8-1.9-2
		c-0.4-0.1-0.8,0-1.3,0C156.7,143.5,138.3,143.5,120,143.5z M21.7,33.7C21.7,33.7,21.7,33.7,21.7,33.7c3.5,0,7-0.1,10.6,0
		c1.4,0,2-0.5,1.9-1.9c0-1.6,0-3.2,0-4.7c0-1.1-0.4-1.8-1.7-1.8c-7.2,0-14.4,0-21.6,0c-1.1,0-1.7,0.5-1.7,1.7c0,1.5,0.1,3,0,4.5
		c-0.2,1.8,0.7,2.3,2.4,2.3C14.9,33.7,18.3,33.7,21.7,33.7z M76.6,168.6c4.5,0.1,8.2-3.6,8.3-8.1c0.1-4.3-3.6-8-8.1-8.2
		c-4.4-0.1-8.2,3.7-8.3,8.1C68.5,164.8,72.2,168.5,76.6,168.6z M166.1,160.4c0-4.4-3.7-8.1-8.1-8.1c-4.5,0-8.1,3.7-8,8.1
		c0.1,4.7,3.6,8.2,8.2,8.1C162.5,168.5,166.1,164.9,166.1,160.4z M45.2,27.4c-1,0-1.9,0-2.9,0c-2.6,0-2.5,0-2.6,2.6
		c0,1.3,0.5,1.5,1.6,1.5c2.1-0.1,4.1-0.1,6.2,0c2.3,0,3.1,0.7,3.7,2.9c1.2,4.5,2.4,8.9,3.5,13.4c0.3,1.3,0.8,1.6,2,1.5
		c0.5-0.1,1,0,1.5,0c1,0.1,1.2-0.3,1-1.3c-1.5-5.5-2.8-11-4.3-16.4c-0.7-2.6-2.7-4.1-5.5-4.1C47.8,27.4,46.5,27.4,45.2,27.4z"/>
	<path d="M133.9,54.7c-15.5,0-30.9,0-46.4,0c-0.7,0-1.5,0.1-2.1-0.2c-1.2-0.5-1.8-1.6-1.6-3c0.2-1.3,1.1-2,2.3-2.3
		c0.3-0.1,0.7,0,1.1,0c31.4,0,62.8,0,94.2,0c6,0,9.7,4.7,8.3,10.6c-0.7,3-1.5,6.1-2.3,9.1c-2.5,9.9-5.1,19.8-7.6,29.6
		c-0.1,0.4-0.2,0.8-0.4,1.2c-0.6,1.5-1.9,2.2-3.3,1.8c-1.4-0.4-2.2-1.7-1.8-3.3c1.4-5.7,2.8-11.3,4.3-17c1.9-7.5,3.8-15.1,5.7-22.6
		c0.6-2.5-0.5-4-3.1-4c-6.1,0-12.2,0-18.4,0C153.2,54.7,143.6,54.7,133.9,54.7z"/>
	<path d="M80.3,66.7c1.2,0.2,2.1,0.9,2.5,2.4c1.6,6.7,3.3,13.5,5,20.2c0.9,3.8,1.9,7.6,2.8,11.4c0.4,1.8-0.4,3.4-1.9,3.7
		c-1.6,0.4-2.9-0.6-3.4-2.5c-2.6-10.6-5.2-21.2-7.8-31.7C77,68.4,78.2,66.7,80.3,66.7z"/>
	<path d="M164,70c-0.4,1.8-1,4-1.5,6.2c-2.1,8.5-4.1,17-6.2,25.4c-0.5,2.2-1.9,3.2-3.5,2.8c-1.6-0.4-2.3-2-1.8-4.2
		c2.5-10.3,5-20.7,7.6-31c0.4-1.8,1.7-2.8,3.2-2.6C163.1,66.9,163.9,68,164,70z"/>
	<path d="M128.9,100.7c0.5-6.7,1.1-13.3,1.6-20c0.3-3.7,0.6-7.4,0.9-11c0.2-1.9,1.2-3,2.7-3c1.6,0,2.8,1.3,2.7,3.2
		c-0.3,4.9-0.8,9.9-1.2,14.8c-0.4,5.4-0.9,10.7-1.3,16.1c-0.1,0.7-0.1,1.5-0.4,2.1c-0.6,1.2-1.6,1.8-3,1.5c-1.2-0.3-2-1.1-2.1-2.4
		C128.9,101.6,128.9,101.1,128.9,100.7z"/>
	<path d="M112.5,101.4c0,1.8-1,3.1-2.6,3.1c-1.5,0.1-2.7-1-2.8-2.7c-0.7-8.8-1.5-17.6-2.2-26.4c-0.1-1.7-0.3-3.5-0.4-5.2
		c-0.1-2.1,0.8-3.4,2.5-3.5c1.5-0.1,2.7,1.1,2.9,3.1c0.3,3.1,0.5,6.3,0.8,9.4c0.6,7.2,1.2,14.3,1.7,21.5
		C112.5,100.9,112.5,101.1,112.5,101.4z"/>
</g>
</svg>
								
									
										<span id="custom-cart">
											<span class="cart-items">
												' . WC()->cart->get_cart_contents_count() . '
											</span>
										</span>
									</a>';
								?>
							</span>
						</div>
						<div class="menu-content col-12">
								<span style="color:white;" class="menu-hamburguer">
									<a href="" id="show-sub-menu-desktop" class="text-white">
										<span class="menu-text">
<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
<g>
	<path d="M90.3,53.8c0,9.9,0,19.7,0,29.6c0,4.4-2.6,7-7,7c-19.3,0-38.6-0.1-57.9,0.1c-12.5,0.1-22.1-10.2-22-22
		c0.2-14.3,0.2-28.7,0-43.1c-0.1-12.1,9.8-22.1,22-22c14.3,0.1,28.6,0.1,42.9,0c12.6-0.1,22.4,10.1,22.1,22.3
		C90.2,35,90.3,44.4,90.3,53.8C90.3,53.8,90.3,53.8,90.3,53.8z M50.3,77.5c8.3,0,16.6-0.1,24.9,0c1.7,0,2.3-0.4,2.3-2.2
		c-0.1-16.5,0-33,0-49.5c0-5.9-3.6-9.5-9.5-9.5c-14,0-28,0-42.1,0c-6.1,0-9.6,3.5-9.7,9.6c0,14.1,0,28.2,0,42.3
		c0,5.6,3.7,9.3,9.3,9.4C33.8,77.5,42,77.5,50.3,77.5z"/>
	<path d="M146.2,90.3c-9.9,0-19.7,0-29.6,0c-4.2,0-6.9-2.7-6.9-6.9c0-19.4,0.1-38.9,0-58.3c0-9.8,6.6-18.7,16.4-21.1
		c1.5-0.4,3-0.6,4.5-0.6c15,0,29.9,0,44.9,0c11.5,0,21.1,9.7,21.1,21.2c0.1,14.8,0.1,29.6,0,44.5c0,11.6-9.6,21.2-21.3,21.3
		c-4.9,0.1-9.8,0-14.7,0C155.8,90.4,151,90.3,146.2,90.3z M122.5,50.3c0,8.4,0,16.8,0,25.1c0,1.7,0.5,2.1,2.1,2.1
		c16.6-0.1,33.1,0,49.7,0c5.8,0,9.4-3.6,9.4-9.4c0-14.2,0-28.4,0-42.6c0-5.5-3.7-9.2-9.2-9.2c-14.2,0-28.4,0-42.6,0
		c-5.7,0-9.3,3.6-9.3,9.3C122.5,33.8,122.5,42.1,122.5,50.3z"/>
	<path d="M90.3,146.4c0,9.5,0,19.1,0,28.6c0,12.1-9.4,21.6-21.5,21.6c-14.6,0.1-29.2,0.1-43.9,0c-12-0.1-21.5-9.6-21.5-21.6
		c0-14.6,0-29.1,0-43.7c0-12.1,9.5-21.6,21.7-21.6c19.5,0,38.9,0,58.4,0c4.2,0,6.9,2.7,6.9,6.9C90.3,126.5,90.3,136.4,90.3,146.4
		C90.3,146.4,90.3,146.4,90.3,146.4z M77.5,149.7c0-8.4,0-16.8,0-25.1c0-1.6-0.4-2-2-2c-16.6,0.1-33.2,0-49.9,0
		c-5.8,0-9.4,3.6-9.4,9.4c0,14.1,0,28.3,0,42.4c0,5.6,3.7,9.3,9.3,9.3c14.1,0,28.3,0,42.4,0c5.9,0,9.5-3.6,9.5-9.5
		C77.5,166,77.5,157.8,77.5,149.7z"/>
	<path d="M146.5,109.7c9.3,0,18.6,0,28,0c12.8,0,22.1,9.4,22.1,22.2c0,14.2,0,28.4,0,42.7c0,12.6-9.3,22-21.9,22
		c-14.4,0.1-28.7,0.1-43.1,0c-12.5,0-21.9-9.5-21.9-22c0-19.3,0-38.6,0-58c0-4.4,2.6-6.9,7-6.9C126.6,109.7,136.6,109.7,146.5,109.7
		z M122.5,149.7c0,8.4,0,16.8,0,25.2c0,5,3.7,8.8,8.7,8.8c14.6,0,29.1,0,43.7,0c5,0,8.8-3.8,8.8-8.8c0-14.5,0-29,0-43.5
		c0-5-3.7-8.9-8.7-8.9c-16.9,0-33.8,0-50.7,0c-1.4,0-1.8,0.5-1.8,1.8C122.6,132.8,122.5,141.3,122.5,149.7z"/>
</g>
</svg>
Categorias</span>
										<i class="fa fa-angle-down" aria-hidden="true"></i>
									</a>
									<div class="sub-menu-content">
										<div class="content-menu">
											<nav id="menu">
												<?php
													wp_nav_menu([
														'theme_location'  => 'primary',
														'menu'  		  => 'Main',
														'container'       => '',
														'menu_id'         => 'main',
													]);
												?>
											</nav>
											<div class="content-categories">
												<div class="back-movil">
													<a href="" class="back-menu"><i class="fa fa-angle-left"></i> menú principal</a>
												</div>
												<div class="submenu-Cardio">
													<div id="cardio" class="submenu-right">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Cardio',
																'container'       => '',
															]);
														?>
													</div>
													<div id="accesorio" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Accesorios',
																'container'       => '',
															]);
														?>
													</div>
													<div id="fuerza" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Fuerza',
																'container'       => '',
															]);
														?>
													</div>
													<div id="funcional" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Funcional',
																'container'       => '',
															]);
														?>
													</div>
													<div id="yoga-pilates" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Yoga Pilates',
																'container'       => '',
															]);
														?>
													</div>
													<div id="boxeo-artes-marciales" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Boxeo Artes Marciales',
																'container'       => '',
															]);
														?>
													</div>
													<div id="ciclismo" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Ciclismo',
																'container'       => '',
															]);
														?>
													</div>
													<div id="suplementos" class="submenu-right d-none">
														<?php
															wp_nav_menu([
																'menu'  		  => 'Suplementos',
																'container'       => '',
															]);
														?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</span>
								<?php
									wp_nav_menu([
										'theme_location'  => 'header_secondary_menu',
										'menu' 			=> 'Menu Buscador',
										'container'     => '',
										'menu_id'       => 'secondary-movil',
										'container_class'      => 'justify-content-center',
									]);
								?>
							</div>
					</div>
				</div>
			</div><!-- .row -->
		</header><!-- .container -->
