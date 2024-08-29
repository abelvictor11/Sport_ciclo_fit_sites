<?php

/**
 * Template Name: Blog Page
 * 
 * 
 */
// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$banner = get_field('banner_image');
?>
<div id="blog-page-head" class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center"><?php the_title(); ?></h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">


        <?php
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();
            $banner_post = get_field('banner');
            $size = 'full';
            //$image = get_the_post_thumbnail_url();
            $content = wp_strip_all_tags(get_the_content());
            $link = get_the_permalink();
        ?>

            <div class="col-md-6 mt-5 blog-item">
                <a href="<?php the_permalink(); ?>">
                    <?php $image = get_field('banner_blog'); ?>
                    <img class="img-fluid" src="<?php echo $image['url'];?>" alt="">
                    <?php echo wp_get_attachment_image($banner_post, $size); ?>
                    <hr>
                    <h2 class="post-title mt-2"><?php the_title(); ?></h2>
                    <div class="p-content">
                        <p><?php echo mb_strimwidth($content, 0, 290, "..."); ?></p>
                    </div>
                    <div class="cta">
                        <button class="btn btn-blog btn-sportfitness">Leer Más</button>
                    </div>
                </a>
            </div>
        <?php
        endwhile;

        wp_reset_postdata();
        ?>
    </div>
</div>
<?php get_footer(); ?>