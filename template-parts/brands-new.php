<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
// Add the new slick-theme.css if you want the default styling
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>




<?php
$brands_new = get_field('brand_logos_new'); // Asegúrate que este nombre es correcto

if ($brands_new) :
?>
<section id="brand-carousel-new" class="container my-5">
    <div class="brand-carousel-slider">
        <?php foreach ($brands_new as $brand) : ?>
            <div class="brand-item">
                <img src="<?php echo esc_url($brand['brands']['url']); ?>" alt="Brand Logo" class="img-fluid">
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<script>
    jQuery(document).ready(function($) {
    $('.brand-carousel-slider').slick({
        slidesToShow: 8,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 6
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });
});

</script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>