<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();?>
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h1 class="mb-3"><?php echo the_title();?></h1>
								<div class="content">
									<?php echo the_content();?>
								</div>
							</div>
							
						</div>
					</div>
					<!-- DESTACADOS -->
					<div id="destacados" class="container mb-5 mt-5">
						<div class="row">
							<div class="col-md-12">
								<h2>Nuestros destacados</h2>
							</div>
							<div class="col-md-12 mt-4">
								<?php echo do_shortcode( '[products limit="24" columns="4" visibility="featured" ]' ); ?>
							</div>
						</div>	
					</div>
					<!-- END DESTACADOS -->
					<div class="nav-post mt-5 mb-5">

						<?php understrap_post_nav();?>
					</div>
					
					<?php 
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php
get_footer();
