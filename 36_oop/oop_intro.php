<?php
  require('./store_class.php');
  echo "OOP Demonstration";
  
  $new = new store();
  $new->shopping_cart="blue shopping cart";
  $new->shopping("tcloud");
?>