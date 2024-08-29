<?php

/**
 * The template for displaying all Quotes
 *
 * 
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

?>
<div class="container-fluid" id="imprimir">
  <?php if (current_user_can('editor') || current_user_can('administrator')) :  ?>
    <!-- Customer Details -->
    <?php
    while (have_posts()) {
      the_post(); ?>
      <div class="row bg-black head-quote">
        <div class="col-md-12">
          <div class="quote-head-items d-flex">
            <div class="quote-logo">
              <?php echo the_custom_logo(); ?>
            </div>
            <div class="quote-head-text">
              <p><?php the_title(); ?></p>
            </div>
          </div>
        </div>
      </div>
      <?php if (have_rows('cliente')) : ?>
        <?php while (have_rows('cliente')) : the_row();

          // Get sub field values.
          $full_name = get_sub_field('full_name');
          $phone = get_sub_field('phone');
          $email = get_sub_field('email');
          $address = get_sub_field('address');
          $city = get_sub_field('city_customer');
          $state = get_sub_field('state');

        ?>
          <div class="container mt-5">
            <div class="row">
              <div class="col-md-4 customer-data pull-right">
                <p><strong>Cliente:</strong></p>
                <hr>
                <p>
                  <strong>Nombre: </strong>
                  <?php echo $full_name; ?>
                </p>
                <p>
                  <strong>Teléfono: </strong>
                  <?php echo $phone; ?>
                </p>
                <p>
                  <strong>correo electrónico: </strong>
                  <?php echo $email; ?>
                </p>
              </div>
              <div class="col-md-4 customer-data pull-right">
                <p><strong>Datos de envío: </strong></p>
                <hr>
                <p><strong>Dirección: </strong><?php echo $address; ?></p>
                <p><strong>Ciudad: </strong><?php echo $city; ?></p>
                <p><strong>Departamento: </strong><?php echo $state; ?></p>
              </div>
            </div>
            <hr>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    <?php
    }
    ?>
    <div class="container">
      <!-- Products -->
      <?php if (have_rows('products')) : ?>
        <table class="table">
          <thead>
            <tr>
              <th>Item</th>
              <th>Imagen</th>
              <th>Descripción</th>
              <th>SKU</th>
              <th>Precio Unitario</th>
              <th>QTY</th>
              <th>SubTotal</th>
              <th>Dcto</th>
              <th>Total</th>
              <!-- <th>Total</th> -->
            </tr>
          </thead>
          <?php while (have_rows('products')) : the_row();
            $products = get_sub_field('product');
            $quantity = get_sub_field('qty');
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($products[0]->ID), 'single-post-thumbnail');
            $discount = get_sub_field('discount');

            $product_data = wc_get_product($products[0]->ID);
            $price = $product_data->price;
            $sku = $product_data->sku;
            $tax = $product_data->get_tax_class();
            $price_no_tax = $product_data->get_price_excluding_tax();
            $price_total_item = round($price_no_tax) * $quantity;
            // var_dump($tax);
            $description = $product_data->get_short_description();
          ?>

            <tbody class="quotes-items">
              <?php if ($product_data->stock_status == "instock" || $product_data->stock_quantity > 1) : ?>
                <tr>
                  <!-- Product title -->
                  <td id="title">
                    <strong>
                      <?php echo $products[0]->post_title; ?>
                    </strong>
                  </td>
                  <!-- Image -->
                  <td id="image" scope="row">
                    <span>
                      <?php if ($image[0] == NULL) : ?>

                      <?php else : ?>
                        <img class="fluid-img" src="<?php echo $image[0]; ?>" alt="" srcset="" style="max-width:120px;">
                      <?php endif; ?>
                    </span>
                  </td>
                  <!-- Description -->
                  <td id="description">
                    <?php echo $description; ?>
                  </td>
                  <!-- SKU -->
                  <td>
                    <?php echo $sku; ?>
                  </td>
                  <!-- Unit Price -->
                  <td id="unit-price">
                    <?php echo $price; ?>
                  </td>
                  <!-- QTY -->
                  <td>
                    <?php echo $quantity; ?>
                  </td>
                  <!-- Total Product * -->
                  <td id="total-product">
                    <?php echo $price * $quantity; ?>
                  </td>
                  <!-- Discount -->
                  <td>
                    <?php if ($discount) : ?>
                      <span id="discount-pecentage">
                        <?php echo $discount . "%"; ?>
                      </span>
                      -
                      <span id="discount-value">
                        <?php echo (($price) * $quantity) - ((100 - $discount) * (($price) * $quantity) / 100); ?>
                      </span>
                    <?php else : ?>
                      <?php echo "N/A"; ?>
                    <?php endif; ?>
                  </td>

                  <!-- Total price no tax -->
                  <td id="total-product-price-w-discount" >
                    <?php if ($discount) : ?>
                      <?php echo ((100 - $discount) * (($price) * $quantity) / 100); ?>
                    <?php else : ?>
                      <?php echo ($price) * $quantity; ?>
                    <?php endif; ?>
                  </td>
                  <!-- Discount total -->
                  <td class="discount-value d-none">
                    <?php echo (($price) * $quantity) - ((100 - $discount) * (($price) * $quantity) / 100); ?>
                  </td>
                  <!-- hidden td for math operations -->
                  <td class="total-product-price d-none">
                    <?php echo $price * $quantity; ?>
                  </td>
                  <!-- total-product-price-w-discount -->
                  <td class="total-product-price-w-discount d-none">
                    <?php if ($discount) : ?>
                        <?php echo ((100 - $discount) * (($price) * $quantity) / 100); ?>
                      <?php else : ?>
                        <?php echo ($price) * $quantity; ?>
                      <?php endif; ?>
                  </td>
                  <td class="product-tax-value d-none">
                      <?php echo ($price * $quantity) - ($price_no_tax * $quantity); ?>
                  </td>
                </tr>
              <?php endif; ?>
            </tbody>
          <?php endwhile; ?>
        </table>
        <hr class="black">
        <div class="totals row justify-content-end mt-5">
          <div class="col-md-4">
            <p>
              <strong>Subtotal:</strong>
              <span id="subtotal">

              </span>
            </p>
            <p>
              <strong>Descuento:</strong>
              <span id="discount">

              </span>
            </p>
            <p>
              <strong>Total sin IVA: <span id="total_price"></span></strong>
            </p>
            <p><strong>IVA: <span id="tax-total"></span></strong></p>
            <p><strong>Envío: <span id="shipping"></span></strong></p>
            <p><strong>Total IVA incluido: <span id="total_price_w_tax"></span></strong></p>
            <p><strong>Total IVA incluido + Envío: <span id="total_price_tax_and_shipping"></span></strong></p>
          </div>
        </div>
      <?php endif; ?>

    </div>
    <div class="row quote-footer bg-black">
      <div class="col-12 text-center">
        <p>Calle 11a #31a 89 | Medellín, Colombia | +57 4 322 1391 | +57 3508502615 | contacto@tienda-sportfitness.com</p>
        <p>DEEP & CO SAS | Nit 901036745-2</p>
      </div>
    </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-12">
      <button id="btnCapturar">Descargar Cotización</button>
    </div>
  </div>
</div>
<style>
  td#description ul {
    padding: 0;
  }

  th {
    font-size: 13px;
    text-align: center;
  }

  .customer-data p {
    padding: 0;
    margin: 0;
  }

  .customer-data {
    margin-bottom: 20px;
  }

  #discount {
    border-color: red !important;
  }

  .row.bg-black.head-quote {
    background: black;
    margin-top: 50px;
    padding: 50px 85px;
    color: white;
  }

  .quote-head-items.d-flex {
    justify-content: space-around;
  }

  .bg-black {
    background: black;
    color: white;
  }

  .quote-footer {
    margin-top: 50px;
    padding: 50px 85px;
    margin-bottom: 50px;
  }

  #description {
    font-size: 12px;
  }

  td {
    font-size: 12px;
  }
</style>
<script>
  // Price Format unit price
  // Get all the "row_data" elements into an array
  let unitPrice = Array.prototype.slice.call(document.querySelectorAll("#unit-price"));

  // Loop over the array
  unitPrice.forEach(function(unitPriceFormatted) {
    // Convert cell data to a number, call .toLocaleString()
    // on that number and put result back into the cell
    unitPriceFormatted.textContent = (+unitPriceFormatted.textContent).toLocaleString('es-CO', {
      style: 'currency',
      currency: 'COP'
    });
  });

  // Price Format Total product price
  // Get all the "row_data" elements into an array
  let totalProductPrice = Array.prototype.slice.call(document.querySelectorAll("#total-product"));

  // Loop over the array
  totalProductPrice.forEach(function(totalProductPriceFormatted) {
    // Convert cell data to a number, call .toLocaleString()
    // on that number and put result back into the cell
    totalProductPriceFormatted.textContent = (+totalProductPriceFormatted.textContent).toLocaleString('es-CO', {
      style: 'currency',
      currency: 'COP'
    });
  });

  // Price Format product discount
  // Get all the "row_data" elements into an array
  let productDiscountPrice = Array.prototype.slice.call(document.querySelectorAll("#discount-value"));

  // Loop over the array
  productDiscountPrice.forEach(function(productDiscountPriceFormatted) {
    // Convert cell data to a number, call .toLocaleString()
    // on that number and put result back into the cell
    productDiscountPriceFormatted.textContent = (+productDiscountPriceFormatted.textContent).toLocaleString('es-CO', {
      style: 'currency',
      currency: 'COP'
    });
  });

  // Price Format Total product w discount
  // Get all the "row_data" elements into an array
  let totalProductPriceWithDiscount = Array.prototype.slice.call(document.querySelectorAll("#total-product-price-w-discount"));

  // Loop over the array
  totalProductPriceWithDiscount.forEach(function(totalProductPriceWithDiscountFormatted) {
    // Convert cell data to a number, call .toLocaleString()
    // on that number and put result back into the cell
    totalProductPriceWithDiscountFormatted.textContent = (+totalProductPriceWithDiscountFormatted.textContent).toLocaleString('es-CO', {
      style: 'currency',
      currency: 'COP'
    });
  });


  // var Total Qoute Tax Value + Total without VAT
  var QouteTaxValue;
  var TotalwithoutVat;
  // Total Qoute Tax Value
  
  jQuery(document).ready(function($) {

    var sum_total_data = 0;

    $(".product-tax-value").each(function(index, value) {
      getEachRow = parseFloat($(this).text());
      sum_total_data += getEachRow;
      QouteTaxValue = sum_total_data;
      total = (sum_total_data).toLocaleString('es-CO', {
        style: 'currency',
        currency: 'COP'
      });
    });

    document.getElementById('tax-total').innerHTML = total;

  });

  // Subtotal
  jQuery(document).ready(function($) {

    var sum_total_data = 0;

    $(".total-product-price").each(function(index, value) {
      getEachRow = parseFloat($(this).text());
      sum_total_data += getEachRow;
      total = (sum_total_data).toLocaleString('es-CO', {
        style: 'currency',
        currency: 'COP'
      });
    });

    document.getElementById('subtotal').innerHTML = total;

  });
  // discount value
  jQuery(document).ready(function($) {

    var sum_total_data = 0;

    $(".discount-value").each(function(index, value) {
      getEachRow = parseFloat($(this).text());
      sum_total_data += getEachRow;
      total = (sum_total_data).toLocaleString('es-CO', {
        style: 'currency',
        currency: 'COP'
      });
    });

    document.getElementById('discount').innerHTML = total;

  });
  // Total without VAT
  jQuery(document).ready(function($) {

    var sum_total_data = 0;

    $(".total-product-price-w-discount").each(function(index, value) {
      getEachRow = parseFloat($(this).text());
      sum_total_data += getEachRow;
      TotalwithoutVat = sum_total_data;
      total = (sum_total_data).toLocaleString('es-CO', {
        style: 'currency',
        currency: 'COP'
      });
    });

    document.getElementById('total_price').innerHTML = total;

  });
  jQuery(document).ready(function($) {
    var totalWithVat = TotalwithoutVat + QouteTaxValue;
    total = (totalWithVat).toLocaleString('es-CO', {
        style: 'currency',
        currency: 'COP'
    });
    document.getElementById('total_price_w_tax').innerHTML = total;

    // Total with VAT and shipping
    var shipping = <?= get_field('shipping_price'); ?>;
    var totalWithVatAndShipping;
    totalWithVatAndShipping = TotalwithoutVat + QouteTaxValue + shipping;
    totalAmount = (totalWithVatAndShipping).toLocaleString('es-CO', {
        style: 'currency',
        currency: 'COP'
    });
    document.getElementById('total_price_tax_and_shipping').innerHTML = totalAmount;
    // shipping price
    shippingPrice = (shipping).toLocaleString('es-CO', {
        style: 'currency',
        currency: 'COP'
    });
    document.getElementById('shipping').innerHTML = shippingPrice;
  });
</script>
<script>
  // 
  // $(function() {

  //   var sum_total_data = 0;

  //   $(".price").each(function(index, value) {
  //     getEachRow = parseFloat($(this).text());
  //     sum_total_data += getEachRow
  //   });

  //   document.getElementById('subtotal').innerHTML = sum_total_data;

  // });

  // // 
  // var priceList = jQuery('.quotes-items').find('#price-no-tax');

  // var totalPrice = 0;

  // jQuery.each(priceList, function(i, price) {

  //   totalPrice += parseInt(jQuery(price).text())

  // });

  // jQuery('.total_price').text(totalPrice);

  // // 
  // var priceListTotal = jQuery('.quotes-items').find('#price');

  // var totalPriceWtax = 0;

  // jQuery.each(priceListTotal, function(i, priceWtax) {

  //   totalPriceWtax += parseInt(jQuery(priceWtax).text())

  // });

  // jQuery('.total_price_w_tax').text(totalPriceWtax);
  // // 

  // let totalSum = jQuery('.total_price_w_tax');
  // var taxTotal = totalPriceWtax - totalPrice;

  // jQuery('.tax-total').text(taxTotal);


  // var ShippingPrice = jQuery('#shipping').text();
  // jQuery('.total_price_tax_and_shipping').text(parseInt(totalPriceWtax) + parseInt(ShippingPrice));

  // // Price Format unit price


  // // Get all the "row_data" elements into an array
  // // let unitPrice = Array.prototype.slice.call(document.querySelectorAll("#unit-price"));

  // // // Loop over the array
  // // unitPrice.forEach(function(unitPriceFormatted) {
  // //   // Convert cell data to a number, call .toLocaleString()
  // //   // on that number and put result back into the cell
  // //   unitPriceFormatted.textContent = (+unitPriceFormatted.textContent).toLocaleString('es-CO', {
  // //     style: 'currency',
  // //     currency: 'COP'
  // //   });
  // // });






  // // Get all the "row_data" elements into an array
  // let totalsWshipping = Array.prototype.slice.call(document.querySelectorAll(".total_price_tax_and_shipping"));

  // // Loop over the array
  // totalsWshipping.forEach(function(totalWshipping) {
  //   // Convert cell data to a number, call .toLocaleString()
  //   // on that number and put result back into the cell
  //   totalWshipping.textContent = (+totalWshipping.textContent).toLocaleString('es-CO', {
  //     style: 'currency',
  //     currency: 'COP'
  //   });
  // });


  // // Get all the "row_data" elements into an array
  // let cells = Array.prototype.slice.call(document.querySelectorAll("#price"));

  // // Loop over the array
  // cells.forEach(function(cell) {
  //   // Convert cell data to a number, call .toLocaleString()
  //   // on that number and put result back into the cell
  //   cell.textContent = (+cell.textContent).toLocaleString('es-CO', {
  //     style: 'currency',
  //     currency: 'COP'
  //   });
  // });

  // // Get all the "row_data" elements into an array
  // let pricesNoTax = Array.prototype.slice.call(document.querySelectorAll("#price-no-tax"));

  // // Loop over the array
  // pricesNoTax.forEach(function(priceNoTax) {
  //   // Convert priceNoTax data to a number, call .toLocaleString()
  //   // on that number and put result back into the priceNoTax
  //   priceNoTax.textContent = (+priceNoTax.textContent).toLocaleString('es-CO', {
  //     style: 'currency',
  //     currency: 'COP'
  //   });


  // });
  // // Get all the "row_data" elements into an array
  // let unitPrices = Array.prototype.slice.call(document.querySelectorAll("#unit-price"));

  // // Loop over the array
  // unitPrices.forEach(function(unitPrice) {
  //   // Convert unitPrice data to a number, call .toLocaleString()
  //   // on that number and put result back into the unitPrice
  //   unitPrice.textContent = (+unitPrice.textContent).toLocaleString('es-CO', {
  //     style: 'currency',
  //     currency: 'COP'
  //   });


  // });

  // // Get all the "row_data" elements into an array
  // let TotalpricesNoTax = Array.prototype.slice.call(document.querySelectorAll(".total_price_w_tax"));

  // // Loop over the array
  // TotalpricesNoTax.forEach(function(priceNoTax) {
  //   // Convert priceNoTax data to a number, call .toLocaleString()
  //   // on that number and put result back into the priceNoTax
  //   priceNoTax.textContent = (+priceNoTax.textContent).toLocaleString('es-CO', {
  //     style: 'currency',
  //     currency: 'COP'
  //   });


  // });
  // // Get all the "row_data" elements into an array
  // let TotalTax = Array.prototype.slice.call(document.querySelectorAll(".tax-total"));

  // // Loop over the array
  // TotalTax.forEach(function(priceNoTax) {
  //   // Convert priceNoTax data to a number, call .toLocaleString()
  //   // on that number and put result back into the priceNoTax
  //   priceNoTax.textContent = (+priceNoTax.textContent).toLocaleString('es-CO', {
  //     style: 'currency',
  //     currency: 'COP'
  //   });


  // });

  // // Get all the "row_data" elements into an array
  // let TotalPrice = Array.prototype.slice.call(document.querySelectorAll(".total_price"));

  // // Loop over the array
  // TotalPrice.forEach(function(priceNoTax) {
  //   // Convert priceNoTax data to a number, call .toLocaleString()
  //   // on that number and put result back into the priceNoTax
  //   priceNoTax.textContent = (+priceNoTax.textContent).toLocaleString('es-CO', {
  //     style: 'currency',
  //     currency: 'COP'
  //   });

  // });
  // // Get all the "row_data" elements into an array
  // let shipping = Array.prototype.slice.call(document.querySelectorAll("#shipping"));

  // // Loop over the array
  // shipping.forEach(function(shippingPrice) {
  //   // Convert shippingPrice data to a number, call .toLocaleString()
  //   // on that number and put result back into the shippingPrice
  //   shippingPrice.textContent = (+shippingPrice.textContent).toLocaleString('es-CO', {
  //     style: 'currency',
  //     currency: 'COP'
  //   });

  // });
  // // Get all the "row_data" elements into an array
  // let discounted = Array.prototype.slice.call(jQuery('#discount-value'));
  // console.log(discounted);
  // // Loop over the array
  // discounted.forEach(function(discountedPrice) {
  //   // Convert discountedPrice data to a number, call .toLocaleString()
  //   // on that number and put result back into the discountedPrice
  //   discountedPrice.textContent = (+discountedPrice.textContent).toLocaleString('es-CO', {
  //     style: 'currency',
  //     currency: 'COP'
  //   });

  // });
</script>
<?php else :
    global $wp_query;
    $wp_query->set_404();
    status_header(404);
    get_template_part(404);
    exit();
  endif; ?>
<?php
get_footer(); ?>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.1/dist/html2canvas.min.js"></script>
<script>
  //Definimos el botón para escuchar su click
  const $boton = document.querySelector("#btnCapturar"), // El botón que desencadena
    $objetivo = document.querySelector('#imprimir'); // A qué le tomamos la fotocanvas
  // Nota: no necesitamos contenedor, pues vamos a descargarla

  // Agregar el listener al botón
  $boton.addEventListener("click", () => {
    html2canvas($objetivo) // Llamar a html2canvas y pasarle el elemento
      .then(canvas => {
        // Cuando se resuelva la promesa traerá el canvas
        // Crear un elemento <a>
        let enlace = document.createElement('a');
        enlace.download = "<?php echo the_title(); ?>"; // Le ponemos el nombre del archivo
        // Convertir la imagen a Base64
        enlace.href = canvas.toDataURL();
        // Hacer click en él
        enlace.click();
      });
  });
</script>