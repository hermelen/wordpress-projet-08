<?php
  global $product;
  $stock = $product->get_stock_quantity();
  if (!empty($stock)) {
    echo '<div>';
    echo 'Disponible: '.$stock;
    echo '</div>';
  }
?>
