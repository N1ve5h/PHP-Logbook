<?php

  if ( $_POST["txtage"] < 21) //if statement age
  {
    echo "You are under 21 years old <br/>";
  }
  else
  {
    echo "You are 21 years old or over<br/>";
  }

  if ( $_POST["txtgender"] == "Male") //if statement gender
  {
    echo "You are a Male";
  }
  else if ( $_POST["txtgender"] == "Female")
  {
    echo "You are a Female";
  }
?>
