<html>
<body>
<?php $hourlyrate = 5.75;
      $hoursperweek = 40;
      $taxrate = 0.22;
      $gross = $hourlyrate * $hoursperweek;
      $netwage = $gross * (1 - $taxrate);
      echo $netwage;
?>
</body>
</html>