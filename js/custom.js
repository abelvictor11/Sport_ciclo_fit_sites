// Menu categories show hidden
var show = false;

jQuery('#show-sub-menu-movil').on('click', function(e){
    if(show == false){
        jQuery('.sub-menu-content').css({'display':'block'});
        show = true;
    }else if(show == true){
        jQuery('.sub-menu-content').css({'display':'none'});
        show = false;
    }
    e.preventDefault();
});

// menu hover
jQuery('#menu > ul > li').mouseover(function(){
    var categoryStorage = jQuery('a', this).text();
    if(categoryStorage === 'Cardio'){
        jQuery('.submenu-right').addClass('d-none');
        jQuery('#cardio').removeClass('d-none');
    }else if(categoryStorage === 'Accesorios'){
        jQuery('.submenu-right').addClass('d-none');
        jQuery('#accesorio').removeClass('d-none');
    }else if(categoryStorage === 'Fuerza'){
        jQuery('.submenu-right').addClass('d-none');
        jQuery('#fuerza').removeClass('d-none');
    }else if(categoryStorage === 'Funcional'){
        jQuery('.submenu-right').addClass('d-none');
        jQuery('#funcional').removeClass('d-none');
    }else if(categoryStorage === 'Yoga y Pilates'){
        jQuery('.submenu-right').addClass('d-none');
        jQuery('#yoga-pilates').removeClass('d-none');
    }else if(categoryStorage === 'Boxeo / Artes Marciales'){
        jQuery('.submenu-right').addClass('d-none');
        jQuery('#boxeo-artes-marciales').removeClass('d-none');
    }else if(categoryStorage === 'Ciclismo'){
        jQuery('.submenu-right').addClass('d-none');
        jQuery('#ciclismo').removeClass('d-none');
    }else if(categoryStorage === 'Suplementos'){
        jQuery('.submenu-right').addClass('d-none');
        jQuery('#suplementos').removeClass('d-none');
    }else{
        jQuery('.submenu-right').addClass('d-none');
    }
});

if(jQuery(window).width() <= 768){
        
    jQuery('#menu > ul > li').on('click', function(e){
        jQuery('#menu').addClass('d-none');
        if(categoryStorage === 'Cardio'){
            jQuery('.submenu-right').addClass('d-none');
            jQuery('#cardio').removeClass('d-none');
        }else if(categoryStorage === 'Accesorios'){
            jQuery('.submenu-right').addClass('d-none');
            jQuery('#accesorio').removeClass('d-none');
        }else if(categoryStorage === 'Fuerza'){
            jQuery('.submenu-right').addClass('d-none');
            jQuery('#fuerza').removeClass('d-none');
        }else if(categoryStorage === 'Funcional'){
            jQuery('.submenu-right').addClass('d-none');
            jQuery('#funcional').removeClass('d-none');
        }else if(categoryStorage === 'Yoga y Pilates'){
            jQuery('.submenu-right').addClass('d-none');
            jQuery('#yoga-pilates').removeClass('d-none');
        }else if(categoryStorage === 'Boxeo / Artes Marciales'){
            jQuery('.submenu-right').addClass('d-none');
            jQuery('#boxeo-artes-marciales').removeClass('d-none');
        }else if(categoryStorage === 'Ciclismo'){
            jQuery('.submenu-right').addClass('d-none');
            jQuery('#ciclismo').removeClass('d-none');
        }else if(categoryStorage === 'Suplementos'){
            jQuery('.submenu-right').addClass('d-none');
            jQuery('#suplementos').removeClass('d-none');
        }else{
            jQuery('.submenu-right').addClass('d-none');
        }
        e.preventDefault();
    });
    jQuery('.back-menu').on('click', function(e){
        jQuery('#menu').removeClass('d-none');
        jQuery('.submenu-right').addClass('d-none');
        e.preventDefault();
    });
}

