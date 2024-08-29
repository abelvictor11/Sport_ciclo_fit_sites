<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!-- START BANNER -->
<div id ="banner-container" class="container-fluid">
	<div class="row">
			<?php if( have_rows('banner') ): ?>
				<div class="slides owl-carousel desktop col">
					<?php while( have_rows('banner') ): the_row(); 

						// vars
						$image = get_sub_field('banner_image');
						$link = get_sub_field('banner_link');

						?>
						<div class="slide">
							<?php if( $link ): ?>
								<a href="<?php echo $link; ?>">
							<?php endif; ?>
								<img loading="lazy" class="img-fluid" src="<?php echo $image; ?>" alt="" />
							<?php if( $link ): ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?> 
			<?php if( have_rows('banner_mobile') ): ?>
				<div class="slides owl-carousel mobile col">
					<?php while( have_rows('banner_mobile') ): the_row(); 

						// vars
						$image = get_sub_field('banner_image');
						$link = get_sub_field('banner_link');

						?>
						<div class="slide">
							<?php if( $link ): ?>
								<a href="<?php echo $link; ?>">
							<?php endif; ?>
								<img loading="lazy" class="img-fluid" src="<?php echo $image; ?>" alt="" />
							<?php if( $link ): ?>
								</a>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?> 	
	</div>
</div>
<!-- END BANNER -->