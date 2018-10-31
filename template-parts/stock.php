<?php
  global $product;
  $stock = $product->get_stock_quantity();
  if (empty($stock)) {
    echo '<span class="soldout">';
    echo 'SOLD OUT';
    echo '</span>';
  }
?>
