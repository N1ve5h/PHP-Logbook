<?php
  //Connect to server and select database
  $link = mysqli_connect('127.0.0.1', 'root', '', 'db1_21706089');
  $sql = "SELECT * from test";
  //Execute sql statement
  $result = mysqli_query($link,$sql);
?>
<html>
<body>
  <?php
    while ($row = mysqli_fetch_assoc($result))
    {
      echo "<a href =\"wk6ex2action.php?id=$row[name]&phone_number=$row[phone_number]&email=$row[email]\">$row[name]</a></br>";
    }
  ?>
</body>
</html>
