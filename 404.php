<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="error-404-wrapper">

	<div class="container" id="content" tabindex="-1">

		<div class="row">
			<div class="col-12 mt-5">
				<h1 class="text-center">404 - Página no encontrada</h1>
				<div class="buscador-404">
					<p class="mb-3 text-center">¿Estás buscando algo en especial?</p>
					<?php echo do_shortcode('[woocommerce_product_search no_results="No encontramos lo que buscas..." category_limit="5" placeholder="Busca productos y categorías"]' ); ?>
				</div>
			</div>
			<div class="col-12">
				<?php get_template_part('template-parts/best_selling','section'); ?>
			</div>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #error-404-wrapper -->

<?php get_footer(); ?>
