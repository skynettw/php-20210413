<?php
  include("header.php");
  $chi = 90;
  $eng = 95;
  $mat = 72;
  $his = 85;
  $total = $chi + $eng + $mat + $his;
  $avg = $total / 4;
  echo "Total is $total, Average is $avg";
  include("footer.php");
?>