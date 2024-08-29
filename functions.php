<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
add_filter('woocommerce_webhook_deliver_async', '__return_false');
function understrap_remove_scripts()
{
    wp_dequeue_style('understrap-styles');
    wp_deregister_style('understrap-styles');

    wp_dequeue_script('understrap-scripts');
    wp_deregister_script('understrap-scripts');

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{

    // Get the theme data
    $the_theme = wp_get_theme();
    wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get('Version'));
    wp_enqueue_script('jquery');
    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get('Version'), true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

function add_child_theme_textdomain()
{
    load_child_theme_textdomain('understrap-child', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'add_child_theme_textdomain');

/*** +Disable Gutenberg ***/
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
/*** -Disable Gutenberg ***/

function tienda_sportfitness_scripts()
{
    $dir = get_theme_file_uri();

    // Styles
    wp_enqueue_style('custom-styles', $dir . '/css/custom.css', array(), '0.5', 'all');
    wp_enqueue_style('menu', $dir . '/libraries/mmenu/mmenu-light.css', array(), '0.1.0', 'all');
    wp_enqueue_style('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '0.1.0', 'all');
    wp_enqueue_style('g-font-static', 'https://fonts.gstatic.com', array(), '0.1.0', 'all');
    wp_enqueue_style('g-font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), '0.1.0', 'all');
    wp_enqueue_style('owl-carousel.css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');

    // wp_enqueue_style('fonts', $dir . 'fonts/style.css', array(), '0.1.0', 'all');  



    // Scripts

    wp_enqueue_script('menu-js', $dir . '/libraries/mmenu/mmenu-light.js', array(), '1.0.0', true);
    wp_enqueue_script('custom-js', $dir . '/js/custom.js', array(), '1.0.0', true);
    wp_enqueue_script('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.0.0', true);
    wp_enqueue_script('owl-carousel.js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');


    wp_enqueue_script('count', $dir . '/js/jquery.countdown.js', array(), '1.0.0', true);
    // wp_enqueue_script('addthis', 'https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b15b7f362652ebe', array(), '1.0.0', true );


}

add_action('wp_enqueue_scripts', 'tienda_sportfitness_scripts', PHP_INT_MAX);

/**
 * Theme options page
 */

if (function_exists('acf_add_options_page')) {

    $option_page = acf_add_options_page(array(
        'page_title'     => 'Theme General Settings',
        'menu_title'     => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'     => 'edit_posts',
        'redirect'     => false
    ));
}

function enable_svg_upload($upload_mimes)
{
    $upload_mimes['svg'] = 'image/svg+xml';
    $upload_mimes['svgz'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter('upload_mimes', 'enable_svg_upload', 10, 1);
/**
 * Theme Menus
 */
function custom_navigation_menus()
{

    $locations = array(
        'FooterMenu' => __('FooterMenu', 'text_domain'),
        // 'Ayuda Menu' => __('Ayuda Menu', 'text_domain'),
        'SocialMedia' => __('SocialMedia', 'text_domain'),

    );
    register_nav_menus($locations);
}
add_action('init', 'custom_navigation_menus');

function help_menu()
{

    $locations = array(
        // 'FooterMenu' => __('FooterMenu', 'text_domain'),
        'help_menu' => __('Ayuda Menu', 'text_domain'),
        // 'SocialMedia' => __('SocialMedia', 'text_domain'),

    );
    register_nav_menus($locations);
}
add_action('init', 'help_menu');


function categories_menu()
{

    $locations = array(
        // 'FooterMenu' => __('FooterMenu', 'text_domain'),
        'categories' => __('Categorias', 'text_domain'),
        // 'SocialMedia' => __('SocialMedia', 'text_domain'),

    );
    register_nav_menus($locations);
}
add_action('init', 'categories_menu');

function secondary_menu()
{

    $locations = array(
        'header_secondary_menu' => __('Header Secondary Menu', 'text_domain'),
    );
    register_nav_menus($locations);
}
add_action('init', 'secondary_menu');

/**
 * Theme Transaltions
 */
function custom_wc_translations($translated)
{
    $text = array(
        'Your order' => 'Detalles de la orden',
        'Proceed to checkout' => 'Finalizar compra',
        'Apply coupon' => 'Aplicar código',
        'Coupon code' => 'Código',
        'Update cart' => 'Actualizar carrito',
        'Have a coupon?' => '¿Tienes un código?',
        'Click here to enter your code' => 'Haz click aquí',
        'If you have a' => 'Sí tienes un',
        'please apply it below' => 'ingresalo a continuación',
        'Región / Provincia' => 'Departamento',
        'Localidad / Ciudad' => 'Ciudad',
        'Añadir al carrito' => 'Agregar al Carrito',
        'Valoraciones' => 'Calificación',
        'Productos relacionados' => 'Otros productos',
        'Realizar el pedido' => 'Ir a pagar',
        'None' => 'Ninguno',
        'Popularity' => 'Productos Populares',
        'Average rating' => 'Mejor Calificación',
        'Newness' => 'Productos Nuevos',
        'Price: low to high' => 'Precio más Bajo primero',
        'Price: high to low' => 'Precio más alto primero',
        'Paga con dinero en efectivo' => 'Paga con PSE, Baloto y Efecty en efectivo',
        'Buy Now' => 'Comprar Ahora',
    );
    $translated = str_ireplace(array_keys($text),  $text,  $translated);
    return $translated;
}

add_filter('gettext', 'custom_wc_translations', 20);

/**
 * Product Extra Info
 */


/**
function extra_info()
{
    global $post;
    $product_id = $post->ID;

    $mensaje_envio_tiempo = get_field('mensaje_tiempo_envio', 'option');
?>
    <div id="shipping-days"><?php echo $mensaje_envio_tiempo; ?></div>
    <img class="mercadopago-logos-product" src="<?php echo get_field('payment_logos', 'option'); ?>" alt="MercadoPago" border="0" style="margin-bottom:25px;" />
<?php
    // echo '<img src="https://ecommerce.payulatam.com/logos/PayU_CO.png" alt="PayU Latam" border="0" style="margin-bottom:25px;"/>';
}

add_action('woocommerce_after_add_to_cart_form', 'extra_info', 0);
*/



function extra_info()
{
    global $post;
    $product_id = $post->ID;

    $mensaje_envio_tiempo = get_field('mensaje_tiempo_envio', 'option');
?>
    <div id="shipping-days"><?php echo $mensaje_envio_tiempo; ?></div>
<ul class="payment-logos-list" style="list-style-type: none; padding-left: 0; margin-bottom: 25px;">
<li style="display: inline-block; margin-right: 5px;">
     <img src="https://ciclospecial.com/wp-content/uploads/2024/08/visa.svg" alt="visa" style="max-width: 50px;">
 </li>
<li style="display: inline-block; margin-right: 10px;">
     <img src="https://ciclospecial.com/wp-content/uploads/2024/08/mastercard.svg" alt="Mastercard" style="max-width: 50px;">
 </li>
 <li style="display: inline-block; margin-right: 10px;">
     <img src="https://ciclospecial.com/wp-content/uploads/2024/08/americanexpress.svg" alt="american express" style="max-width: 50px;">
 </li>
 <li style="display: inline-block; margin-right: 10px;">
     <img src="https://ciclospecial.com/wp-content/uploads/2024/08/cencosud.svg" alt="Cencosud" style="max-width: 50px;">
 </li>
 <li style="display: inline-block; margin-right: 10px;">
     <img src="https://ciclospecial.com/wp-content/uploads/2024/08/cmrfalabella.svg" alt="CMR falabella" style="max-width: 50px;">
 </li>
</ul>
<?php
    // echo '<img src="https://ecommerce.payulatam.com/logos/PayU_CO.png" alt="PayU Latam" border="0" style="margin-bottom:25px;"/>';
}

add_action('woocommerce_after_add_to_cart_form', 'extra_info', 0);




/**
function extra_info()
{
    global $post;
    $product_id = $post->ID;

    // Obtener el mensaje de envío desde los campos personalizados
    $mensaje_envio_tiempo = get_field('mensaje_tiempo_envio', 'option');

    // Obtener la lista de logos de pago desde el campo repetidor en ACF
    $payment_logos = get_field('payment_logos_list', 'option'); // Campo repetidor

    // Mostrar el mensaje de envío
    ?>
    <div id="shipping-days"><?php echo esc_html($mensaje_envio_tiempo); ?></div>

    <?php if ($payment_logos) : ?>
        <ul class="payment-logos-list" style="list-style-type: none; padding-left: 0; margin-bottom: 25px;">
            <?php foreach ($payment_logos as $logo) : ?>
                <li style="display: inline-block; margin-right: 10px;">
                    <img src="<?php echo esc_url($logo['payment_logos']['url']); ?>" alt="Logo de Pago" style="max-width: 50px;">
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <?php
}
*/

/**
 * Email Message
 */

function email_message($order, $sent_to_admin, $plain_text, $email)
{
    $mail_note = get_field('nota_correos', 'option');
    if ($email->id == 'customer_processing_order') {

        // Admin via theme setting on wordpress backend
        echo $mail_note;
    }
}

add_action('woocommerce_email_before_order_table', 'email_message', 20, 4);

/**
 * Email Social Media
 */

function social_media_on_email()
{ ?>
    <div>
        <p>Síguenos en redes sociales</p>
    </div>
    <a href="https://www.facebook.com/sportfitness.shop.latam" taget="_blank">Facebook</a>
    <a href="https://www.instagram.com/sportfitness.shop.latam" taget="_blank">Instagram</a>
    <a href="https://www.youtube.com/@sportfitnessshop3020" taget="_blank">Youtube</a>
    <?php
}

add_action('woocommerce_email_footer', 'social_media_on_email');


/**
 * Count Down functionality
 */

function countdown()
{
    $color = get_field('color', 'option');
    $font_color = get_field('font_color', 'option');
    if (get_field('counter', 'option') == '1') {
    ?>
        <div class="promo-count mt-3">
            <h3 class="count-down">Esta promoción finaliza en</h3>
            <div id="getting-started"></div>
        </div>
    <?php
    }
    ?>
    <style>
        .promo-count {
            display: block;
            float: none;
            clear: both;
        }

        div#getting-started,
        .count-down {
            margin-bottom: 30px;
            font-weight: bold;
            text-transform: uppercase;
            color: <?php echo get_field('message_color', 'option'); ?> !important;
            font-size: 25px;
        }

        h3.count-down {
            padding-bottom: 0 !important;
            margin-bottom: 0;
        }

        @media (max-width:375px) {

            div#getting-started {
                font-size: 30px !important;
            }
        }
    </style>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            var fecha = "<?php the_field('fecha', 'option'); ?>";
            // var hasta = ;
            jQuery("#getting-started").countdown(fecha, function(event) {
                jQuery(this).text(
                    event.strftime('%D días %H:%M:%S')
                );
                console.log(hasta);
            });
        });
    </script>
    <?php
}
if (get_field('counter', 'option') == '1') {
    add_action('woocommerce_before_add_to_cart_form', 'countdown', 0);
}
function styles_labels()
{
    if (get_field('counter', 'option') == '1') {
    ?>
        <style>
            .br_alabel.br_alabel_image span {
                background: <?php echo get_field('color', 'option'); ?> !important;
                color: <?php echo get_field('font_color', 'option'); ?> !important
            }
        </style>
    <?php
    }
}
if (get_field('counter', 'option') == '1') {
    add_action('wp_head', 'styles_labels');
}

/**
 * Add custom sorting options (asc/desc)
 */

function custom_woocommerce_get_catalog_ordering_args($args)
{
    $orderby_value = isset($_GET['orderby']) ? wc_clean($_GET['orderby']) : apply_filters('woocommerce_default_catalog_orderby', get_option('woocommerce_default_catalog_orderby'));
    if ('random_list' == $orderby_value) {
        $args['orderby'] = '_featured';
        $args['order'] = 'asc';
        $args['meta_key'] = '';
    }
    return $args;
}

add_filter('woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args');


/**
 * Hide more information tab
 * 
 */

function remove_product_tabs($tabs)
{
    unset($tabs['additional_information']);
    return $tabs;
}

add_filter('woocommerce_product_tabs', 'remove_product_tabs', 9999);


/**
 * Sorting products by inventory
 * 
 */

function first_sort_by_stock_amount($args)
{
    $args['orderby'] = 'meta_value';
    $args['order'] = 'ASC';
    $args['meta_key'] = '_stock_status';
    return $args;
}

add_filter('woocommerce_get_catalog_ordering_args', 'first_sort_by_stock_amount', 9999);


/**
 * Product Local Tag
 */
function local_product()
{
    $local_prouduct = get_field('local_product');

    if ($local_prouduct && $local_prouduct['label'] == 'Si') {
        echo '<div class="local_product"><p>🇨🇴 producto colombiano</p></div>';
    }
}
add_action('woocommerce_after_add_to_cart_form', 'local_product', '-1');



/**
 * Exclude out of stock products from catalog
 */

add_filter('woocommerce_product_query_meta_query', 'shop_only_instock_products', 10, 2);
function shop_only_instock_products($meta_query, $query)
{
    // Only on shop archive pages
    if (is_admin() || is_search() || !is_shop() && !is_archive() || is_home()) return $meta_query;

    $meta_query[] = array(
        'key'     => '_stock_status',
        'value'   => 'outofstock',
        'compare' => '!='
    );
    return $meta_query;
}


remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);

add_action('woocommerce_after_single_product_summary', 'comments_template', 50);



// Custom Fields Single Product

add_action('woocommerce_product_options_pricing', 'size_verifed');

function size_verifed()
{
    global $woocommerce, $post;
    echo '<div class="options_group">';
    woocommerce_wp_checkbox(
        array(
            'id' => 'size_verified',
            'class' => 'checkbox',
            'label' => __('Medidas Verificadas', 'woocommerce'),
        )
    );
    echo '</div>';
}

add_action('save_post_product', 'size_verify_save');

function size_verify_save($product_id)
{
    global $pagenow, $typenow;
    if ('post.php' !== $pagenow || 'product' !== $typenow) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (isset($_POST['size_verified'])) {
        update_post_meta($product_id, 'size_verified', $_POST['size_verified']);
    }
}

// Custom Fields Variable Product

add_action('woocommerce_variation_options_pricing', 'bbloomer_add_custom_field_to_variations', 10, 3);

function bbloomer_add_custom_field_to_variations($loop, $variation_data, $variation)
{
    echo '<div class="options_group">';
    woocommerce_wp_checkbox(
        array(
            'id' => 'size_verified[' . $loop . ']',
            'class' => 'checkbox',
            'label' => __('Medidas Verificadas', 'woocommerce'),
            'value' => get_post_meta($variation->ID, 'size_verified', true)
        )
    );
    echo '</div>';
}

add_action('woocommerce_save_product_variation', 'bbloomer_save_custom_field_variations', 10, 2);

function bbloomer_save_custom_field_variations($variation_id, $i)
{
    $custom_field = $_POST['size_verified'][$i];
    if (isset($custom_field)) update_post_meta($variation_id, 'size_verified', esc_attr($custom_field));
}


add_action('wp_enqueue_scripts', 'myprefix_dequeue_woocommerce_checkout', 10000);

function myprefix_dequeue_woocommerce_checkout()
{
    if (get_post_meta(get_the_ID(), 'disable_woocommerce_checkout_scripts')) {
        wp_dequeue_script('wc-checkout');
        wp_dequeue_script('wc-gzd-checkout');
        wp_dequeue_script('wc-gzdp-checkout');
    }
}

add_filter('woocommerce_related_products', 'mysite_filter_related_products', 10, 1);

function mysite_filter_related_products($related_product_ids)
{
    foreach ($related_product_ids as $key => $value) {
        $relatedProduct = wc_get_product($value);
        if (!$relatedProduct->is_in_stock()) {
            unset($related_product_ids[$key]);
        }
    }

    // Limitar a 6 productos
    return array_slice($related_product_ids, 0, 6);
}
add_filter('woocommerce_output_related_products_args', 'mysite_related_products_args', 20);

function mysite_related_products_args($args)
{
    $args['posts_per_page'] = 6; // Máximo de productos a mostrar
    $args['columns'] = 4; // Columnas en cada slide
    return $args;
}
// En el archivo functions.php o directamente en el template
function mysite_enqueue_owl_carousel() {
    wp_enqueue_style( 'owl-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
    wp_enqueue_script( 'owl-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array( 'jquery' ), '', true );
    wp_add_inline_script( 'owl-carousel-js', '
        jQuery(document).ready(function($) {
            $(".related.products .products").addClass("owl-carousel");
            $(".related.products .products").owlCarousel({
                items: 4,
                loop: true,
                margin: 10,
                nav: true,
                dots: true,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 4 }
                }
            });
        });
    ' );
}
add_action( 'wp_enqueue_scripts', 'mysite_enqueue_owl_carousel' );


if ( ! function_exists( 'custom_woocommerce_template_loop_product_link_open' ) ) {
    /**
     * Insert the opening anchor tag for products in the loop.
     */
    function custom_woocommerce_template_loop_product_link_open() {
        global $product;

        $link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );
        
        if ( ! $product->is_in_stock() ) {
         $outOfStock = "out-of-stock";
        }

        echo '<a href="' . esc_url( $link ) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link ' . $outOfStock .'">';
    }
}
    
// add_action( 'woocommerce_before_shop_loop_item', 'custom_woocommerce_template_loop_product_link_open', 10 );


function whatsapp_icon_cta(){;?>
    <div class="whatsapp-cta" style="position:fixed; bottom: 14px;right: 10px; z-index: 9999;">
        <a href="https://api.whatsapp.com/send?phone=573504760479&text=Hola! Necesito ayuda" target="_blank">
            <img style="max-width: 54px;" src="https://tienda-sportfitness.com/wp-content/uploads/2022/09/icons8-whatsapp.gif">
        </a>
    </div>
<?php
}

add_action('wp_footer', 'whatsapp_icon_cta');


add_action( 'woocommerce_checkout_process', 'bbloomer_checkout_fields_custom_validation' );

function bbloomer_checkout_fields_custom_validation() {
   if ( isset( $_POST['billing_phone'] ) && ! empty( $_POST['billing_phone'] ) ) {
      if ( strlen( $_POST['billing_phone'] ) < 10 ) {
         wc_add_notice( 'Telefono requiere un minimo de 10 caracteres', 'error' );
      }
   }
}


add_action('woocommerce_after_checkout_form', 'checkout_script');

function checkout_script(){
?>
	
		<script>
      jQuery(document).ready(function () {
        console.log('Checkout Scripts loaded!! 🚀');
        let idNumber = jQuery('#billing_cedula_field')
        let idNumberNote = '<p class="note small">En caso de diligenciar NIT, ingresar sin Digito de Verificación</p>'
        jQuery(idNumber).append(idNumberNote)
      });
		</script>
<?php
}

//add_filter( 'woocommerce_gtag_snippet', function( $gtag_snippet ) {
//	return preg_replace( '~</script>~', "gtag('config', 'G-3KXN1RL4D5');\n</script>", $gtag_snippet );
//} );

//maneja stock_quantity infinito  y basarse en sabor español.
// Parámetros configurables
$api_token = 'jR0pi+hSeXpi+hSeX5R05R0aeGNR0aeGN1pi+hSeX5R0';

$api_url = 'https://www.apifleksiprod.site/save_ecommerce_woo';

/**
 * Este método captura y guarda el parámetro 'codigo-fleksi' en una cookie.
 * Se ejecuta en el hook 'init' de WordPress, lo que significa que se ejecutará al inicializar
 * cualquier parte de WordPress, tanto en el área de administración como en el frontend.
 *
 * @see https://developer.wordpress.org/reference/hooks/init/
 */
add_action('init', 'capturar_y_guardar_parametro_codigo_fleksi');

function capturar_y_guardar_parametro_codigo_fleksi()
{  
    // Verifica si el parámetro 'codigo-fleksi' está presente en la URL ($_GET)
    if (isset($_GET['codigo-fleksi'])) {
        // Si el parámetro 'codigo-fleksi' está presente, lo guarda en la variable $codigo_fleksi
        $codigo_fleksi = $_GET['codigo-fleksi'];
        // Establece una cookie llamada 'codigo_fleksi' con el valor del parámetro
        // La cookie expirará en una hora (3600 segundos)
           setcookie('codigo-fleksi', $codigo_fleksi, time() + 3600);   
    }
}

add_action('woocommerce_order_status_changed', 'track_order_status_change_fleksi', 10, 3);
function track_order_status_change_fleksi($order_id, $previous_status, $next_status)
{
    global $api_token, $api_url;
    guardar_codigo_fleksi_y_enviar($order_id, $api_token, $api_url);
}

add_action('woocommerce_thankyou', 'page_thankyou');
function page_thankyou($order_id)
{
    global $api_token, $api_url;
    guardar_codigo_fleksi_y_enviar($order_id, $api_token, $api_url);
}

function guardar_codigo_fleksi_y_enviar($order_id, $api_token, $api_url) {
    $order = wc_get_order($order_id);
    if (!empty($_COOKIE['codigo-fleksi'])) {
        $order->update_meta_data('codigo-fleksi', $_COOKIE['codigo-fleksi']);
        $order->save();
    }
    $codigo_fleksi = $order->get_meta('codigo-fleksi');
    //verificar el estado de la orden
    if (!empty($codigo_fleksi) && $order->get_status() === 'completed') {

        $order_data = $order->get_data();
	 
$products = array(); // Array para almacenar los productos

        // Recorre los productos de la orden
        foreach ($order->get_items() as $item) {
            $product = $item->get_product();
            $product_name = $product->get_name();
            $product_quantity = $item->get_quantity();
            $product_total = $item->get_total();

            // Agrega los detalles del producto al array
            $products[] = array(
                'nombre' => $product_name,
                'cantidad' => $product_quantity,
                'total' => wc_price($product_total)
            );
        }
        $payload = array(
            'codigo-fleksi' => $codigo_fleksi,
            'order_id' => $order_id,
            'status' => $order->get_status(),
            'customer' => array(
                'name' => $order->get_billing_first_name() . ' ' . $order->get_billing_last_name(),
                'email' => $order->get_billing_email()
            ),
            'transaction' => array(
                'id' => $order->get_transaction_id(),
                'date' => $order->get_date_created()->format('Y-m-d H:i:s'),
                'total' => $order->get_total(),
                'sub_total' => $order->get_subtotal()
            ), 'order_data' => $products
        );
        $payload_json = json_encode($payload);
        $args = array(
            'body' => $payload_json,
            'headers' => array(
                'token' => $api_token,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            )
        );
        $response = wp_remote_post($api_url, $args);
    }
}

function remove_wp_version() {
    return '';
}
add_filter('the_generator', 'remove_wp_version');


function custom_theme_widgets_init() {
    register_sidebar(array(
        'name' => __('Shop Sidebar', 'understrap'),
        'id' => 'shop-sidebar',
        'description' => __('Widgets in this area will be shown on the shop page.', 'understrap'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'custom_theme_widgets_init');


add_filter('woocommerce_product_tabs', 'mysite_additional_product_tab');

function mysite_additional_product_tab($tabs)
{
    // Agregar una nueva pestaña
    $tabs['additional_attributes'] = array(
        'title'    => __('Características', 'mytheme'),
        'priority' => 50,
        'callback' => 'mysite_display_additional_attributes_tab_content'
    );

    return $tabs;
}



function mysite_display_additional_attributes_tab_content()
{
    global $product;

    // Mostrar los atributos personalizados
    echo '<div class="product-attributes">';
    echo '<h4>Características del Producto</h4>';
    
    // Muestra todos los atributos del producto
    wc_display_product_attributes($product);

    // Si tienes un atributo personalizado llamado "Marca"
    $terms = get_the_terms($product->get_id(), 'pa_marca');
    if ($terms && !is_wp_error($terms)) {
        echo '<p><strong>Marca:</strong> ' . esc_html($terms[0]->name) . '</p>';
    }

    echo '</div>';
}

add_action('wp_footer', 'update_login_link_text');

function update_login_link_text() {
    // Solo continuar si el usuario está logueado
    if (is_user_logged_in()) {
        $current_user = wp_get_current_user();
        $user_name = esc_html($current_user->display_name);

        // Usamos JavaScript para actualizar el texto del enlace
        ?>
        <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function() {
                var loginLink = document.getElementById('login-link');
                if (loginLink) {
                    loginLink.textContent = '<?php echo $user_name; ?>';
                }
            });
        </script>
        <?php
    }
}



add_action('save_post', 'assign_offers_category_if_discounted', 10, 3);

function assign_offers_category_if_discounted($post_id, $post, $update) {
    // Verifica que el tipo de post sea 'product'
    if ($post->post_type !== 'product') {
        return;
    }

    // Obtén el producto de WooCommerce
    $product = wc_get_product($post_id);

    // Verifica si el producto tiene un precio rebajado
    if ($product->is_on_sale()) {
        // Obtén la ID de la categoría "Ofertas"
        $offer_category_id = get_term_by('slug', 'ofertas', 'product_cat')->term_id;

        // Asigna la categoría "Ofertas" al producto
        wp_set_object_terms($post_id, $offer_category_id, 'product_cat', true);
    } else {
        // Si el producto ya no tiene descuento, opcionalmente puedes remover la categoría "Ofertas"
        wp_remove_object_terms($post_id, 'ofertas', 'product_cat');
    }
}





function enqueue_brand_carousel_scripts() {
    // Slick Carousel
    wp_enqueue_style('slick-carousel', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css');
    wp_enqueue_style('slick-carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css');
    wp_enqueue_script('slick-carousel-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true);

    // Script personalizado para inicializar el carrusel con el nuevo nombre
    wp_enqueue_script('brand-carousel-new-init', get_template_directory_uri() . '/js/brand-carousel-new-init.js', array('jquery', 'slick-carousel-js'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_brand_carousel_scripts');


function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

