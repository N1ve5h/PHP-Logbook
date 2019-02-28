<?php
  $mymarks["CO450"] = 75; //Not sure of the marks.
  $mymarks["CO451"] = 39;
  $mymarks["CO452"] = 61;
  $mymarks["CO453"] = 49;
  $mymarks["CO454"] = 50;
  $mymarks["CO455"] = 40;
  $average = 0;
  $total = 0;

  while (list ($index,$value) = each ($mymarks))
  {
    $total = $total + $mymarks[$index];
  }

  $average = $total / 6;
  echo "$average <br/>";
?>
