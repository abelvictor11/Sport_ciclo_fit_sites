<?php

/**
 * Template Name: Servicio Tecnico
 * 
 * 
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
$shortcode = get_field('shortcode');
$text = get_field('text');
?>
<div class="container">
  <div class="row">
    <div class="col-12 mt-5 mb-3">
      <h1 class="text-center"><?php the_title(); ?></h1>
    </div>
    <div class="col-12">
      <div class="text-technicservice mb-5 text-center">
        <?php echo $text; ?>
      </div>
      <?php echo do_shortcode($shortcode); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>