jQuery(document).ready(function () {
    console.log("ready!");

    function cleanPrice() {
        let price = jQuery('.product-type-variable span.price').text()
        var newValue = $(price).text().replace('-', '');
        $(price).text(newValue);
    }


    // Build main banners
    jQuery('.owl-carousel.banner').owlCarousel({
        autoplay:true,
        nav:true,
        loop:true,
        margin:0,
        smartSpeed:1500,
        items:1
    });

    // slider interest
    jQuery('.owl-carousel.interest').owlCarousel({
        autoplay:false,
        nav:false,
        loop:false,
        margin:10,
        responsive:{
            0:{
                items:2,
                stagePadding: 50,
                dots:true,
            },
            600:{
                items:4,
                stagePadding: 50,
                dots:true,
            },
            1000:{
                items:8
            }
        }
    });

    // movil
    jQuery('.owl-carousel.reassurance').owlCarousel({
        autoplay:false,
        dots:true,
        nav:false,
        loop:false,
        margin:0,
        stagePadding: 20,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            }
        }
    });
    jQuery('.best-seller-movil .products').removeClass('row');
    jQuery('.best-seller-movil .product').removeClass('col-md-4 col-6 pt-3').addClass('col-12 p-0');
    //slider mas vendidos
    jQuery('#mas-vendidos .products').slick({
        autoplay:false,
        lazyLoad: 'progressive',
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: '<div class="prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',
        nextArrow: '<div class="next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',
        dots: false,
        padding:0,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 767,

                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 640,

                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ]
    });

    // slide brands
    jQuery('.owl-carousel.brands').owlCarousel({
        autoplay:false,
        dots:true,
        nav:false,
        loop:false,
        margin:5,
        responsive:{
            0:{
                items:1,
                stagePadding: 20,
            },
            600:{
                items:2,
                stagePadding: 20,
            },
            1000:{
                items:4
            }
        }
    });

    // offers m√≥vil
    jQuery('#movil-offer .products').removeClass('row');
    jQuery('#movil-offer .products .product').removeClass('col-md-4 col-6 pt-3').addClass('col-12 p-0');
    // slide offer desktop
    jQuery('#offers .products').slick({
        autoplay:false,
        lazyLoad: 'progressive',
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: '<div class="prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',
        nextArrow: '<div class="next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',
        dots: false,
        padding:0,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 767,

                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: false,
                },
            },
            {
                breakpoint: 640,

                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                },
            },
        ]
    });
    // Category best selling
    // Removing classes in mobile so that it is not a slider in category dest selling
    jQuery('.movil-category-best-selling .products').removeClass('row');
    jQuery('.movil-category-best-selling .product').removeClass('col-6 pt-3').addClass('col-12 p-0');
    // slider category dest selling
    jQuery('#best-sellers-categories .products').slick({
        autoplay:false,
        lazyLoad: 'progressive',
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: '<div class="prev-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>',
        nextArrow: '<div class="next-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>',
        dots: false,
        padding:0,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 767,

                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    dots: false,
                },
            },
            {
                breakpoint: 640,

                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                },
            },
        ]
    });


    jQuery('#mas-vendidos .products').show();

    // Categrories slider
    jQuery('.owl-carousel.categories-desktop').owlCarousel({
        autoplay:false,
        dots:false,
        nav:true,
        loop:false,
        margin:15,
        responsiveClass:true,
        responsive:{
            0:{
                items:3,
            },
            600:{
                items:3,
            },
            1000:{
                items:4,
            }
        }
    });
    // Load More Categories

    // const loadmore = document.querySelector('#load-more');

    // let currentItems = 4;
    // loadmore.addEventListener('click', (e) => {
    //     const elementList = [...document.querySelectorAll('#categorias .category-block')];
    //     for (let i = currentItems; i < currentItems + 4; i++) {
    //         if (elementList[i]) {
    //             elementList[i].style.display = 'block';
    //             elementList[i].style.transition = 'all 2s linear';
    //             elementList[i].style.opacity = '1';

    //         }
    //     }
    //     currentItems += 4;

    //     // Load more button will be hidden after list fully loaded
    //     if (currentItems >= elementList.length) {
    //         event.target.style.display = 'none';
    //     }
    // })

    // Search
    jQuery('.product-search-form input.product-search-field').keypress(function () {
        // debugger;
        // console.log('hey')
        setTimeout(function () { jQuery('.product-search-results-content').addClass('has-child'); }, 500);

        console.log('ok')
        // // if(jQuery('.product-search-results-content').children().length > 0 && jQuery('.product-search-form input[type="text"]').val()) {
        // if(jQuery('.product-search-form input[type="text"]').keyup()) {
        //     console.log('ok')   
        //     jQuery('.product-search-results-content').addClass('has-child');

        // } else {
        //     jQuery('.product-search-results-content').removeClass('has-child');
        // }
    })
    jQuery('.span.product-search-field-clear').click(function () {
        jQuery('.product-search-results-content').removeClass('has-child');
    })



    // Checkout
    if (window.location.href.indexOf("checkout") > -1) {

        var oe = jQuery('#billing_phone')
        oe.removeAttr('autocomplete')
        oe.attr('data-initial', '+57 ')
        oe.attr('maxlength', '14')
	oe.attr('minlength', '11')
        oe.attr('value', '+57 ')
        oe.on("keyup", function () {
            var value = jQuery(this).val();
            jQuery(this).val($(this).data("initial") + value.substring(4));
        });
        console.log('Clean')
    }
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 50) {
            jQuery('.top-bar').addClass('d-none');
        } else {
            jQuery('.top-bar').removeClass('d-block');
        }
    });
});

// Sticky Header

// When the user scrolls the page, execute myFunction
window.onscroll = function () {
    myFunction()
};

// Get the header
var header = document.getElementById("header");

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        // console.log('oelo')
    } else {
        header.classList.remove("sticky");
    }
}

jQuery(document).ready(function ($) {

    jQuery(".woocommerce-product-details__short-description").wrapInner("<div class='description-view-more'></div>");
    jQuery(".woocommerce-product-details__short-description").prepend("<div class='text-view-more'><span>Ver m√°s Informaci√≥n</span></div>");

    jQuery('.description-view-more').addClass('d-none');

    jQuery('.text-view-more').on('click', function () {
        jQuery(this).next('.description-view-more').toggleClass('d-none');
    });

    console.info('ok')


    if(jQuery("#order_comments")){
        jQuery("#order_comments").prop('maxlength', '55');
    }
});

jQuery('.is-sub-menu a').on('click', function(e){
    jQuery(this).parent().hover();
    e.preventDefault();
});






// Selecciona el input de b®≤squeda
const searchInput = document.querySelector('.product-search input[type="text"].product-search-field');

// Selecciona el overlay
const overlay = document.querySelector('.dropdown__overlay.overlay');

// Funci®Æn para mostrar el overlay y resaltar el input
function activateOverlay() {
  overlay.classList.add('active'); // Muestra el overlay
  searchInput.classList.add('highlight'); // Resalta el input
}

// Funci®Æn para ocultar el overlay y quitar el resaltado del input
function deactivateOverlay() {
  overlay.classList.remove('active'); // Oculta el overlay
  searchInput.classList.remove('highlight'); // Quita el resaltado del input
}

// Escucha el foco y clic en el input
searchInput.addEventListener('focus', activateOverlay);
searchInput.addEventListener('click', activateOverlay);

// Oculta el overlay cuando se pierde el foco o se hace clic fuera del input
document.addEventListener('click', (event) => {
  if (!searchInput.contains(event.target) && !overlay.contains(event.target)) {
    deactivateOverlay();
  }
});

