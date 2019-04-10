<?php

  $conn = mysqli_connect('127.0.0.1', 'root', '', 'db1_21706089');

$sql = "SELECT id from monster;";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
include ('myfunctions.inc');
html_header("Monster");
while ($row = mysqli_fetch_assoc($result))
{
  echo "<img src='getjpg.php?id=" . $row[id]. "'/>";
}
html_footer();
mysqli_close($conn);
?>
