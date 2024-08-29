<?php

/**
 * Template Name: FAQ
 * 
 * 
 */

get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-12 mt-5 mb-5 text-center">
      <h1><?php the_title();?></h1>
    </div>
    <div class="col-12">
      <?php echo do_shortcode("[ultimate-faqs include_category='generales' ]"); ?>
    </div>
  </div>

</div>



<?php get_footer(); ?>