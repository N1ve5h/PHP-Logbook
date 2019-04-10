<?php

  header("Content-type: image/jpeg");

  $conn = mysqli_connect('127.0.0.1', 'root', '', 'db1_21706089'); //connect to server.

  $sql = "SELECT image FROM monster WHERE id='" . $_GET[id] ."';";

  $result = mysqli_query($sql, $conn);
  $row = mysqli_fetch_array($result);

  $jpg = $row["image"];

  echo $jpg;
?>
