<?php
/**
 * Template Name: Contact
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
$title = get_the_title();
$subtitle = get_field('subtitle');
$text = get_field('text');
$contact_form = get_field('contact_form');

get_header();

?>

<div class="container top-site" id="contacto">
    <div class="row">
        <div class="col-12 mt-5">
            <h1 class="text-center"><?php echo $title; ?></h1>
            <h3 class="subtitle text-center mt-3"><?php echo $subtitle; ?></h3>
            <p class="text-center contact-text mt-2"><?php echo $text; ?></p>
        </div>
        <div class="col-12 mt-5 contact-form">
            <?php echo $contact_form; ?>
        </div>
    </div>
</div>

<?php get_footer();?>