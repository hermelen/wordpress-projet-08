<?php

/**
 * Storefront automatically loads the core CSS even if using a child theme as it is more efficient
 * than @importing it in the child theme style.css file.
 *
 * Uncomment the line below if you'd like to disable the Storefront Core CSS.
 *
 * If you don't plan to dequeue the Storefront Core CSS you can remove the subsequent line and as well
 * as the sf_child_theme_dequeue_style() function declaration.
 */
//add_action( 'wp_enqueue_scripts', 'sf_child_theme_dequeue_style', 999 );

/**
 * Dequeue the Storefront Parent theme core CSS
 */
function sf_child_theme_dequeue_style() {
    wp_dequeue_style( 'storefront-style' );
    wp_dequeue_style( 'storefront-woocommerce-style' );
}

/**
 * Note: DO NOT! alter or remove the code above this text and only add your custom PHP functions below this text.
 */

function debug($array){
  echo '<pre>';
  print_r($array);
  echo '</pre>';
}

function get_product_stock() {
  wc_get_template_part('template-parts/stock');
}
add_action( 'woocommerce_after_shop_loop_item', 'get_product_stock', 10 );

global $price;
function double_price($price) {
  // wc_get_template_part('template-parts/price');
  $price = $price/2;
  return $price;
}
add_action( 'raw_woocommerce_price', 'double_price', 10 );
