<?php
  $link = mysqli_connect('127.0.0.1', 'root', '', 'db1_21706089');
  $sql = "UPDATE test SET phone_number='$_GET[txttelno]',email='$_GET[txtemail]' WHERE name='$_GET[txtname]'";
  $result=mysqli_query($link,$sql);
?>
