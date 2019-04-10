<?php
  include("myfunctions.inc");
  html_header("My second function demo");
  echo "I pay  £". calculatetax(15000,5000) . " tax"; //10000 will be taxed by 40%
  html_footer();
?>
