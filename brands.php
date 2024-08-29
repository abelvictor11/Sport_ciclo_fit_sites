<?php

/**
 * Template Name: Brands
 * 
 * 
 */
defined('ABSPATH') || exit;
get_header();
?>
<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-12 text-center">
      <h1><?php the_title(); ?></h1>

    </div>
  </div>
</div>

<!-- Brands Section -->
<div class="container brands-page">
  <div class="row">
    <div class="col-12">
      <?php echo do_shortcode('[pwb-all-brands per_page="24" image_size="thumbnail" hide_empty="true" order_by="name" order="ASC" title_position="before"]'); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>