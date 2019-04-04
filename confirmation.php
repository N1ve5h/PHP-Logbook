<?php
  session_start();
  $size = $_SESSION['widgetsize'];
  $price = 0;
  $totalprice =0;

  echo "<h2> Your order qty is ". $_SESSION['widgetquantity']."</h2></br>";
  echo "<h2> your widget size is ". $size ."</h2></br>";
  echo "<h2> the price of ". $size. " is ";

  switch ($size)
  {
    case 'Small': echo "15.75</h2></br>"; $price = 15.75;
    break;

    case 'Medium': echo "16.75</h2></br>"; $price = 16.75;
    break;

    case 'Large': echo "17.75</h2></br>"; $price = 17.75;
    break;

    case 'Extra Large': echo "18.75</h2></br>"; $price = 18.75;
    break;
  }

  $totalprice = $_SESSION['widgetquantity'] * $price;

  echo "<h2> and the selected colour is $_POST[selcolour] </h2></br>";
  echo "<h2> and the total price of the widgets is ". $totalprice."</h2></br>";
?>
