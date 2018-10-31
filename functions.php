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
add_action( 'woocommerce_before_shop_loop_item_title', 'get_product_stock', 10 );

// global $price;
// function double_price($price) {
//   // wc_get_template_part('template-parts/price');
//   $price = $price/2;
//   return $price;
// }
// add_action( 'raw_woocommerce_price', 'double_price', 10 );

function my_custom_style() {
  wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
  wp_enqueue_style( 'fontawesome_css', get_stylesheet_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/fontawesome.min.css' );
}
add_action('wp_enqueue_scripts', 'my_custom_style');

function my_custom_scripts() {
  wp_enqueue_script( 'jQuery_3', get_stylesheet_directory_uri() . '/node_modules/jquery/dist/jquery.min.js');
  wp_enqueue_script( 'popper_js', get_stylesheet_directory_uri() . '/node_modules/popper.js/dist/popper.min.js');
  wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js' );
  wp_enqueue_script( 'fontawesome_js', get_stylesheet_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/js/all.min.js');
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 ); // display title

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 11 );
