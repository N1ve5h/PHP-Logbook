<?php
  $mymarks["year 1"] = 55;
  $mymarks["year 2"] = 65;
  $mymarks["year 3"] = 75;
?>
<html> <!-- Added the opening html tag -->
<head>
  <title>Data in table</title>
</head>
<body>
  <table border="1" align="center">
    <tr>
      <th>Index</th>
      <th>Marks</th>
    </tr>
<?php
while (list ($index , $value) = each ($mymarks))
{
  echo "<tr><td>$index</td><td>$value</td></tr>";
}
?>
</table>
</body>
</html>
