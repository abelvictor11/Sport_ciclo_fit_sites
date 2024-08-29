<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
$payment_logo = get_field('payment_logos', 'option');
?>


</div><!-- #page we need this extra closing tag here -->
<footer class="footer mt-4 pt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-lg-2 offset-lg-1 newsletter">
				<?= the_custom_logo(); ?>
			</div>
			<div class="col-6 col-md-4 col-lg-2 help mb-3">
				<h5 class="text-white">Categorías</h5>
				<?php wp_nav_menu(array('menu' => 'Categorias', 'theme_location'  => 'categories',)); ?>
			</div>
			<div class="col-6 col-md-4 col-lg-2 help mb-3">
				<h5 class="text-white">Ayuda</h5>
				<?php wp_nav_menu(array('menu' => 'Ayuda Menu', 'theme_location'  => 'help_menu',)); ?>
			</div>
			<div class="col-6 col-md-4 col-lg-2 help mb-3">
				<h5 class="text-white">Acerca de</h5>
				<?php wp_nav_menu(array('menu' => 'FooterMenu', 'theme_location'  => 'FooterMenu',)); ?>
			</div>
			<div class="col-6 col-md-4 col-lg-2  help mb-3">
				<h5 class="text-white">Síguenos</h5>
				<?php wp_nav_menu(array('menu' => 'SocialMedia')); ?>
			</div>
		</div>
	</div>
	<div class="container-fluid bottom pt-1 pb-1">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="text-center col-12">
						<?php the_field('legal', 'option'); ?>
						<p class="text-center">&copy; 2018 – <?php echo date('Y'); ?> <?php echo parse_url(get_home_url(), PHP_URL_HOST); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

	<?php if( is_product() && have_rows('faq')): ?>
		<script type="application/ld+json">
			{
				"@context": "https://schema.org",
				"@type": "FAQPage",
				"mainEntity": [{
					<?php 
					while( have_rows('faq') ): the_row();
					
						$question = get_sub_field('question');
						$answer = get_sub_field('answer');
					
						
					?>
					"@type": "Question",
					"name": "<?php echo $question;?>",
					"acceptedAnswer": {
					"@type": "Answer",
					"text": "<?php echo $answer;?>"
					}
				}]
			}
    		<?php endwhile; ?>
    </script>
	<?php endif; ?>
</body>

</html>