<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
	<body class="index">
		<?php do_action( 'storefront_before_site' ); ?>
		<?php do_action( 'storefront_before_header' ); ?>
    <header class='main-header'>
      <?php get_template_part('template-parts/navbar') ?>
      <div class="title">
        <h2 class="header-h"><?php echo strtoupper(get_bloginfo('name')) ?></h1>
        <h3 class="header-h"><?php echo get_bloginfo('description') ?></h2>
        <a class="btn" href="#">BROWSE OUR PRODUCTS</a>
      </div>
      <a class="arrow" href="#fooTer"><i class="fas fa-angle-down"></i></a>
    </header>
    <main class='site-content'>
      <!-- <h2>Spring Summer 2017</h2> -->
      <div class="container">
        <div class="row" id="catalog">
					<!-- here should be the shop content -->
