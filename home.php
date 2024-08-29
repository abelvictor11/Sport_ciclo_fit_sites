<?php 
/**
 * Template Name: TiendaSportFitness Page
 */

get_header();
?>
<!-- Banner -->
<?php get_template_part('template-parts/banner','desktop'); ?>

<!-- Reassurance -->
<?php get_template_part('template-parts/reassurance','section'); ?>

<!-- Interest -->
<?php get_template_part('template-parts/interest','section'); ?>

<!-- Best Selling -->
<?php get_template_part('template-parts/best_selling','section'); ?>

<!-- Banners -->
<?php get_template_part('template-parts/banner_a_and_b','section'); ?>

<!-- Brands Section - renamed to avoid conflicts -->
<?php get_template_part('template-parts/brands_new','section'); ?>


<!-- Brands cards Section -->
<!-- <?php get_template_part('template-parts/brands','section'); ?>  -->

<!-- Category Best Selling -->
<?php get_template_part('template-parts/category_best_selling','section'); ?>

<!-- Promo Banner -->
<?php get_template_part('template-parts/banner_promo','section'); ?>

<!-- Category bottom slider -->
<?php get_template_part('template-parts/offers','section'); ?>

<!-- Banners promo two a b -->
<?php get_template_part('template-parts/banners_promo_two_a_b','section'); ?>

<!-- Categories -->
<?php get_template_part('template-parts/categories','section'); ?>

<!-- Footer SEO Description -->
<?php 
  $seo_description = get_field('seo_description' );
?>
<?php if($seo_description): ?>
  <div id="footer-category-description" class="container mt-5">
    <div class="row">
      <div class="col-12">
        <p class="p-3 m-0"><?= $seo_description; ?></p>
      </div>
    </div>
  </div>
<?php endif; ?> 

<?php get_footer(); ?>
