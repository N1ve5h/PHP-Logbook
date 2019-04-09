<?php
  $link = mysqli_connect('127.0.0.1', 'root', '', 'db1_21706089'); //connect to server.

  $sql = "INSERT INTO test (name,email,phone_number)";
  $sql = $sql . "values ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

  $result = mysqli_query($link,$sql);

  $sql = "SELECT * from test";

  $result = mysqli_query($link,$sql);

  while ($row = mysqli_fetch_assoc($result))
  {
    echo "$row[name] $row[email] $row[phone_number] <br/>";
  }

  mysqli_free_result($result);
  mysqli_close($link);
?>
