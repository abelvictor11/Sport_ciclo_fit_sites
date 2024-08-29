<?php

/**
 * Template Name: Repuestos
 * 
 * 
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;
get_header();
?>

<div class="container">
  <div class="row">
    <div class="col-12 mt-5 mb-3">
      <h1 class="text-center"><?php the_title(); ?></h1>
    </div>
    <div class="col-md-6 offset-md-3 form">
      <?php
      $form = get_field('form');
      echo $form;
      ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>
<script>
  var configForms = {
    apiKey: '9a0818b5e2904df4857e4ee33b69ac05',
    formId: '61e1b4e71ed4c37cce1c4d2e',
    selectedCustomizationId: 0
  }

  window.keybe.formsUiLoad(configForms)
</script>