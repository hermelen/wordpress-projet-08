<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;
// debug($product);
// $regular_price = $product->get_price();
$sale_price = $product->get_price();
// $regular_price = get_post_meta( get_the_ID(), '_regular_price', true);
// $sale_price = get_post_meta( get_the_ID(), '_sale_price', true);
if ($sale_price < 20) { ?>
	<!-- <p class="price"><?php // echo $product->get_price_html(); ?></p> -->
	<!-- <p class="price"><?php //echo number_format((float)$regular_price, 2, '.', '') ?></p> -->
	<p class="price"><?php echo number_format((float)$sale_price, 2, '.', '') ?></p>
<?php } else { ?>
	<!-- <p class="price"><?php //echo number_format((float)$regular_price, 2, '.', '') ?></p> -->
	<p class="price" style="color: red"><?php echo number_format((float)$sale_price, 2, '.', '') ?></p>
<?php } ?>
