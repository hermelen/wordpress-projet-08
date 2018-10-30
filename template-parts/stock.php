<?php
  global $product;
  $stock = $product->get_stock_quantity();
  if (!empty($stock) || $stock > 0) {
    echo '<div>';
    echo 'Disponible: '.$stock;
    echo '</div>';
  }
?>
