<?php
  session_start();
  echo "<h2> Your order qty is ". $_SESSION['widgetquantity']."</h2></br>";
  echo "<h2> and the selected colour is $_POST[selcolour] </h2></br>";
  echo "<h2> and the total price of the widgets is ". $_SESSION['totalprice']."</h2></br>";
?>
